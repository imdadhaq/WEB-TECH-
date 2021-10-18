<!DOCTYPE html>
<html>
<head>
	<body>
	</body>
	
				<form action="Regcheck.php" method="post">
				<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form>
		<br/>
		
				
				Id<br>
				
		         <input Id="Id" name = "Id" type="text"><br>
		     Passsword<br>
				
		         <input Password="password" name = "password" type="text">
				
				<br>
			    
				
				Confirm Password<br>
				<input name="confirmPassword" type="password"><br>
					
			 Name<br>
				
				<input name="Name" type="text"><br>
				Email	<br>		
					<input name="email" type="text">
					<br>

					<input type="radio" name="userType"
					<?php if (isset($userType) && $userType=="user") echo "checked";?>
					value="user">User
					<input type="radio" name="userType"
					<?php if (isset($userType) && $userTyper=="admin") echo "checked";?>
					value="admin">Admin
		            
						
					
		<br><input type="submit" name="submit" value="Sing up">
		<a href = "login">Sing in</a>|
        </select>
	</form>
    </fieldset>
    </form>
	</head>
</html>
