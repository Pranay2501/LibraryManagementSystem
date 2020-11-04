<?php
    include "navbar.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    
     <!--bootstrap links(https://www.w3schools.com/bootstrap/bootstrap_get_started.asp)-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     <link rel="stylesheet" href="style.css">

     <style type="text/css">
        section
        {
          margin-top: -20px;
        }
      </style>
    </head>
    <body>
        <!--
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                 <a class="navbar-brand active" >ONLINE LIBRARY MANAGEMENT SYSTEM</a>
                </div>
                <ul class="nav navbar-nav">                                  
                    <li><a href="index.php">HOME</a></l1>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="feedback.php">ABOUT</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="student_login.php"><span class="glyhicon glyphicon-log-in"> LOGIN </span></a></li>
                    <li><a href="student_login.php"><span class="glyhicon glyphicon-log-out"> LOGOUT </span></a></li>
                    <li><a href="registration.php"><span class="glyhicon glyphicon-user"> SIGN UP </span></a></li>
                </ul>
             </div>
         </nav>
    -->
    <section>
        <div class="stu_log">
            <br><br><br><br>
          <div class="box2">
              <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp Library Management System</h1><br>
              <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1><br>
            <form name="Registration" action="" method="">
              <div class="login">
                <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br><br>
                <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br><br>
                <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br><br>
                <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br><br>
                <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br><br>
                <input class="form-control" type="text" name="email" placeholder="Email" required=""><br><br>
                <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
            </form>
          </div>
        </div>
      </section>  
</body>
</html>