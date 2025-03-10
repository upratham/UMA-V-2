from flask import Flask, render_template, request
import pandas as pd
import random
from sentence_transformers import SentenceTransformer, util

app = Flask(__name__)

# Load the dataset from the Excel file
quiz_data = pd.read_excel('Quiz Data.xlsx')

# Load the pre-trained SentenceTransformer model
model = SentenceTransformer('paraphrase-MiniLM-L6-v2')

# Route for AI Examiner page
@app.route('/ai_examiner', methods=['GET'])
def ai_examiner():
    questions = random.sample(quiz_data['Questions'].tolist(), 10)
    return render_template('ai_examiner.html', questions=questions)

# Route to handle AI model answer processing
@app.route('/run_model', methods=['POST'])
def run_model():
    # Get the student's answer and selected question
    selected_question = request.form['selected-question']
    student_answer = request.form['student-answer']

    # Get the correct answer from the dataset
    correct_answer = quiz_data.loc[quiz_data['Questions'] == selected_question, 'Answers'].values[0]

    # Compute similarity using SentenceTransformer
    correct_embedding = model.encode(correct_answer, convert_to_tensor=True)
    student_embedding = model.encode(student_answer, convert_to_tensor=True)
    similarity_score = util.pytorch_cos_sim(correct_embedding, student_embedding).item()

    # Provide feedback based on similarity score
    if similarity_score > 0.8:
        feedback = f"Correct! Similarity: {similarity_score:.2f}"
    elif 0.5 <= similarity_score <= 0.8:
        feedback = f"Partially Correct! Similarity: {similarity_score:.2f}"
    else:
        feedback = f"Incorrect! Similarity: {similarity_score:.2f}"

    # Reload 10 random questions after submission
    questions = random.sample(quiz_data['Questions'].tolist(), 10)
    return render_template('ai_examiner.html', questions=questions, feedback=feedback)

# Run the app on the local network with the specified IP and port
if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)
