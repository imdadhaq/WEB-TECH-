window.addEventListener('load', function() {
    document.querySelector('input[type="file"]').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            var img = document.querySelector('img');
            img.onload = () => {
                URL.revokeObjectURL(img.src);  // no longer needed, free memory
            }
  
            img.src = URL.createObjectURL(this.files[0]); // set src to blob url
        }
    });
  });

  function validateForm()
   {
    let x = document.forms["myForm"]["uid"].value;
    if(x == ""){
		document.getElementsByid('id').innerHTML = alert("Invalid");
		}
    else if (x!="" && x > 0)
    {
        document.getElementsByid('id').innerHTML = alert("SucessFully");
    }
}