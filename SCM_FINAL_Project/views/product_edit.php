<?php 
	include('header.php');
	require_once('../model/usersModel.php');

	$id = $_REQUEST['id'];
	$user = getProductById($id);
	
?>

<html>
<head>
	<title>Edit New User</title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php"> logout</a>
	</center>

	<form method="post" action="../controller/product_update.php">
		<fieldset>
			<legend>Edit </legend>
			<table>
				<tr>
					<td>Product Name:</td>
					<td><input type="text" name="product_name" value="<?=$user['product_name']?>"></td>
				</tr>
				<tr>
					<td>Cost:</td>
					<td><input type="text" name="cost" value="<?=$user['cost']?>"></td>
				</tr>
				<tr>
					<td>Quantity:</td>
					<td><input type="text" name="quatity" value="<?=$user['quantity']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>