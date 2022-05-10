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
    <title>ISEP | About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/7991a3d294.js" crossorigin="anonymous"></script>
    <!--Dito Babaguhin haggang -->
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
        *{
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: 'Montserrat';
}

body{
    font-family: Arial, Helvetica, sans-serif;
}

a{
   color: #7f8db0;
}

        .container-info-grey p {
            font-size: 150%;
            text-indent: 7%;
            text-align: justify;
        }
        
        .container-info-grey h1 {
            font-size: 220%;
        }
        
        .container-info {
            margin-top: 30px;
            padding: 20px;
            margin-left: 30px;
            width: 90%;
            background-color:  #ccc;
            max-height: auto;
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

        .openBtn {
      display: flex;
      justify-content: left;

    }

    .openButton {
      border: none;
      border-radius: 5px;
      background-color: rgb(83, 83, 182);
      color: white;
      padding: 24px 20px;
      cursor: pointer;
      position: relative;
    }

        .formPopup {
      display: none;
      position: fixed;
      margin-left: 100px;
      top: -3%;
      height: 620px;
      transform: translate(-50%, 5%);
      border: 3px solid rgb(83, 83, 182);
      z-index: 9;
      width: 800px;


    }

    .formPopup2 {
      display: none;
      position: fixed;
      left: 50%;
      top: 5%;
      transform: translate(-50%, 5%);
      border: 3px solid rgb(83, 83, 182);
      z-index: 9;

    }

    .formPopup3 {
      display: none;
      position: fixed;
      left: 50%;
      top: 5%;
      transform: translate(-50%, 5%);
      border: 3px solid rgb(83, 83, 182);
      z-index: 9;
    }

    .formContainer {
      max-width: 800px;
      padding: 20px;
      background-color: #fff;
    }

    .formContainer select {
      width: 90%;
      padding: 15px;
      margin: 5px 0 20px 0;
      border: none;
      background: #eee;
    }

    .formContainer input[type=text],
    .formContainer input[type=password] {
      width: 80%;
      padding: 15px;
      margin: 5px 0 20px 0;
      border: none;
      background: #eee;
    }

    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    .formContainer .btn {
      padding: 12px 20px;
      border: none;
      background-color: #8ebf42;
      color: #fff;
      cursor: pointer;
      width: 50%;
      margin-bottom: 15px;
      opacity: 0.8;
    }

    .formContainer .cancel {
      background-color: #cc0000;
    }

    .formContainer .btn:hover,
    .openButton:hover {
      opacity: 1;
    }

    ul li {
      list-style: none;
      display: inline-block;
      margin-right: 10px;
    }
        table {
      width: 100%;
    }

        table,
    th,
    td {
      text-align: center;
      border: 1px solid black;
      border-collapse: collapse;
    }

    tr:nth-child(even) {
      background-color: rgba(150, 212, 212, 0.4);
    }

    th:nth-child(even),
    td:nth-child(even) {
      background-color: rgba(150, 212, 212, 0.4);
    }

        .openButton {
        border: none;
        border-radius: 5px;
        background-color: rgb(83, 83, 182);
        color: white;
        padding: 5px 2px;
        font-size: 12px;
        cursor: pointer;
        position: relative;
      }

      .openButton2 {


        background-color: rgb(83, 83, 182);
        color: white;
        padding: 0 5px;
        cursor: pointer;

      }

      .openButton3 {


        background-color: rgb(168, 49, 25);
        color: white;
        padding: 0 5px;
        cursor: pointer;

      }

      .formPopup {
        display: none;
        position: fixed;
        left: 30%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid rgb(83, 83, 182);
        z-index: 9;

      }

      .formPopup2 {
        display: none;
        position: fixed;
        left: 30%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid rgb(83, 83, 182);
        z-index: 9;
      }

      .formPopup3 {
        display: none;
        position: fixed;
        left: 30%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid rgb(83, 83, 182);
        z-index: 9;
      }


        
     /* Start for CSS footer */





            /* Dito Babaguhin>>>>>>>>>>>>>>*/
     footer {
            background-color: #0f2433;
            text-align: center;
            color: white;
            margin-top: 40%;   /* Ito yung ieedit para pumantay yung footer sa haba ng page */
            
        }
            /* hanggang Dito>>>>>>>>>>>>>>>*/
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
    </style>


</head>

<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <?php include 'Template/Student/Navigation.php';?>



<div class="mainContainer">
<?php
if(!isset($_GET['id'])){
    die('SubjectCode not Provided');
}
require_once('db.php');
$studentID=$_GET['id'];
$sql= "SELECT * FROM `users` where id=$id";

$result = $connect->query($sql);

if($result -> num_rows != 1){
die('student not In database');
}
$data=$result->fetch_assoc();


?>


        <form action="Updatestudent1.php" class="formContainer" method="POST">

<h2>Updating of Subject</h2>

<label for="username">
  <strong>username</strong>
</label>
<input type="text" id="subject" placeholder="" name="username" required value="<?= $data['username']?>">
<br>
<label for="sD">
  <strong>student password</strong>
</label>
<input type="text" id="sD" placeholder="" name="password" required value="<?= $data['password']?>">

<br>
<label for="sT">
  <strong>Student Name</strong>
</label>
<input type="text" id="sT" placeholder="" name="studentname" required value="<?= $data['studentname']?>">
<br>
<button type="submit" class="btn" name="update">Update Now!</button>
<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</form>

    
 
    
  <script>
    var menuList = document.getElementById("menuList");
    menuList.style.maxHeight="0px";

    function togglemenu(){
        if(menuList.style.maxHeight=="0px"){
           menuList.style.maxHeight="439px";
           menuList.style.fontSize="15px";
        }
        else{
           menuList.style.maxHeight="0px";
        }
    }
            
function startTime() {
const today = new Date();
let h = today.getHours();
let m = today.getMinutes();
let s = today.getSeconds();
m = checkTime(m);
s = checkTime(s);
document.getElementById('time').innerHTML =  h + ":" + m + ":" + s;
setTimeout(startTime, 1000);
}

function checkTime(i) {
if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
return i;
}
const d = new Date();
document.getElementById("date").innerHTML = d.toDateString();

function openForm() {
document.getElementById("popupForm").style.display = "block";

}
function openForm2() {
document.getElementById("popupForm2").style.display = "block";

}
function openForm3() {
document.getElementById("popupForm3").style.display = "block";

}
function closeForm() {
    window.location.href = "adminhomepage.php";
}




</script>
</div>