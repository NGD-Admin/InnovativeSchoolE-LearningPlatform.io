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

  
   
<form method="POST" class="form">
            <input type="text" id="text" name="username" placeholder="Username" >
            <input type="password" id="text" name="studentpassword" placeholder="Password" >
            <div class="footer">
          <button type="submit" name="submit"value="Login">Login</button>
        </div>
          </form>

<?php 



	include("dbtech.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$studentpassword = $_POST['studentpassword'];

		if(!empty($username) && !empty($studentpassword) && !is_numeric($username))
		{

			//read from database
			$query = "select * from student_info where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['studentpassword'] === $studentpassword)
					{

						$_SESSION['studentid'] = $user_data['studentid'];
						header("Location: Student-homepage.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

        </div>
      
      </div>
    </div>
  
    </header>

    