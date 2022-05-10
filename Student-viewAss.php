<?php
session_start();

include("dbtech.php");
include("functions.php");

$row = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISEP | Subject 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/7991a3d294.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
     
            $(".profile .icon_wrap").click(function(){
  $(this).parent().toggleClass("active");
  $(".notifications").removeClass("active");
});

$(".notifications .icon_wrap").click(function(){
  $(this).parent().toggleClass("active");
   $(".profile").removeClass("active");
});

$(".show_all .link").click(function(){
  $(".notifications").removeClass("active");
  $(".popup").show();
});

$(".close, .shadow").click(function(){
  $(".popup").hide();
});
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap');
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            box-sizing: border-box;
            font-family: 'Sunflower', sans-serif;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

            /* ITo Babaguhin>>>>>>>>>>>>>>>>>>>>>>*/
            .container-left {
            margin-top: 20px;
            float: left;
            padding: 20px;
            width: 20%;
            height: 600px;
            background-color: #ccc;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
           
        }
        
        .container-info-grey {
            padding: 20px;
            width: 126%;
            height: 600px;
            background-color: #ccc;
        }
            /* hanggang Dito>>>>>>>>>>>>>>>>>>>*/

        
        .container-info-grey p {
            font-size: 150%;
            text-indent: 7%;
            text-align: justify;
        }
        
        .container-info-grey h1 {
            font-size: 220%;
        }

        .container-info-white{
                padding: 20px;
                width: 100%;
                min-height: 100%;
                background-color: #fff;
            }

        .container-info {
            float: left;
            padding: 20px;
            width: 80%;
            background-color: #ffffff;
            height: 300px;
            flex-grow: 1;
        }
        /* Clear floats after the columns */
        
        section::after {
            content: "";
            display: table;
            clear: both;
        }
        
        a {
            text-decoration: none;
            color: black;
        }



        /* Start for CSS footer */
        
        footer {
            background-color: #0f2433;
            text-align: center;
            color: white;
            margin-top: 40%;   /* Ito yung ieedit para pumantay yung footer sa haba ng page */
        }
        
        .footer-icons ul li {
            display: inline-block;
        }
        
        .footer-icons ul li a {
            border: 1px solid rgb(255, 255, 255);
            color: rgb(255, 255, 255);
            display: block;
            font-size: 16px;
            height: 40px;
            line-height: 38px;
            margin-right: 5px;
            text-align: center;
            width: 40px;
            border-radius: 50%;
        }
        
        .footer-icons {
            text-align: center;
            padding-bottom: 20px;
        }
        
        .popular-tag ul li {
            display: inline-block;
        }
        
        .footer-content {
            display: block;
            overflow: hidden;
        }
        
        .footer-area-bottom {
            background: #0f2433;
            padding: 15px 0;
        }
        
        .copyright-text a {
            color: rgb(255, 255, 255);
        }
        
        .copyright>p {
            margin-bottom: 0;
            color: rgb(255, 255, 255);
        }
        /* End for CSS footer */
        
        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        
        @media (max-width: 600px) {
            nav,
            article {
                width: 100%;
                height: auto;
            }
        }

        /* css for quiz */

        body {
  font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
  font-size: 16px;  
  color: #333;
  background-color: #fff;
}
button, button:hover, button:active, button:focus, button:visited, .btn, .btn:hover, .btn:active, .btn:focus, .btn:visited {
  text-decoration: none !important;
  outline: none !important;
}
.btn.disabled, .btn[disabled] {
  cursor: default;
  opacity: 1;
}
#quiz {
  width: 100%;
  overflow-x: hidden;
  font-family: 'Permanent Marker', cursive;
  letter-spacing: .015em;
}
#quiz .container-fluid {
  margin: 0;
  padding: 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.5);
}
#quiz-stats {
  padding: 16px 0 12px 0;
  margin: 0;
  font-size: 14px;
  color: rgba(0, 0, 0, 0.7);
}
#quiz-stats .fa-bar-chart {
  font-size: 56px;
  color: rgba(0, 0, 0, 0.8);
}
#quiz-stats>div>p {
  padding: 0;
  margin: 0;
}
#quiz-stats>div>span {
  font-size: 24px;
}
#quiz-stats>div>span.fadeIn {
  animation-duration: 0.375s;
}
#quiz-stats>div>span.fadeOut {
  animation-duration: 0.375s;
}
#quiz-question {
  font-size: 20px;
  font-weight: 600;
  margin: 32px 0 26px 0;
}
#quiz-options {
  margin: 20px 0;
  width: 1000px;
}
.quiz-ans-btn {
	font-size: 20px;
  color: #fff;
/*   display: block;   */
  width: 45%;
  min-height: 75px;
  padding: 5px;
  background-color: #669999;
  border: 1px solid rgba(0, 0, 0, 0.075);
  border-radius: 50px;
  outline: none;
  letter-spacing: .05em;
  transition: all 0.5s;
  margin: 8px;
/*   margin:auto; */
  box-shadow: 0px 1px 4px rgba(0,0,0, 0.10); 
  white-space: normal; 
}
.quiz-ans-btn:hover { color: #fff; background-color: #476b6b; }
.btn.quiz-ans-btn:active, .btn.quiz-ans-btn:focus { color: #fff; background-color: #334d4d; }
.quiz-ans-btn.correct {
  background-color: #29a329;
}
.quiz-ans-btn.incorrect {
  background-color: #e60000;
}
#quiz-play-again {
  overflow-y: hidden;
  display: none;
}
#quiz-play-again-btn {  
  display: block;
  font-size: 32px;
  color: #fff;
  background-color: #669999;
	border: 8px double #fff; 
	border-radius: 14px;
	padding: 5px 10px;  
  width: 33%;
  min-height: 100px;
  outline: none;
  letter-spacing: .05em;
  transition: all 0.5s;
  margin: 0px auto;
  white-space: normal;   
}
#quiz-play-again-btn:hover { color: #fff; background-color: #476b6b; }
#quiz-play-again-btn:active, #quiz-play-again-btn:focus { color: #fff; background-color: #334d4d; }
#quiz-play-again-btn.pulse { 
  animation-duration: 2s;
}

