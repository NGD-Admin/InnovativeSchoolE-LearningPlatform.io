<?php
session_start();
error_reporting(0);
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

        /*Start Transition for Background images */

        .banner{
            width: 100%;
         
            height: 100vh;
           
         position: relative;
            overflow: hidden;
          
        }
        .slider{
            width: 100%;
            height: 100vh;
            position: absolute;
            
        }
        #slideImg{
            width: 100%;
            height: 100%;
            
            animation: zoom 3s linear infinite;
        
        }


@keyframes zoom {
    0%{
        transform: scale(1.3);
    }
    15%{
        transform: scale(1);
    }
    85%{
        transform: scale(1);
    }
    100%{
        transform: scale(1.3);
    }
}
        .overlayy{
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7));
            position: absolute;
            top: 0;
        }
        /*End of Transition for Background Images*/
     


        a{
   color: #7f8db0;
}


.navbar{
   
  width: 100%;
  height: 100px;
  padding: 0 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  
}

.navbar .navbar_left .logo a{
   font-family: 'Trade Winds';
   font-size: 20px;
}
.navbar_left{
    position: relative;
    cursor: pointer;
}
.navbar .navbar_right{
   display: flex;
}

.navbar .navbar_right img{
  width: 35px;
}

.navbar .navbar_right .icon_wrap{
  cursor: pointer;
}

.navbar .navbar_right .notifications{
  margin-right: 25px;
  
}

.navbar .navbar_right .notifications .icon_wrap{
  font-size: 28px;
}

.navbar .navbar_right .profile,
.navbar .navbar_right .notifications{
  position: relative;
  
}

.navbar .profile .profile_dd,
.notification_dd{
  position: absolute;
  top: 48px;
  right: -15px;
  user-select: none;
  background: #fff;
  border: 1px solid #c7d8e2;
  width: 350px;
  height: auto;
  display: none;
  border-radius: 3px;
  box-shadow: 10px 10px 35px rgba(0,0,0,0.125),
              -10px -10px 35px rgba(0,0,0,0.125);
              
}

.navbar .profile .profile_dd:before,
.notification_dd:before{
    content: "";
    position: absolute;
    top: -20px;
    right: 15px;
    border: 10px solid;
    border-color: transparent transparent #fff transparent;
}

.notification_dd li {
    border-bottom: 1px solid #f1f2f4;
    padding: 10px 20px;
    
    display: flex;
    align-items: center;
}

.notification_dd li .notify_icon{
  display: flex;
  
}

.notification_dd li .notify_icon .icon{
  display: inline-block;
  background: url('https://i.imgur.com/MVJNkqW.png') no-repeat 0 0;
	width: 40px;
	height: 42px;
}

.notification_dd li.baskin_robbins .notify_icon .icon{
  background-position: 0 -43px;
}

.notification_dd li.mcd .notify_icon .icon{
  background-position: 0 -86px;
}

.notification_dd li.pizzahut .notify_icon .icon{
  background-position: 0 -129px;
}

.notification_dd li.kfc .notify_icon .icon{
  background-position: 0 -178px;
}

.notification_dd li .notify_data{
  margin: 0 15px;
  width: 185px;
}

.notification_dd li .notify_data .title{
  color: #000;
  font-weight: 600;
}

.notification_dd li .notify_data .sub_title{
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-top: 5px;
}

.notification_dd li .notify_status p{
  font-size: 12px;
}

.notification_dd li.success .notify_status p{
  color: #47da89;
}

.notification_dd li.failed .notify_status p{
  color: #fb0001;
}

.notification_dd li.show_all{
  padding: 20px;
  display: flex;
  justify-content: center;
}

.notification_dd li.show_all p{
  font-weight: 700;
  color: #3b80f9;
  cursor: pointer;
}

.notification_dd li.show_all p:hover{
  text-decoration: underline;
}

.navbar .navbar_right .profile .icon_wrap{
  display: flex;
  align-items: center;
}

.navbar .navbar_right .profile .name{
  display: inline-block;
  margin: 0 10px;
  color: #fff;
}

.navbar .navbar_right .icon_wrap:hover,
.navbar .navbar_right .profile.active .icon_wrap,
.navbar .navbar_right .notifications.active .icon_wrap{
  color: #3b80f9;
}
 
.navbar .profile .profile_dd{
  width: 225px;
}
.navbar .profile .profile_dd:before{
  right: 10px;
}

.navbar .profile .profile_dd ul li {
    border-bottom: 1px solid #f1f2f4;
}

.navbar .profile .profile_dd ul li  a{
    display: block;
    padding: 15px 35px;
    position: relative;
}

.navbar .profile .profile_dd ul li  a .picon{
  display: inline-block;
  width: 30px;
}

.navbar .profile .profile_dd ul li  a:hover{
  color: #3b80f9;
  background: #f0f5ff;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.navbar .profile .profile_dd ul li.profile_li a:hover {
    background: transparent;
    cursor: default;
    color: #7f8db0;
}

.navbar .profile .profile_dd ul li .btn{
    height: 32px;
    padding: 7px 10px;
    color: #fff;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    background: #3b80f9;
    width: 125px;
    margin: 5px auto 15px;
}

.navbar .profile .profile_dd ul li .btn:hover{
  background: #6593e4;
}

.navbar .profile.active .profile_dd,
.navbar .notifications.active .notification_dd{
  display: block;
}

