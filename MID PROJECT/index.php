<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
    <center>
	<h1>Welcome to Supply Chain Management!</h1>
    <a href="viwe/edit.php"> Create New User</a> |
    <a href="#"> Profile </a> |
	<a href="logout.php"> Logout</a>
    <hr>
	<a href="viwe/edit.php">Invoice </a><br>
    <a href="#">Specificatione</a><br>
    <a href="#">Orders</a><br>
    <a href="#">Rules and regulation</a><br>
    <a href="#">Material availability(</a><br>
    <a href="viwe/suppliers tracking.php">suppliers tracking</a><br>
    <a href="#">Service offered</a><br>
    <a href="#">Finish product update</a><br>
    <a href="#">Return</a><br>
    <a href="#">Replacement</a><br>
    <a href="#">Total update</a><br>
    <a href="#">Inventory update</a><br>
    <hr>
	
    </center>
</body>
</html>

<?php
	}else{
		header('location: login.php');
	}
?>