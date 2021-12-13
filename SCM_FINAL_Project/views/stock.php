<!DOCTYPE html>
<html lang="en">
<head>
<title>Order</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#">Inventory</a>
  
  <a href="#">Rules and Regulation </a>
  <a href="index.php">Back </a> |
		<li class="log_out">
        <a href="../controller/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
</div>

<div class="content">
<h1 class="login-title"> Search With Product Name </h1>
 
                <input type="text" id="name" name="name" value=""  />
                <input type="button" name="click" value="Click" onclick="ajax()">
                <hr>
                <div id="d2">

             </div>
            <a href="product_list.php"> EDIT</a> | 
				<a href="product_list.php"> DELETE</a> 
          <script type="text/javascript" src="script3.js"></script>
        </div>

</body>
</html>

