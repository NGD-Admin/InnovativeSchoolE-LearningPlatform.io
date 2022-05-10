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

        .container-info-white{
                padding: 20px;
                width: 100%;
                min-height: 100%;
                background-color: #fff;
            }

        .grey-box{
            padding: 20px;
            width: 35%;
            min-height: 100%;
            background-color: #ccc;
        }

        .grey-box p{
           font-size: 20px;
        }

        .view-box{
            padding: 10px;
            width: 50%;
            min-height: 100%;
            background-color: rgb(50, 126, 224);
            margin-top: 20px;
            margin-left: 150px;
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
            margin-top: 10%;   /* Ito yung ieedit para pumantay yung footer sa haba ng page */
            
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
        .meeting{
          
        display: inline-block;
          width: 140px;
          height:80px;
          top: -10px;
         left: 850px;
      }
  
      .post{
        position: absolute;
          
            width: 70%;
            height:100px;
            bottom:10px;
            background-color: #ccc;
          
      }
      .button-meeting{
          
        margin-left: 690px;
        width: 300px;
      }
      .accept {
  color: #FFF;
  background: #44CC44;
  padding: 15px 20px;
  box-shadow: 0 4px 0 0 #2EA62E;
}
.accept:hover {
  background: #6FE76F;
  box-shadow: 0 4px 0 0 #7ED37E;
}
.deny {
  color: #FFF;
  background: tomato;
  padding: 15px 20px;
  box-shadow: 0 4px 0 0 #CB4949;
}
.deny:hover {
  background: rgb(255, 147, 128);
  box-shadow: 0 4px 0 0 #EF8282;
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
 
<?php include 'Template/Student/Navigation.php'; ?>   <!-- Connection para sa templete ng Navigation bar-->
    <section>
        <nav>
            <div class="container-left">
                <br>
                <a href="Student-homepage.php"><i class="fa-solid fa-arrow-left"></i> Home Page </a>
               
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="student-generalsubject.php"><b>General </b></a>
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="Student-subject.php">Task </a>
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="Student-handout.php"> Handout </a>
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="Student-grade.php"> Grade </a>
                <br><br>
                <br>
            </div>
        </nav>


        <div class="container-info">
            <div class="container-info-grey">
                <div class="container-info-white">
               <div class="meeting"> 
                  <div class="icon-insidecontainer">
                  
                   <a> &nbsp;&nbsp;<img src="ISEP-Image/groupchat.png" width="30px"alt="">
                   </div>
            </div>
            <div class="subtitle">
            <center>
            <h1>POP CULTURE</h1>
            <h2><b>10:30 - 12:00 AM</b></h2>
            <h2><b>MONDAY AND WENESDAY</b></h2>
            </center>
            </div>
           
            <div class="post">
                
                    <h2>&nbsp;Presentation Report </h2>
                    <h3>&nbsp;Group 1</h3>
                    
                    <div class="button-meeting">
                    <a href="#" class="accept">Join <span class="fa fa-check"></span></a>
  <a href="#" class="deny">DENY <span class="fa fa-close"></span></a>
  </div>



            </div>
                </div>
                
            </div>

        </div>
    </section>

    <?php include 'Template/footer.php';?>   <!-- Connection para sa templete ng  Footer bar-->
</body>

</html>