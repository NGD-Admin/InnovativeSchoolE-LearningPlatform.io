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
                <h1>About ISEP</h1><br>
                <p> ISEP: Innovative School E- Learning Platform is a web-based learning management system solution
                    that provides the flexibility and accessibility that the users need to ensure stability in their
                    day-to-day routine. </p>
                <p>ISEP focuses on repository of learning materials relevant to the
                    course. It makes them all easily accessible, copied, and downloaded by anyone enrolled
                    in the course. The results of the study will be of great benefit to the following:</p>
                <p>The students. The main concern of this project is the student who will view, send
                    their activities or even access or download file, and stay connected with their schoolmates
                    and professors. Since online learning provides flexibility in terms of where, how, and when
                    they can be accessed, students can learn anytime and anywhere they want. Students will
                    be updated with the events through SMS technology.</p>
                <p> The Teachers. This study will provide absolute control over how they want to teach
                    and interact with their students. They have various tools to choose from to support their
                    preferred teaching styles. Likewise, they can upload files, PowerPoint presentations,
                    modules, and others to supplement their syllabus.</p>
                <p> The parents. Through this project, parents will notify regards to their child’s grades
                    through SMS technology. By linking the system with a SMS service, the institutions
                    notification system will be able to deliver information directly to parents' cell devices.</p>
            </div>

        </div>
    </section>

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-icons">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright-text">
                            <p>
                                &copy; Copyright 2022. | <a href="#">Innovative School E-learning Platform </a> | All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</body>

</html>