
<?php 
error_reporting(0);
session_start();


	include("functions.php");

  


  
  $dbHost     = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName     = "isep-data";
  $con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
  if ($con===false) {
    die("Connection Error");
}
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];


			//read from database
			$query = "select * from users where username = '".$username."' AND password='".$password."'limit 1";
			$result = mysqli_query($con, $query);

		$row=mysqli_fetch_array($result);

    if($row["usertype"]=="student"){
     	$_SESSION['id'] = $row['id'];
      header('Location:Student-homepage.php');
      
    }
    elseif($row["usertype"]=="admin"){
      $_SESSION['id'] = $row['id'];
      header('location:assessment/home/adminHome.php');
    }
    elseif($row["usertype"]=="teacher"){
      $_SESSION['id'] = $row['id'];
      header('location:teacher-homepage.php');
    }
    else{
      echo"username and password is wrong";
    }
  }

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ISEP | Login Sample </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
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
            top: 0px;
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
        header {
            background-color: #0f2433;
            height: 50px;
            padding: 10px 20px;
            font-size: 30px;
            color: white;
        }
  /* Dito simula For the Header*/
       
  .nav-icons{
            height: 35px;
            width: 35px;
            

        }
        .nav-links{
            float:right;
            padding: 10px 35px 5px 10px;
           position: relative;

        }
        /* For Drop down Link for user profile about sbc and Logout*/

        .nav-links-1{
        float:right;
        padding: 10px;
        padding-bottom: 0;
        position: relative;
        border-radius: 5px;
        cursor: pointer;

        }
        .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        top: 69px;
        height: 90px;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        overflow: hidden;
        }
        .dropdown-content a {
        color: black;
        padding: 10px 15px;
        text-decoration: none;
        display: block;
        font-size: 20px;
        cursor: pointer;
        }
        .show {
            display: block;
        }

        .nav-home{
            font-size: 50px;
           color: #ffffff;
           text-decoration: none;
        }

         /* start log in pop up*/
         .overlay {
            position: fixed;
            display: none;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
            z-index: 100;
          }
          
          .overlay.open {
            display: flex;
            animation: show-overlay 0.5s;
          }
          
          @keyframes show-overlay {
            0% {
              opacity: 0;
            }
            100% {
              opacity: 1;
            }
          }
          
          .login {
            padding: 40px 40px;
            background: white;
            border-radius: 10px;
            padding-left: 30px;
            padding-right: 30p;
          }
          
          .header {
            position: relative;
          }
          
          .header h1 {
            text-align: center;
            text-transform: uppercase;
            color: #000051;
            padding-bottom: 15px;
            margin: 10px 10px;
            border-bottom: 2px solid #000051;
          }
          
          .header i {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 20px;
            color: #000051;
          }
          .body .form input {
           
              outline: none;
              margin-bottom: 15px;
              font-stretch: 16px;
              color: #999;
              text-align: left;
              padding: 14px 20px;
              width: 100%;
              display: inline-block;
              box-sizing: border-box;
              border: 1px solid #e5e5e5;
              background: #f7fafc;
              transition: 0.3s ease;
              border-radius: 35px;
          }
  
          .body .form input:focus {
            border-color: #534bae;
          }
          
          .footer {
            position: relative;
            height: 40px;
            width: 100%;
          }
          
          .footer button {
            font-size: 18px;
            color: #fff;
            width: 100%;
            background: #0568c1;
            border: none;
            padding: 14px 15px;
            font-weight: 500;
            transition: 0.3s ease;
            border-radius: 35px;
            cursor: pointer;
          }
          
          .footer button:hover {
            background: #534bae;
          }
    </style>
</head>
<body onload="slider()">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  
     
  
    <header>


        
<a class="nav-links-1" onclick="myFunction()" ><img class="nav-icons" src="ISEP-Icon/Userdropdown.png" alt=""></a>
<div id="myDropdown" class="dropdown-content">
    <a href="About-vision.html">About ISEP</a>
    <a class="btn" onclick="toggleLogin()">Login</a>
    <i class="fas fa-times" onclick="toggleLogin()"></i>
  </div>

  <a class="nav-home"><img src="ISEP-Icon/ISEP-Icon.png"  Style="width: 150px;"></a>
<div class="overlay">
<div class="login">
<div class="header">
  <h1>Login</h1>
  <i class="fas fa-times" onclick="toggleLogin()"></i>
</div>
<div class="body">






<form method="POST" action="#" class="form">
    <input type="text" id="text" name="username" placeholder="Username" >
    <input type="password" id="text" name="password" placeholder="Password" >
    <div class="footer">
  <button type="submit" value="Login">Login</button>
</div>
  </form>
</div>

</div>
</div>

</header>

        

            <div class="banner">
                
                <div class="slider">
                <img src="ISEP-Image/pic1.jpg" id="slideImg">
                   
                   </div>
                   <div class="overlayy">
                       </div>
                       <div class="welcome-Info">
                           <b><p>" The best way to build tommorow "</p></b>
                       </div>
      
                          
        
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
  

  <script>
    function toggleLogin() {
      document.querySelector(".overlay").classList.toggle("open");
    }
  </script>
          <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.nav-links-1')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            </script>
     
   

   
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
   
 
    

</body>

</html>