.popup {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: all 0.2s ease;
    display: none;
}

.popup .shadow {
    width: 100%;
    height: 100%;
    background: #000;
    opacity: 0.6;
}

.popup .inner_popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: auto;
}

.popup .notification_dd{
  display: block;
  position: static;
  margin: 0 auto;
  height: 357px;
  overflow: auto;
}

.popup .notification_dd:before{
   display: none;

}

.popup .notification_dd li.title{
  font-weight: 700;
  color: #3b80f9;
  display: flex;
  justify-content: center;
  position: relative;
}

.popup .notification_dd li.title .close{
  position: absolute;
  top: 2px;
  right: 10px;
  font-size: 20px;
  cursor: pointer;
}

.popup .notification_dd li.title .close:hover{
  opacity: 0.5;
}
        /* hanggang Dito>>>>>>>>>>>>>>>>>>>>>>>*/









        .Welcome-container{
            position: relative;
            height: 1100px;
            width: 100%;
        }

        a {
            text-decoration: none;
            color: black;
        }
      
        .welcome-Info {
            padding: 20px;
            width: 40%;
            height: 400px;
            background-color: #ccc;
            position: absolute;
            float: right;
            margin: 200px 0 0 700px;
            opacity: .40;
			border-radius: 10px;
        }
        
        .welcome-Info p {
            font-size: 50px;
            text-indent: 7px;
            text-align: center;
            margin-top: 80px;
        }
        
        .Container-user{
            width: 100%;
            
            height: 155px;
            position: absolute;
            background-color: #187bcd;
        }

        .Container-user p1{
            font-size: 70px;
            font-weight: bold;
            margin-left: 100px;
            color: white;
        }

        .Container-user p {
            font-size: 15px;
            margin-left: 100px;
            color: white;
        }

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
          margin-top: 100px;
        }

        #main > aside {
          flex: 1 0 20vw;
          background: #C4C4C4;
          padding: 1em;
          height: 1500px;
        }

        aside .left {
          display: inline;
          position: absolute;
          left: 1100px;
          top: 900px;
          color: black;
          font-size: 23px;
      
          
        }

      .task {
        text-align: center;
      }
   
        /* Style the footer */
        
        footer {
            background-color: #0f2433;
            text-align: center;
            color: white;
            margin-top: 30px;/* Ito yung ieedit para pumantay yung footer sa haba ng page */
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
        .conts {
      background: url("ISEP-Image/books.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 300px;
      width: 300px;
      border: 20px solid #187bcd;
      border-radius: 10px;
      margin-top: 310px;
      margin-left: 10px;
      padding: 5px;
      display: inline-block;
    }


    .card {
      font-size: 40px;
    }

    .card-content {
      text-align: center;
    }

    .card-action {
      text-align: right;
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

<body onload="slider()">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  
     
  

        

            <div class="banner">
                
                <div class="slider">
                <img src="ISEP-Image/pic1.jpg" id="slideImg">
                   
                   </div>
                   <div class="overlayy">
                       </div>
                       <div class="welcome-Info">
                           <b><p>" The best way to build tommorow "</p></b>
                       </div>
      
                           <?php include 'Template/Student/Navigation.php';?>   <!-- Connection para sa templete ng Navigation bar-->
        
               <script>
                   var slideImg = document.getElementById("slideImg");
           
                   var images = new Array(
                           
                           "ISEP-Image/pic2.jpg",
                           "ISEP-Image/pic3.jpg",
                           "ISEP-Image/pic4.jpg",
                           "ISEP-Image/pic5.jpg",
                           "ISEP-Image/pic6.jpg",
                           "ISEP-Image/pic7.jpg"
                   );
        
                var len = images.length;
                var i = 0;
        
                function slider (){
                    if (i > len-1){
                        i=0;
                    }
                    slideImg.src = images[i];
                    i++;
                    setTimeout('slider()', 3000);
                }
            </script>
          <br>
        


       
</div>

<div class="Container-user"><br>
          <p1> <?php echo $row['name']; ?> </p1>
          <p> <?php echo $row['course']; ?></p>
          <p> <?php echo $row['usertype']; ?></p>
        </div>
        <?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "isep-data";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

if (!$connect) {
  echo 'Connection Error: ' . mysqli_connect_error();
}
$sql = 'SELECT classname, descriptions FROM addingsubject';

$result = mysqli_query($connect, $sql);
$addingsubject = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_free_result($result);

mysqli_close($connect);

?>
<?php foreach ($addingsubject as $subject)  ?>

  <div class="conts">
    <div class="card">
      <div class="card-content">
        <a href="student-generalsubject.php?id=<?php echo htmlspecialchars($subject['id'])  ?>">
        <h6> <?php echo htmlspecialchars($subject['classname']) ?></h6>
        <div>
        
        </div>
        </a>
        <div class="card-action">

        </div>
      </div>
    </div>

  </div>
  
      <aside> 
        <div class="left">
          <h1> Tasks </h1><br>
          <hr><br>
          <div class="task">
          <p2> Friday, 25 March 2022 </p2>
          <br><br>
          <p> Quiz <br>17:00 <br> <a href="Student-subject.php">Subject 1</a> </p>
        </div> 
        </div></aside>
    </div>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include 'Template/footer.php';?>   <!-- Connection para sa templete ng Footer bar-->
</body>

</html>