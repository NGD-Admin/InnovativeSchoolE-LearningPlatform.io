<?php
            require_once('db.php');

            if(isset($_GET["id"])){
                $id=$_GET['id'];
  $sql="DELETE From `users` Where id=$id";
                if($connect->query($sql)==true){
                    header("Location:adminhomepage.php");
                }
                else{

                }

            }



                      
                      ?>