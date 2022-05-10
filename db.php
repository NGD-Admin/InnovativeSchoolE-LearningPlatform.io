<?php

                  
                      $hostname="localhost";
                      $username="root";
                      $password="";
                      $databaseName="isep-data";

                      $connect=mysqli_connect($hostname,$username,$password,$databaseName);

                      if($connect->connect_error){
                          die("Connection Error");
                      }
                      else{
                         
                      }
                    
                    ?>