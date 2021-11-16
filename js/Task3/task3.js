function checkButton() {    
    var getSelectedValue = document.querySelector( 'input[name="gender"]:checked');   
        
    if(getSelectedValue != null) {   
        document.getElementById("disp").innerHTML = getSelectedValue.value + "  is selected";   
    }   
    else {   
        document.getElementById("error").innerHTML  = "*You have not selected any ";   
    }   
}    