<!DOCTYPE html>
<html>
<head>
    <title>Insert Image</title>
</head>
<body>
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = new mysqli('localhost','root','','test');
    if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	} 

	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
	$image_name = addslashes($_FILES['image']['name']);
	$sql = "UPDATE usersinf set image='$image' WHERE Username='11029325'";
	if (!$con->query($sql)) {                          // Error handling
		echo "Something went wrong! :("; 
	}
	else{
		echo "done saving";
	}
	if(($res = $con->query("select * FROM usersinf WHERE Username='11029325'"))==True){
		echo " main aa gaya";
		$rows=$res->fetch_assoc();
		$i=$rows['image'];
	//echo '<img src="'.base64_encode($rows['image']).'" alt="HTML5 Icon" style="width:128px;height:128px">';
	//echo '';
	$image='<img src="data:image;base64,'.base64_encode($i).'"style="width:128px;height:128px">';
	echo $image;
	}
	else{
		echo "salay kia kar raha hay";
	}
}
?>
<form action="blob.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload</button>
</form>
<?php
    echo $msg;
?>
</body>
</html>