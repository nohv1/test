<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stl.css">
</head>
<body>
<h1> MONBLOG </h1>
<form class="loginsin" method="GET" action="index.php" align="center">
   
    username
    <input type="text" name="user"  required placeholder="Username" ></br>
    </br>
    
    password
    <input type="password" name="passwd" required placeholder="Password" ></br>
    </br>
    
  <input type="submit" name="sign" class="sign" value="sign">
  <input type="submit" name="login" class="login" value="login" >
 </form>
 <?php
 


?>  
</body>
</html>