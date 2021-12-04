function validateForm() {
    let x = document.forms["login"]["username"].value;
    let y = document.forms["login"]["password"].value;
    if(x=="")
    { 
        if (y == "") 
        {
        alert("Name and password must be filled out");
        return false;
            }
    }
}

