<!DOCTYPE html>
<html> 
<link rel="stylesheet" href="templatemo_style.css" /> 

         

 <head>
    
    
        <title>RMgX</title>
    </head>
    <body>
       
 <h1><img src="images/logo.png" alt="RMgX">
        RMgX INTERNS</h1>
<?php
include_once"test.php";
$sql ="INSERT INTO `interns` (`names`)  VALUES ('{$_POST['naam']}')";
$result = mysql_query($sql);
?>
        <button class="MyButton" type="button" onclick="window.location.href='yolo.php'">ADD NEW INTERNS</button>
 <button class="MyButton" type="button" onclick="window.location.href='index.php'">HOME</button>
       <div id="templatemo_slogan">
       <p>INTERNS ADDED</p>
        </body>
</html>