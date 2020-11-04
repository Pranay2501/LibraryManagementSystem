<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     <link rel="stylesheet" href="style.css">

</head>
<body>
    
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
</body>
</html>