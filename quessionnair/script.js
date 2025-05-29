let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");

let questionCount = 0;
let scoreCount = 0;
let count = 11;
let countdown;
let quizArray = [];
let quizReady = false;

// Fetch questions from backend
async function fetchQuestions() {
  try {
    const res = await fetch("http://localhost/quessionnair/get_questions.php");
    quizArray = await res.json();
    quizReady = quizArray.length > 0;
  } catch (err) {
    console.error("Error fetching questions", err);
  }
}

// Quiz start
startButton.addEventListener("click", () => {
  if (!quizReady) {
    alert("Please wait... questions are still loading.");
    return;
  }
  startScreen.classList.add("hide");
  displayContainer.classList.remove("hide");
  initial();
});

// Restart quiz
restart.addEventListener("click", () => {
  scoreContainer.classList.add("hide");
  startScreen.classList.remove("hide");
});

// Initialize quiz
function initial() {
  quizContainer.innerHTML = "";
  questionCount = 0;
  scoreCount = 0;
  count = 11;
  clearInterval(countdown);
  timerDisplay();
  quizCreator();
  quizDisplay(questionCount);
}

// Create questions
function quizCreator() {
  quizArray.sort(() => Math.random() - 0.5);
  for (let q of quizArray) {
    q.options.sort(() => Math.random() - 0.5);

    let div = document.createElement("div");
    div.classList.add("container-mid", "hide");

    let questionEl = document.createElement("p");
    questionEl.classList.add("question");
    questionEl.innerHTML = q.question;
    div.appendChild(questionEl);

    for (let opt of q.options) {
      let btn = document.createElement("button");
      btn.classList.add("option-div");
      btn.innerText = opt;
      btn.onclick = () => checker(btn, q.correct);
      div.appendChild(btn);
    }

    quizContainer.appendChild(div);
  }

  countOfQuestion.innerHTML = `1 of ${quizArray.length} Questions`;
}

// Show question
function quizDisplay(index) {
  document.querySelectorAll(".container-mid").forEach(card => card.classList.add("hide"));
  document.querySelectorAll(".container-mid")[index].classList.remove("hide");
}

// Check answer
function checker(button, correctAnswer) {
  const current = document.querySelectorAll(".container-mid")[questionCount];
  const options = current.querySelectorAll(".option-div");

  if (button.innerText === correctAnswer) {
    button.classList.add("correct");
    scoreCount++;
  } else {
    button.classList.add("incorrect");
    options.forEach(opt => {
      if (opt.innerText === correctAnswer) opt.classList.add("correct");
    });
  }

  clearInterval(countdown);
  options.forEach(opt => opt.disabled = true);
}

// Next question logic
nextBtn.addEventListener("click", () => {
  questionCount++;
  if (questionCount === quizArray.length) {
    displayContainer.classList.add("hide");
    scoreContainer.classList.remove("hide");
    userScore.innerText = `Your score is ${scoreCount} out of ${quizArray.length}`;
  } else {
    countOfQuestion.innerHTML = `${questionCount + 1} of ${quizArray.length} Questions`;
    quizDisplay(questionCount);
    count = 11;
    clearInterval(countdown);
    timerDisplay();
  }
});

// Timer logic
function timerDisplay() {
  countdown = setInterval(() => {
    count--;
    timeLeft.innerHTML = `${count}s`;
    if (count === 0) {
      clearInterval(countdown);
      nextBtn.click();
    }
  }, 1000);
}

// Start
window.onload = async () => {
  await fetchQuestions();
  startScreen.classList.remove("hide");
  displayContainer.classList.add("hide");
  scoreContainer.classList.add("hide");
};
