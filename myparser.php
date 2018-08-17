<!DOCTYPE html>
<html>
<head>
	<title>css</title>
</head>
<style>
	h1{
		text-align:center;
	}
</style>
<body>

</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shiva");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Before using $_POST['value'] 
 
// Instructions if $_POST['value'] exist 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$guarantor = $_POST['guarantor'];
$type = $_POST['type'];
$loanamount = $_POST['loan'];
$Accountnumber = $_POST['account'];
$Nationality = $_POST['Nationality'];
$Aadhar = $_POST['Aadhar'];
$Pan = $_POST['pan'];
 
// attempt insert query execution
$sql = "INSERT INTO pavan VALUES ('$firstname', '$lastname', '$guarantor','$type',$loanamount,$Accountnumber,'$Nationality',$Aadhar,'$Pan')";
if(mysqli_query($link, $sql)){
    echo "<h1>Records added successfully.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>