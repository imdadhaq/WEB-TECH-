<?php 
	session_start();
	require_once('connectdatabase.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
        
		if(empty($username) || empty($password) || empty($email)){
             echo "Null";
		}else{
			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				echo "done";
			}else{
                echo "Null";
			}
		}
	}
?>