<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Form</title>
  </head>
  <style>
  body {background-color: CornFlowerBlue;}
  span {color: red}
  fieldset{font-family: Stencil;}
  </style>
  <body>

<?php

if(isset($_POST['add']))
{
$servername = "localhost:3306";
$username = "root";
$password = "Barlow";
$dbname = "appstore";

// Create connection
$conn = mysql_connect("localhost:3306", "root", "Barlow");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

// define variables and set to empty values
$userERR = passERR = "";
$user = $_POST['user'];
$pass = $_POST['pass'];

)
$userSql = "SELECT USERname FROM login where USERname = '$user'";
$userQuery = mysql_query($userSql,$conn);
if($userQuery){
	$passSql = "SELECT USERpass FROM login where USERpass = '$pass'";
	$passQuery = mysql_query($passSql,$conn);
	if($passQuery){
		echo "Login Successful";
	}
	else{
		echo "Login Failed";
	}
}else{
	echo "Username does not exist";
}

mysql_select_db($dbname);

mysql_close($conn);
}

else{

?>
<form name="loginForm" action="index.php" method="post">
       <fieldset align="center">
       <legend>Login Form</legend>
       <label>Username: <span>*</span><input type="text" name="user"/></label> <br/>
       <label>Password: <span>*</span><input type="password" name="pass"/></label> <br/>
       <input name="login" type="submit" value="Login" id="login"> 
   </fieldset>
   </form>
   </body>
<html/>