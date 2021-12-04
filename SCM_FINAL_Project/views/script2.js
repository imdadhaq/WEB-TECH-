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