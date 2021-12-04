
<?php 

	require_once('../model/usersModel.php');
	
?>
<html>
<head>
	<title>Product</title>
	
</head>
<body>

	<form class="form" name="singup" method="post" action="../controller/productcheck.php" onsubmit="return validateForm()">

		<h1 class="login-title">Registration</h1>
		
			<table>
				<tr>
					<td>Product Name :</td>
					<td><br><input type="text" class="login-input" name="productname" placeholder="Product Name"  ></td>
				</tr>
				<tr>
					<td>Price of Product</td>
					<td><br><input type="text" class="login-input" name="cost" placeholder="Cost" ></td>
				</tr>
				<tr>
					<td>Quantity </td>
					<td><br><input type="text" class="login-input" name="quantity" placeholder="Quantity" ></td>
				</tr>
				<tr>
					<td>Details</td>
					<td><br><input type="text" class="login-input" name="details" placeholder="Details" ></td>
				</tr>
				<tr>
					<td></td>
					<td><br><input type="submit" name="submit" value="Submit" class="login-button"></td>
					

					
				</tr>
				
			</table>
			<script type="text/javascript" src="script2.js"></script>
	</form>
		
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
    
</head>
<body>

	

	<br>

	<table border="1" align="center">
		<tr>
			<th>Poroduct ID</th>
			<th>Poroduct NAME</th>
			<th>Product Price</th>
			<th>Product Quantity</th>
			<th>Discription of Product </th>
			<th>ACTION</th>
		</tr>

	<?php  
		$result = getAllproduct();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['id']?></td>
			<td><?=$user['product_name']?></td>
			<td><?=$user['cost']?></td>
			<td><?=$user['quantity']?></td>
			<td><?=$user['details']?></td>
			<td>
				<a href="edit.php?id=<?=$user['id']?>"> UPDATE </a> | 
				<a href="delete.php?id=<?=$user['id']?>"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
   
	</table>
    <center>	
		<a href="index.php">Back </a> |
		<li class="log_out">
        <a href="../controller/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
	</center>
</body>
</html>

