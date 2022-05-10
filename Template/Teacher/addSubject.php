<?php
session_start();
     error_reporting(0);        
$conn = new mysqli('localhost','root','','isep-data');
if(isset($_POST["add"])){
    $classname = $_POST['classname'];
$descriptions = $_POST['descriptions'];


if($conn->connect_error){
    die('Conenction Failed: '.$conn->connect_error);
}else{
 
    $stmt=$conn->prepare("INSERT Into addingsubject(classname,descriptions) values(?, ?)");
    $stmt->bind_param("ss",$classname,$descriptions);
    
    $stmt->execute();
    header("Location:../../teacher-homepage.php");
    $stmt->close();
    $conn->close();
}
}
?>