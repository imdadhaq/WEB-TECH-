"use strict"
function validateForm() {
    let x = document.forms["myForm"]["name"].value;
    var myregex = /^([a-zA-Z.-'])*$/;
    var myregex2 = /^([a-zA-Z'])*$/;
    if(x == ""){
		document.getElementsById('h1')[0].innerHTML = alert("Input required");
		
	}
    
    else if(x.length<2)
    {
		document.getElementsById('h1').innerHTML = alert("required atlest 2 charecter");
		
	}
     
    else if(!myregex.test(x))
    {
    alert('invalid');
    }
    else if(x[0]>0 || x[0]<0)
    {
    alert('ok');
    }
  }