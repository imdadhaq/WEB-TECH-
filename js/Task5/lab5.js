function checkButton() {    
    var cbox = document.forms["myForm"]["degree"];
    if (
      cbox[0].checked == false &&
      cbox[1].checked == false &&
      cbox[2].checked == false
    ) {
      alert("Please Select Degree");
      return false;
    }
    
    else {
      alert("Successfully Submited");
      return true;
    }
}    