<?php


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
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

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #0A2558;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: Black;
  display: none;
  padding: 100px 20px;
  height: 100%;
  text-align: center;
  
}

#Home {background-color:  white;}
#News {background-color:  white;}
#Contact {background-color:  white;}
#About {background-color:  white;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, '#0A2558')">Home</button>
<button class="tablink" onclick="openPage('News', this, '#0A2558')" id="defaultOpen">Return</button>
<button class="tablink" onclick="openPage('Contact', this, '#0A2558')">Replacement</button>
<button class="tablink" onclick="openPage('About', this, '#0A2558')">Total Update</button>
<a href="index.php">Back </a>
	<a href="../controller/logout.php" style="float:right">Log out</a>




<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Home is where the heart is..</p>
</div>

<div id="News" class="tabcontent">
  
<input type="text" id="search_name" name="search_name" placeholder="Search..." onkeyup="Return()">

<table id ="seals-details">
            
</table>

</div>

<div id="Contact" class="tabcontent">

<input type="text" id="search_name" name="search_name" placeholder="Search..." onkeyup="Replace()">

<table>
</table id="repalce">

<table>
  
</div>

<div id="About" class="tabcontent">
  <h3>Total Update</h3>
  <p>Who we are and what we do.</p>
</div>

<script type="text/javascript" src="service.js"></script>
<script type="text/javascript" src="service2.js"></script>


</body>
</html>