@media (max-width: 768px) {
  #quiz-stats { padding: 12px 0 8px 0; font-size: 10px; }   
  #quiz-stats>div>span { font-size: 18px; }
  #quiz-stats>div>p>span { display: none; }
  #quiz-stats .fa-bar-chart { font-size: 54px; }  
  #quiz-question { font-size: 16px; margin: 20px 0 14px 0; }  
  #quiz-options { margin: 14px 0 20px 0; } 
  .quiz-ans-btn { font-size: 16px; min-height: 65px; }  
  #quiz-play-again-btn {  font-size: 28px; width: 66%; }
}
    </style>
</head>

<body>
 
<?php include 'Template/Student/Navigation.php';?>   <!-- Connection para sa templete ng Navigation bar-->
    <section>

    <div id="quiz">
  <div class="container-fluid">
    <div id="quiz-stats" class="row text-center">
      <div class="col-xs-3 col-lg-2">
        <h2>Correct Rate</h2>
        <span id="rate-span" class="animated">0/0</span>
      </div>
    </div>    
  </div>  
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
        <p id="quiz-question" class="animated"></p>
        <div id="quiz-options">
<!--           <button id="quiz-ans-0" class="btn quiz-ans-btn animated">Gale</button>
          <button id="quiz-ans-1" class="btn quiz-ans-btn animated">Perkins</button>
          <button id="quiz-ans-2" class="btn quiz-ans-btn animated">Day</button>
          <button id="quiz-ans-3" class="btn quiz-ans-btn animated">Parker</button>          -->
        </div>
        <div id="quiz-play-again">
          <h3>Your responce recorded. </h3>
          <button id="quiz-play-again-btn" a href="Student-handout.php">BACK</a></button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>

let questions = []; // Global Array of Objects (each Object representing a Question)
let stats = {
  questionsAsked: 0,
  correct: 0,
  correctStreak: 0,
  currentTime: null,
  averageResponseTime: 0
}; // Global stats Object

initiateGame(questions, stats);

/*
// Event Handlers
*/

// Handle click events
document.addEventListener("click", function (event) { // This way of handling is useful for dynamically created elements
  if (event.target.classList.contains("quiz-ans-btn")) { // Handle ".quiz-ans-btn" click
    Array.from(document.querySelectorAll(".quiz-ans-btn")).forEach(btn => btn.disabled = true); // Disable buttons
    event.target.blur();
    const choice = Number(event.target.id.split("-")[2]);
    const responseTime = round((new Date() - stats.currentTime)/1000, 2);
    stats.averageResponseTime = round((stats.averageResponseTime*(stats.questionsAsked-1) + responseTime)/stats.questionsAsked, 2);
    if(questions[0].answers[choice].isCorrect) {
      event.target.classList.add("pulse", "correct");
      stats.correct++;
      stats.correctStreak++;
      setTimeout(() => {
        nextQuestion(questions);
      }, 1250);
    }
    else {
      event.target.classList.add("shake", "incorrect");
      stats.correctStreak = 0;
      setTimeout(() => {
        const correctAnswerId = "quiz-ans-" + questions[0].answers.findIndex(elem => elem.isCorrect);
        document.querySelector("#" +correctAnswerId).classList.add("correct");
        setTimeout(() => {
          nextQuestion(questions);
        }, 1500);        
      }, 750);
    }
    displayStats(stats);
  } 
});
// Handle "quiz-play-again-btn" Click (Not a dynamically created element => No need to handle it the same way as ".quiz-ans-btn")


