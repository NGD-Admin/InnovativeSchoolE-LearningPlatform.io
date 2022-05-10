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
            width: 100%;
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
        
        .container-info {
            float: right;
            padding: 20px;
            width: 80%;
            background-color: #ffffff;
            height: 300px;
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





            /* Dito Babaguhin>>>>>>>>>>>>>>*/
     footer {
            background-color: #0f2433;
            text-align: center;
            color: white;
            margin-top: 10%;   /* Ito yung ieedit para pumantay yung footer sa haba ng page */
            
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


    <section>
        <nav>
            <div class="container-left">
                <br>
                <a href="Student-homepage.php"><i class="fa-solid fa-arrow-left"></i> Home Page </a>
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="About-vision.php"> Vision of ISEP </a>
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="About-mission.php"> Mission of ISEP </a>
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="About-Isep.php"> About ISEP </a>
                <br><br>
                <br>
            </div>
        </nav>


        <div class="container-info">
            <div class="container-info-grey">
                <h1>Vision of ISEP</h1><br>
                <p> ISEP: Innovative School E-Learning Platform aims to provide an interactive and user-friendly learning management system.</p>
                <p> It collates all academic-based tasks into one portal that allows interaction between students and any other school administrator if available.</p>
                <p> ISEP has an SMS technology where parents or guardian will have an opportunity to be connected, involove and aware of their child performance.</p>

            </div>

        </div>
    </section>

    <?php include 'Template/footer.php';?>   <!-- Connection para sa templete ng Navigation bar-->
</body>

</html>