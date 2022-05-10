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
    <title>ISEP | About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/7991a3d294.js" crossorigin="anonymous"></script>
    <script src="w3data.js"></script>

    <!--Dito Babaguhin haggang -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $(".profile .icon_wrap").click(function() {
                $(this).parent().toggleClass("active");
                $(".notifications").removeClass("active");
            });

            $(".notifications .icon_wrap").click(function() {
                $(this).parent().toggleClass("active");
                $(".profile").removeClass("active");
            });

            $(".show_all .link").click(function() {
                $(".notifications").removeClass("active");
                $(".popup").show();
            });

            $(".close, .shadow").click(function() {
                $(".popup").hide();
            });
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            font-family: 'Montserrat';
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            color: #7f8db0;
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
            height: 600px;
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

        .container-info {
            float: left;
            padding: 20px;
            width: 80%;
            background-color: #ffffff;
            height: 300px;
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



        label {
            font-size: 17px;
            padding: 4px;
            width: 120px;
            font-family: "Times New Roman", Times, serif;
            display: inline-block;
        }

        input[type=text] {
            width: 30%;

            padding: 4px 20px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 10%;
            background-color: #f0ec10;
            padding: 10px 10px;
            margin: 10px 23%;

        }

        .btn {
            height: 32px;
            padding: 7px 10px;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            background: #3b80f9;
            width: 125px;
            margin-left: 200px;
        }

        /* Start for CSS footer */

        footer {
            background-color: #0f2433;
            text-align: center;
            color: white;
            margin-top: 68%;
            /* Ito yung ieedit para pumantay yung footer sa haba ng page */

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
    </style>
</head>

<body>

    <?php include 'Template/Student/Navigation.php'; ?>
    <!-- Connection para sa templete ng Navigation bar-->
    <section>
    <?php
    include ("student-nav.php");
    ?>


        <div class="container-info">

            <div class="container-info-grey">
                <h3>Personal Information</h3>
                <?php

                error_reporting(0);
                if (isset($_POST['submit'])) {
                    $id = $_GET["id"];
                    $name = $_POST["name"];
                    $birthday = $_POST["birthday"];
                    $address = $_POST["address"];
                    $gender = $_POST["gender"];
                    $age = $_POST["age"];
                    $pnumber = $_POST["phonenumber"];
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $facebook = $_POST["facebook"];
                    $sql = "UPDATE users SET name='$name', birthday='$birthday', address='$address', gender='$gender', age='$age', phonenumber='$pnumber', username='$username',email='$email',facebook='$facebook' where id='$id'";
                    if (mysqli_query($con, $sql)) {
                    } else {
                        echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($con);
                    }

                    exit();
                }
                ?>

                <form action="" method="POST">
                    <input type="hidden" name='id' value='<?php echo $row['id']; ?>'>
                    <label> Name:</label>
                    <input type="text" placeholder="First Name Last Name" name="name" value="<?php echo $row['name']; ?> "><br>

                    <label> Birthday:</label>
                    <input type="text" placeholder="Birthday" name="birthday" value="<?php echo $row['birthday']; ?>"><br>

                    <label> Address:</label>
                    <input type="text" placeholder="Address" name="address" value="<?php echo $row['address']; ?>"><br>
                    <label> Gander:</label>
                    <input type="text" placeholder="Gender" name="gender" value="<?php echo $row['gender']; ?>"><br>
                    <label> Age:</label>
                    <input type="text" placeholder="Age" name="age" value="<?php echo $row['age']; ?>"><br>
                    <label> Phone Number:</label>
                    <input type="text" placeholder="Phone Number" name="phonenumber" value="<?php echo $row['phonenumber']; ?>"><br>
                    <br>
                    <br>
                    <br>
                    <h4>Emails</h4>

                    <label> Username:</label>
                    <input type="text" placeholder=" Username" name="username" value="<?php echo $row['username']; ?>"><br>
                    <label> Gmail:</label>
                    <input type="text" placeholder="Gmail" name="email" value="<?php echo $row['email']; ?>"><br>

                    <label> Email Facebook:</label>
                    <input type="text" placeholder="Email Facebook" name="facebook" value="<?php echo $row['facebook']; ?>"><br>


                    <br>
                    <br>
                    <div class="input-box">

                        <input name="submit" type="submit" value="Save Changes"></input>
                    </div>
                </form>
            </div>
        </div>



    </section>
    <?php include 'Template/footer.php'; ?>
    <!-- Connection para sa templete ng  Footer bar-->
</body>

</html>