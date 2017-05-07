<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="namal_pat";
	$count=0;
	
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$username="murad2014@namal.edu.pk";
	$email=$_POST['uemail'];
	$UOB=$_POST['uuob'];
	$year=$_POST['uyear'];
	$contact=$_POST['ucontact'];
	$department=$_POST['udept'];
	$newpassword=$_POST['new'];
	$newpasswordagain=$_POST['renew'];
	$Query="Update students set email='$email', year='$year', contact='$contact', Department='$department' where UOB='$UOB'";
	if($conn->query($Query)==True){
	if(!empty($_POST["checkingbox"])){
		if(($newpassword==$newpasswordagain)){
			$Query2="update Login set Password='$newpassword' where username='$username'";
			$conn->query($Query2);
		}
		header("Location:editstudentdata.php");
	}
	header("Location:editstudentdata.php");
	}
	else{
		header("Location:editstudentdata.php");
	}
?>
</body>
</html>