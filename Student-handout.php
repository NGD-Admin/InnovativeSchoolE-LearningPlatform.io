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
            height: 1700px;
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
            height: 3500px;
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
        .elements {
            display: flex;
            flex-wrap: wrap;
            background-color: white;
            margin-top: 10px;
            margin-left: 50px;
            padding: 50px;
        }

        .elements > div {
            background-color: #187bcd;
            width: 250px;
            margin: 50px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
            border-radius: 10px;
        }

        .elements a{
          text-decoration: none;
          color: white;
        }

        .fakeimg {
            background-color: white;
            width: 200px;
            padding: 20px;
            margin-top: 15px;
            margin-left: 25px;
            padding: 30px;
        }
        
        #main {
          display: flex;
          flex: 1;
          margin-top: -10px;
        }

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
        /* End for CSS footer */
        
        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        
        @media (max-width: 600px) {
            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
        
    .conts {
      background: url("ISEP-Image/books.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 300px;
      width: 300px;
      border: 20px solid #187bcd;
      border-radius: 10px;
      margin-top: 10px;
      margin-left: 10px;
      padding: 5px;
      display: inline-block;
    }


    .card {
      font-size: 30px;
    }

    .card-content {
      text-align: center;
    }

    .card-action {
      text-align: right;
    }

    .brand-text {
      font-size: 15px;
      text-decoration: none;
      border: 10px solid green;
      background-color: green;
      color: white;
    }

    .brand-text2 {
      font-size: 15px;
      text-decoration: none;
      border: 10px solid red;
      background-color: red;
      color: white;
    }

    .center {
      text-align: center;
      font-size: 40px;
    }
    .download{
       
        color: green;
    }
    .dl{
        margin-top: 250px;
    }
    </style>
</head>

<body>
 
<?php include 'Template/Student/Navigation.php';?>   <!-- Connection para sa templete ng Navigation bar-->
    <section>
        <nav>
            <div class="container-left">
                <br>
                <a href="Student-homepage.php"><i class="fa-solid fa-arrow-left"></i> Home Page </a>
               
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="Student-subject.php">Task </a>
                <br><br>
                <hr style="width: 70%">
                <br><br>
                <a href="Student-handout.php"><b> Handout </b></a>
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
                    <h2>Handouts</h2>
                    <div id="contentwrapper">
      <div id="content">
        <div class="innertube">
          <?php

          $hostname = "localhost";
          $username = "root";
          $password = "";
          $databaseName = "isep-data";

          $connect = mysqli_connect($hostname, $username, $password, $databaseName);

          if (!$connect) {
            echo 'Connection Error: ' . mysqli_connect_error();
          }
          $sql = 'SELECT id ,file_name FROM handout';

          $result = mysqli_query($connect, $sql);
          $handouts = mysqli_fetch_all($result, MYSQLI_ASSOC);


          mysqli_free_result($result);

          mysqli_close($connect);

          ?>
          <?php foreach ($handouts as $handout) { ?>

            <div class="conts">
              <div class="card">
                <div class="card-content">
               
                  <h6> <?php echo htmlspecialchars($handout['file_name']) ?></h6>
                 
                  </a>
                  <div class="dl">
                  <a class="download" download="<?php echo $handout['file_name'] ?>" href="uploads/?file_name=<?php echo $handout['file_name'] ?>">Download</a>
                  </div>
                  <div class="card-action">

                  </div>
                </div>
              </div>

            </div>
          <?php } ?>
        
     
    </div>
                </div>
                
            </div>
                </div>
                
            </div>

        </div>
    </section>

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