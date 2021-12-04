<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$productname 	= $_POST['productname'];
        $cost           = $_POST['cost'];
		$quantity 	    = $_POST['quantity'];
		$details 		= $_POST['details'];

		if($_POST['productname'] != ""){
			if($_POST['quantity'] != ""){
				if($_POST['details'] != ""){

					$user = [
								'name'=> $productname, 
                                'cost'=>$cost,
								'quantity'=>$quantity, 
								'details'=> $details, 
                                
								
							];
							
					$status =  addproduct($user);

					if($status){
						header('location: ../views/product.php');
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