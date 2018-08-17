<?php
$uname="admin";
$pwd="admin";
session_start();

$mysqli = new mysqli("localhost", "root", "", "jaffa");
if(isset($_POST['submit'])){
  $un=$_POST['username'];
  $pw=$_POST['password'];
  $sql=mysql_query("select password from users where username='$un'");
if($row=mysql_fetch_array($sql))
{
  if($un==$row['password']){
    header("location:cr.php");
    exit();
}
else{
  echo "Wrong";
}
}}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="loginform.css">
  <title>login</title>
</head>
<body>
  <h1>Login Form</h1>
  <form class="a" method="post" action="cr.php">
    <label>Username</label>
    <input type="text" name="Username" required>
    <br>
    <label>Password</label>
    <input type="password" name="Password" required>
    <br>
    <br>
    <input type="submit" value="login">
  </form>
</body>
</html>

