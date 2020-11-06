<?php
    include "navbar.php";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Feedback</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     <link rel="stylesheet" href="style.css">

     <style>
        body{
            background-image: url(images/66.jpg);
            height:836px;
            width:1536px;
        }

        .wrapper{
            padding:10px;
            margin: 20px auto;
            width:900px;
            height:600px;
            background-color: black;
            opacity: .8;
            color:white;
        }

        .form-control{
            height:70px;
            width:60%;
        }

        .scroll{
            width:100%;
            height:300px;
            overflow: auto;
        }
     </style>
     
 </head>
 <body>
     <div class="wrapper">
        <h3>If you have any suggestions, please comment below.</h3><br> 

        <form style="" action="" method="post">
            <input class="form-control" type="text" name="comment" placeholder="Write Something....."> <br><br>
            <input class="btn btn-default" type="submit" name="submit" value="Comment" style=" width: 100px; height:35px;" >
        </form>
     </div>

     <div class="scroll">
     <?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('', '$_SESSION[login_user]', '$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{

						echo "<tr>";
							echo "<td>"; echo $row['username']; echo "</td>"; 
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
				}

			}

			else
			{
				$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['username']; echo "</td>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
            }

        ?>
     </div>
 </body>
 </html>