/*
// Auxiliary Functions
*/

// Initiate New Game
function initiateGame(questions, stats) {
  fetch("https://opentdb.com/api.php?amount=10")
  .then(function(res) {
    if (!res.ok) {
      throw Error(res.statusText);
    }
    return res.json(); // Read the response as json.
  })
  .then(function(data) {
    for(let i=0; i<data.results.length; i++){
      questions.push({
        category: data.results[i].category,
        difficulty: data.results[i].difficulty,
        type: data.results[i].type,
        question: data.results[i].question,
        answers: createAnswersArray(data.results[i].correct_answer, data.results[i].incorrect_answers)
      });
    }
    displayQuestion(questions[0]);
  })
  .catch(function(error) {
    console.log('Looks like there was a problem: \n', error);
  });  
}

// Manipulate API Data structure and return an Answers Array 
function createAnswersArray(correct_answer, incorrect_answers) {
  const totalAnswers = incorrect_answers.length + 1;
  const correct_answer_index = Math.floor(Math.random() * totalAnswers);
  let answersArray = [];
  for(let i=0; i<incorrect_answers.length; i++){
    answersArray.push({
      answer: incorrect_answers[i],
      isCorrect: false
    });
  }
  answersArray.splice(correct_answer_index, 0, {answer: correct_answer, isCorrect: true});
  if(totalAnswers===2) { // => Boolean -> Preferably always show True(1st) - False(2nd) (or Yes - No) -> sort in descending order since both "True" and "Yes" are alphabetically greater than ("False" and "No")
    answersArray.sort((a, b)=> a.answer < b.answer);
  }
  return answersArray;
}

// Display Question
function displayQuestion(questionObject) {
  document.querySelector("#quiz-question").innerHTML = questionObject.question;
  document.querySelector("#quiz-question").classList.remove("zoomOut");
  document.querySelector("#quiz-question").classList.add("zoomIn");
  setTimeout(() => { 
    document.querySelector("#quiz-question").classList.remove("zoomIn"); 
    stats.questionsAsked++;
    stats.currentTime = new Date();    
  }, 1000);
  for(let i=0; i<questionObject.answers.length; i++) {
    let button = document.createElement("button");
    button.disabled = true;
    button.id = "quiz-ans-" + i;
    button.classList.add("btn","quiz-ans-btn", "animated", i%2===0 ? "fadeInLeft" : "fadeInRight");
    button.innerHTML = questionObject.answers[i].answer;
    document.querySelector("#quiz-options").appendChild(button);
    setTimeout(() => { 
      button.disabled = false;
      button.classList.remove(i%2===0 ? "fadeInLeft" : "fadeInRight"); 
    }, 1200);        
  }
}

// Remove current question and display next one
function nextQuestion(questions) {
  document.querySelector("#quiz-question").classList.add("zoomOut");
  for(let i=0; i<questions[0].answers.length; i++) {
     document.querySelector("#quiz-ans-" + i).classList.add(i%2===0 ? "fadeOutLeft" : "fadeOutRight");
  }
  setTimeout(() => {  
    const quizOptions = document.querySelector("#quiz-options");
    while (quizOptions.firstChild) { quizOptions.removeChild(quizOptions.firstChild); }    
    if(questions.length>1) {
      questions.shift();
      displayQuestion(questions[0]);
    }
    else {
      document.querySelector("#quiz-play-again").style.display = "block";
      document.querySelector("#quiz-play-again-btn").classList.add("flipInX");
      setTimeout(() => { 
        document.querySelector("#quiz-play-again-btn").classList.remove("flipInX");
        document.querySelector("#quiz-play-again-btn").classList.add("infinite", "pulse"); 
      }, 1000);   
    }    
  }, 1000);  
}

// Display Stats
function displayStats(stats) {
  document.querySelectorAll("#quiz-stats>div>span").forEach(el => el.classList.add("fadeOut"));
  setTimeout(() => { 
    document.querySelector("#rate-span").innerHTML = stats.correct + "/" + stats.questionsAsked;                
    document.querySelectorAll("#quiz-stats>div>span").forEach(el => { el.classList.remove("fadeOut"); el.classList.add("fadeIn");});
    setTimeout(() => { 
      document.querySelectorAll("#quiz-stats>div>span").forEach(el => el.classList.remove("fadeIn"));
    }, 375);      
  }, 375);  
}

// Auxilliary Rounding Function
function round(value, decimals) {
  return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
} // Note: decimals>=0, Example: round(1.005, 2); -> 1.01

  </script>


    <?php include 'Template/footer.php';?>   <!-- Connection para sa templete ng  Footer bar-->
</body>

</html>