<?php 
	require_once('db.php');


	function validate($username, $password){
		$con = getConnection();
		$sql= "SELECT * FROM user where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}
	//"INSERT into `users` (username, password, email, create_datetime) VALUES ('$username', '" . md5($password) . "', '$email')";

	function addUser($user){
		$con = getConnection();
		//$sql= "insert into users values('','{$user['username']}', '{$user['password']}', '{$user['email']}')";
		$sql= "INSERT into `user` values('','{$user['username']}', '{$user['password']}', '{$user['email']}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	//This Block is for Product Database and Tabel 
	//This Block is for Product Database and Tabel 
	function addproduct($user){
		$con = getConnection();
		//$sql= "insert into users values('','{$user['username']}', '{$user['password']}', '{$user['email']}')";
		$sql= "INSERT into `product` values('','{$user['product_name']}','{$user['cost']}', '{$user['quantity']}', '{$user['details']}', '{$user['status']}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllproduct(){
		$con = getConnection();
		$sql= "select * from product";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getProductByname($data){
		$con = getConnection();
		$sql= "select * from product where product_name={$data}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from user where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editUser($user){
		$con = getConnection();
		$sql= "update user set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from user where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getProductById($id){
		$con = getConnection();
		$sql= "select * from product where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editProduct($user){
		$con = getConnection();
		$sql= "update product set product_name='{$user['productname']}',cost='{$user['cost']}', quantity='{$user['quatity']}', details='{$user['details']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$con = getConnection();
		$sql= "delete from product where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>