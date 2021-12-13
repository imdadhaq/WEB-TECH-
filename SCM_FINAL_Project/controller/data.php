<?php

session_start();
/*
require_once('../model/usersModel.php');
        
			$data =array();

		$result = getAllproduct();
		while ($user = mysqli_fetch_assoc($result)) { 
            $data[]=$user;
	        
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
        
        

		 } 
         echo json_encode($data);
		 */
		$search = $_REQUEST['name'];

		$con = mysqli_connect('localhost', 'root', '', 'scm');
		$sql= "select * from product where product_name like '%{$search}%'";
		$result = mysqli_query($con, $sql);
	
	
		$data = "<table border=1 >
					<tr>
						<th>ID</th>
						<th>Product Name </th>
						<th>Cost</th>
						<th>Quantity</th>
						<th>Discription<th>
						
						</tr>";
	
		while ($row = mysqli_fetch_assoc($result)) {
			$data .= 	"<tr>
							<td>{$row['id']}</td>
							<td>{$row['product_name']}</td>
							<td>{$row['cost']}</td>
							<td>{$row['quantity']}</td>
							<td>{$row['details']}</td>
							
						</tr>";
		}
	
		$data .= "</table>";
		echo $data;

?>