<html>



<?php
		include 'database.php';
		if(empty($_SESSION)) // if the session not yet started 
		   session_start();
		
		$query_result=$db->query("update login set UOB='".$_POST['npw']."' where email='".$_SESSION['email']."'");
		header("Location: home.php")







?>

</html>