<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>
<html>
<head>
	<title>Edit New User</title>
</head>
<body>
	

	<form method="post" action="signupcheck.php">
		<fieldset>
			<legend>Edit </legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				
				<tr>
					<td>email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update Profile"></td>
				</tr>
			</table>
            <center>	
		<a href="index.php">Back </a> |
		<a href="logout.php"> logout</a>
	</center>
		</fieldset>
	</form>
    <?php
	}else{
		header('location: login.html');
	}
?>
</body>
</html>