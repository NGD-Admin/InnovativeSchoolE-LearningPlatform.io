<?php
session_start();
     error_reporting(0);        
$conn = new mysqli('localhost','root','','isep-data');
if(isset($_POST["add"])){
$username = $_POST['username'];
$studentpassword = $_POST['studentpassword'];
$studentname = $_POST['studentname'];

if($conn->connect_error){
    die('Conenction Failed: '.$conn->connect_error);
}else{
 
    $stmt=$conn->prepare("INSERT Into student_info(username, studentpassword, studentname) values(?, ?, ?)");
    $stmt->bind_param("sss",$username,$studentpassword,$studentname);
    
    $SELECT = "SELECT username From student_info Where username=? Limit 1";
    $stmt->execute();
    header("Location:adminhomepage.php");
    $stmt->close();
    $conn->close();
}
}
?>