<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
				

				$status = validate($username, $password);
				
				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../views/index.php');
				}else{
					echo "invalid username/password";
				}

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>