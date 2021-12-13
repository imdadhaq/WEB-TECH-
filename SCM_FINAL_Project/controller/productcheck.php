<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$productname 	= $_POST['productname'];
        $cost           = $_POST['cost'];
		$quantity 	    = $_POST['quantity'];
		$details 		= $_POST['details'];
		$status = "deliverd";

		if($_POST['productname'] != ""){
			if($_POST['quantity'] != ""){
				if($_POST['details'] != ""){

					$user = [
								'product_name'=> $productname, 
                                'cost'=>$cost,
								'quantity'=>$quantity, 
								'details'=> $details, 
								'status' => $status,
                                
								
							];
							
					$status =  addproduct($user);

					if($status){
						header('location: ../views/product.php');
					}else{
						echo "try again...";
					}
					

				}else{
					echo "Invalid ...";
				}	
			}else{
				echo "Invalid...";
			}
		}else{
			echo "Invalid...";
		}
	}
?>