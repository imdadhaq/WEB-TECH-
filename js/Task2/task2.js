"use strict"
function validateForm() {
    let x = document.forms["myForm"]["email"].value;
    var myregex = /^([a-zA-Z.-'])*$/;
    var myregex2 = /^([a-zA-Z'])*$/;
    if(x == ""){
		document.getElementsById('email.com')[0].innerHTML = alert("Input required");
		
	}
    
    else if(x.length<2)
    {
		document.getElementsById('email')[0].innerHTML = alert("required atlest 2 charecter");
		
	}
     
    else if(!myregex.test(x))
    {
    alert('invalid');
    }
    
  }