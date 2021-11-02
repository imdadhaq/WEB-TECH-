<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){
                    if($_POST['name'] !=""){

					$myfile = fopen('user.txt', 'a');
					$user = $_POST['username']."|".$_POST['password']."|".$_POST['email']."|".$_POST['name']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					header('location: login.php');
                }else{
                    echo "Invalid Name....";
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