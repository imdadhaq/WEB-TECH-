<html>
<head>
<title>Product</title>

</head>
<body>




    <h1 class="login-title"> Search With Product Name </h1>
    <form class="form" name="singup" method="post" action="../controller/productcheck.php">
        <table id="id">
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
                <td> </td>
                <td><br><input type="submit" name="submit" value="Submit" class="login-button" onclick="ajax()"></td>
                <br>
                
                <input type="text" id="name" name="name" value="" onkeyup="Ajax()">
	            <input type="button" name="click" value="Click" onclick="Ajax()">
                <hr>

                
            </tr>
            
            
             <tbody id="d2">

                
            </tbody>
            <a href="product_list.php"> EDIT</a> | 
				<a href="product_list.php"> DELETE</a> 
            
        </table>
        <script type="text/javascript" src="script2.js"></script>

</form>
</body>
</html>

