<?php 

	require_once('../model/usersModel.php');
	
?>

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
			<th>ID</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>

	<?php  
		$result = getAllproduct();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['id']?></td>
			<td><?=$user['username']?></td>
			<td><?=$user['password']?></td>
			<td><?=$user['email']?></td>
			<td>
				<a href="edit.php?id=<?=$user['id']?>"> EDIT</a> | 
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