<html>
<head>
	<title>Admin-Login</title>
</head>
<body>
  <?php 
  require 'controller/login_action.php';
?>
	<form method="post" action="">
        <center>
		<fieldset>
			<legend><h1>SCM-Login</h1></legend>
			<table>
            <tr>
					<td>Username:</td>
					<td><input type="text" placeholder="Enter User Name" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" placeholder="Password" name="password" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Login"></td>
                    
				</tr>
	
				<tr>
					
                    <td>Don't Have a account?<a href="viwe/reg.html">Sign Up</a></td>
					
					
				</tr>

				<tr>
					
                    
					<td><a href="#" >Forget password?</a></td>
					
				</tr>
                
			</table>
		</fieldset>
        </center>
	</form>
</body>
</html>