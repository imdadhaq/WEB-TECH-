<?php 
	include('header.php');
	require_once('../model/usersModel.php');

	$id = $_REQUEST['id'];
	$user = deleteProduct($id);
	
?>

<html>
<head>
	<title>Edit New User</title>
    <h1>Delete Sucessfully</h1>
    <center>	
		<a href="index.php">Back </a> |
		<li class="log_out">
        <a href="../controller/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
	</center>
</html>