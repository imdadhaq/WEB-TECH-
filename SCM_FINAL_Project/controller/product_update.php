<?php 
	require_once('../model/usersModel.php');

	$productname 	= $_REQUEST['product_name'];
	$cost       	= $_REQUEST['cost'];
	$quantity       = $_REQUEST['quantity'];
    $details        = $_REQUEST['details'];
	$id 		    = $_REQUEST['id'];

	$user = ['id'=>$id, 'product_name'=>$productname, 'cost'=>$cost, 'quantity'=>$quantity,'details'=>$details];
	$status = editProduct($user);

	if($status){
		header('location: ../views/product.php');
	}else{
		header('location: ../product_edit.php?id='.$id);
	}

?>
