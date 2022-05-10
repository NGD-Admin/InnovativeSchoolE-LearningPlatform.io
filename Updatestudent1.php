<?php
session_start();

include("dbtech.php");
include("functions.php");

$row = check_login($con);
?>
<?php
session_start();
                  
                      $hostname="localhost";
                      $username="root";
                      $password="";
                      $databaseName="isep-data";

                      $connect=mysqli_connect($hostname,$username,$password,$databaseName);
                      if(isset($_POST["update"])){
                        $id = $_POST['id'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $studentname = $_POST['studentname'];
                     
                      $query="UPDATE users SET username='".$username."',`password`='".$password."',`studentname`='".$studentname."'WHERE id ='".$id."'";
                   $result = mysqli_query($connect,$query);
                   if($result){
                     echo'data updated';
                     header("Location:adminhomepage.php");
                   }else{
                     echo'Data not Updated';
                    
                     header("Location:adminhomepage.php");
                   }
                   mysqli_close($connect);
                    }
                    ?>