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

	function getAllproduct(){
		$con = getConnection();
		$sql= "select * from user";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from users where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editUser($user){
		$con = getConnection();
		$sql= "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from users where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>