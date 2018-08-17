<?php
session_start();
$db= mysqli_connect("localhost", "root","","jaffa");
if(isset($_POST['submit'])){
	$username= $_POST['username'];
		$email= $_POST['email'];
	$password= $_POST['password'];

	$password2= $_POST['password2'];
	if($password==$password2)
	{
		$password= md5($password);
		$sql="INSERT INTO users(username,email,password)  VALUES('$username','$email','$password')";
		mysqli_query($db, $sql);
		header("location:submit.php");
	}else{
			

		$_SESSION['message']="pora jaffa";


	}
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<style >
	.play{
		text-align:center;
		border:2px solid grey;
		width:40%;
		height:40%;
		border-radius:2px;
		background:white;
		margin-left:400px;
	}
	.play{
		text-align:center;
		border:2px solid grey;
		width:40%;
		height:40%;
		border-radius:2px;
		background:white;
		margin-left:400px;
	}
	body{
		background-image: url("AI Analytics Rewriting-Customer-Experience-in-Banking_HD.jpg");
	}
	
}
input{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}


	input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;

    background-position: 10px 10px; 
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}


input[type=email]:focus {
    width: 100%;
}
input[type=email] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=password] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=password]:focus {
    width: 100%;
}
.cer{
	border:solid 2px lime;
	border-radius:10px;
}
	
</style>
<body>
	<div class="play">
	<h1>REGISTER,LOGIN AND LOGOUT </h1>
<form action="signup.php" method="post">
		
	<label>Username</label>
	<input type="text" name="username" required>
	<br>
	<br>
	<label>Email</label>
	<input type="email" name="email" required>
	<br>
	<br>
	<label>Password</label>
	<input type="password" name="password" required>
	<br>
	<br>
	<label>Confirm Password</label>
	<input type="password" name="password2" required>
	<br>
	<br>
	<input type="submit"  value="submit" name="submit">

</form>
<?php
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="select *from users WHERE username='$username' AND PASSWORD='$password'";
	$query_run =mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		$_SESSION['username']=$username;
		header('location:forum.php');
	}
	else{
		echo '<script >alert("Invalid")</script>';
	}
}
?>
</div>
<a href="boot.php">Back to home page</a>
</body>
</html>
