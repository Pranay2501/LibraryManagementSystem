<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library Management System</title>
    <link rel="stylesheet" href="style.css">

    <style>
        nav{                                    
    float: right;
    word-spacing: 30px;
    padding: 30px;
}
nav li{
    display: inline-block;
    line-height: 80px;
}
    </style>
</head>
<body>
    <div class="wrapper"> 
        <header>
            <div class="logo">
            <img src="images/9.png">
            <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
            </div>
            <nav>
                <ul>                                  
                    <li>                                          
                        <a href="index.php">HOME</a>
                        <a href="books.php">BOOKS</a>
                        <a href="student_login.php">STUDENT-LOGIN</a>
                        <a href="registration.php">REGISTRATION</a>
                        <a href="feedback.php">ABOUT</a>
                    </li>
                </ul>
            </nav>
        </header>

        <section>
            <div class="sec_img">
            <br><br><br><br>
            <div class="box">
                <br><br><br><br>
                <h1 style="text-align: center; font-size: 35px; font-family: 'Times New Roman', Times, serif;">Welcome to Library</h1>
                <br>
                <h1 style="text-align: center; font-size: 25px; font-family: 'Times New Roman', Times, serif;"">Opens: 9.30AM</h1><br>
                <h1 style="text-align: center; font-size: 25px;font-family: 'Times New Roman', Times, serif;"">Closes: 4.30PM</h1>
            </div>
        </div>
        </section>
</div>

<?php 
    include "footer.php";
    ?>

</body>
</html>