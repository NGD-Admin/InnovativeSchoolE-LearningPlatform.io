<?php
include "config.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $stat=$db->prepare("select * from handout where id=?");
    $stat->bindParam(1,$id);
    $stat->execute();
    $data= $stat->fetch();

    $file='uploads/'.$data['file_name'];


    if(file_exists($file)){

       readfile($file);
       exit;
    }
}