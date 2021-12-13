function validateForm() {
    let x = document.forms["singup"]["username"].value;
    let y = document.forms["singup"]["password"].value;
    let z = document.forms["singup"]["email"].value;
    if (z== "")
    { 
        if(x== "")
        { 
            if (y == "") 
            {
            alert("Name,Password and Email must be filled out");
            return false;
                }
        }
    }
}

function ajax() {
    // Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();
    var method= "POST";
    var url= "../controller/data.php";

    // Instantiating the request object
    request.open(method,url,true);

    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            //document.getElementById("Product").innerHTML = this.responseText;
            var data = JSON.parse(this.responseText);
            console.log(data);
            var html="";
            for (var a=0 ;a<data.length;a++)
            {
                
                var id =data[a].id;
                var product_name =data[a].product_name;
                var cost =data[a].cost;
                var qunatity=data[a].qunatity;

                html +="<tr>";
                 html +="<td>" + id + "</td>";
                 html +="<td>" + product_name  + "</td>";
                 html +="<td>" + cost  + "</td>";
                 html +="<td>" + qunatity + "</td>";
                html +="</tr>";


            }
            document.getElementById("data").innerHTML=html;
        }
    };

    // Sending the request to the server
    request.send();
}

function Ajax(){

	let name = document.getElementById('name').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../controller/data.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('d2').innerHTML = this.responseText;
            document.getElementById('seals-details').innerHTML = this.responseText;		
		}
	}
}
function AjAx(){

	let name = document.getElementById('search_name').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../controller/data.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			
            document.getElementById('seals-details').innerHTML = this.responseText;		
		}
	}
}

