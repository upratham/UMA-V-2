from flask import Flask, request, jsonify, send_file
from flask_cors import CORS
import pandas as pd
from sentence_transformers import SentenceTransformer, util
from flask_limiter import Limiter
from flask_limiter.util import get_remote_address
import matplotlib.pyplot as plt
import io

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

# Configure rate limiting
limiter = Limiter(
    get_remote_address,
    app=app,
    default_limits=["200 per minute"]
)

# Load the SentenceTransformer model
model = SentenceTransformer('paraphrase-MiniLM-L6-v2')

# Load questions from the CSV file
def load_questions_from_csv(file_path):
    try:
        df = pd.read_csv(file_path)
        return df.to_dict(orient="records")
    except Exception as e:
        print(f"Error loading CSV file: {e}")
        return []

# Load questions on startup
questions = load_questions_from_csv('Flask_app/questions_2.csv')

# Root endpoint
@app.route('/', methods=['GET'])
def home():
    return "Welcome to the Student Performance API. Use the available endpoints to interact with the application."

# Endpoint to get questions for a specific practical
@app.route('/api/practical/<practical_id>', methods=['GET'])
@limiter.limit("50 per minute")
def get_practical_questions(practical_id):
    try:
        # Derive the range of items based on the practical number
        start_item = practical_id + "0"  # e.g., A10
        end_item = practical_id + "9"   # e.g., A19

        print(f"Filtering questions for items between {start_item} and {end_item}")  # Debugging output

        # Filter questions where the item falls within the range
        practical_questions = [
            q for q in questions
            if start_item <= str(q.get('item', '')).strip() <= end_item and len(str(q.get('item', '')).strip()) == len(start_item)
        ]

        # Check and return results
        if practical_questions:
            return jsonify(practical_questions)
        else:
            return jsonify({'error': f'No questions found for Practical {practical_id}'}), 404
    except Exception as e:
        print(f"Error in get_practical_questions: {e}")
        return jsonify({'error': 'Internal Server Error'}), 500


# Endpoint to calculate scores for submitted answers
@app.route('/api/submit_all_answers', methods=['POST'])
@limiter.limit("20 per minute")
def submit_all_answers():
    data = request.json
    answers = data.get('answers', [])
    scores = []

    for answer in answers:
        question_code = answer.get('question_code')
        student_answer = answer.get('student_answer')

        # Find the model answer for the given question
        model_answer = next((q['Respuestas'] for q in questions if q['item'] == question_code), None)
        if model_answer:
            # Calculate the score
            score = calculate_score(student_answer, model_answer)
            scores.append({'question_code': question_code, 'score': score})
        else:
            scores.append({'question_code': question_code, 'score': 'Question not found'})

    return jsonify({'scores': scores})

# Function to calculate similarity score
# Function to calculate similarity score
import math

# Function to calculate similarity score
def calculate_score(student_answer, model_answer):
    embeddings = model.encode([student_answer, model_answer])
    similarity = util.cos_sim(embeddings[0], embeddings[1]).item()
    raw_marks = similarity * 5  # Scale score to 5
    
    # Ensure no negative marks and round down to the nearest smaller multiple of 0.5
    marks = max(0, math.floor(raw_marks * 2) / 2)
    return marks


# Endpoint to generate and display combined performance graphs
@app.route('/api/performance_graph', methods=['POST'])
def performance_graph():
    data = request.json
    scores = data.get('scores', [])

    question_numbers = [score['question_code'] for score in scores]
    question_scores = [score['score'] for score in scores if isinstance(score['score'], (int, float))]

    # Define colors for each score: green for scores >= 6, else red
    bar_colors = ['green' if score >= 3 else 'red' for score in question_scores]

    # Create a figure with two subplots
    fig, axs = plt.subplots(2, 1, figsize=(10, 10))

    # Plotting Question-wise Scores
    axs[0].bar(question_numbers, question_scores, color=bar_colors)
    axs[0].set_title('Student Performance per Question (Out of 5)')
    axs[0].set_xlabel('Question Code')
    axs[0].set_ylabel('Score')

    # Plotting Horizontal Total Score with a limit of 70
    total_score = sum(question_scores)
    max_score = 50  # Assuming each question is out of 5
    axs[1].barh(['Total Score'], [total_score], color='blue')
    axs[1].set_xlim(0, max_score)
    axs[1].set_title(f'Total Score: {total_score} / {max_score}')
    axs[1].set_xlabel('Total Score')
    axs[1].set_ylabel('Score')

    plt.tight_layout()

    # Create an in-memory bytes buffer for the plot
    img_io = io.BytesIO()
    plt.savefig(img_io, format='png')
    img_io.seek(0)
    plt.close()  # Close the plot

    return send_file(img_io, mimetype='image/png')

# Run the app
if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000)
