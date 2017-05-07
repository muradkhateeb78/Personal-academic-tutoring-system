<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	include 'database.php';
	$name=$_POST['uname'];
	$education=$_POST['edu'];
	$email=$_POST['email'];
	$department=$_POST['dept'];
	$contact=$_POST['contact'];
	//$checkbox=$_POST['changePassword'];
	$check="select ID from pats";
	$result=$db->query($check);
	while($row=$result->fetch_assoc()){
		$count=$row['ID'];
	}
	$count++;
	$query="Insert into pats VALUES(".$count.",'".$name."','".$email."','".$contact."','".$department."') ";
	$query1="Insert into login VALUES(".'123'.",'".$email."','".$name."',". 0 .",'teacher')";
	$db->query($query);
	$db->query($query1);
	header("Location: admin.php");
	
?>
</body>
</html>