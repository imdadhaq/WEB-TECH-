<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){

					$user = [
								'username'=> $username, 
								'password'=>$password, 
								'email'=> $email, 
								
							];
							
					$status = addUser($user);

					if($status){
						header('location: ../views/login.html');
					}else{
						echo "try again...";
					}
					

				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>