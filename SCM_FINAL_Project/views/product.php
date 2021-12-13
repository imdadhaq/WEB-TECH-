<?php 

	require_once('../model/usersModel.php');
	
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other//<div class="fakeimg" style="height:200px;">Image</div> */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
a:link, a:visited {
  background-color: #0A2558;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #0A2558;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
	background-color: #0A2558;
  color: white;
}
}
.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

.btn:hover {background: #eee;}

.info {color: #0A2558;}

</style>
</head>
<body>

<div class="header">
  <h1>Product</h1>
</div>

<div class="topnav">
  <a href="index.php">Back </a>
	<a href="../controller/logout.php" style="float:right">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
    </a>
        
  
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Product</h2>
      <h5>Fill With All Deatils of Product </h5>
      
      <h1 class="login-title"> Search With Product Name </h1>
    <form class="form" name="singup" method="post" action="../controller/productcheck.php">
        <table id="id">
            <tr>
                <td>Product Name </td>
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
                <td>Status</td>
                <p>Delivered ,In Stock ,Out Of Stock</p>
                <td><br><input type="text" class="login-input" name="status" placeholder="Status" ></td>
            </tr>
            
            <tr>
                <td> </td>
                <td><br><input type="submit" name="submit" value="Submit" class="login-button"></td>
                <br>
                
                <input type="text" id="name" name="name" value="" onkeyup="Ajax()">
	            <input type="button" name="click" value="Click" onclick="Ajax()">
                <hr>
    
  </table>
  <script type="text/javascript" src="script2.js"></script>
</form>
		
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">
	  <table id="Product" border="1" align="center">
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
				<a href="product_edit.php?id=<?=$user['id']?>"> UPDATE </a>
				<a href="product_delete.php?id=<?=$user['id']?>"> DELETE</a> 
			</td>
		</tr>

		<?php } ?>
   
	</table>
	
	</div>
      
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Return Product</h2>
      <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
             
        </div>
    </div>
    <div class="card">
      <h3>Delivered Product</h3>
      
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
<a href="invoice.php" target="_blank">Invoice</a>
</div>

</body>
</html>




