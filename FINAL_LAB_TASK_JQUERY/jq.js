$(document).ready (function () {  
    $('#myForm').submit (function (e) {  
       e.preventDefault();  
       
       var name = $('#name').val();  
       var email = $('#email').val();  
       var password = $('#password').val();  
       var gender = $('#gender').val();
       var dob = $('#day').val();
       var dob1=$('#month').val();
       var dob2 =$('#year').val();
       var bloodGroup = $('#bloodGroup').val();
       var degree = $('')
     $(".error").remove();  
   
   
       if (name.length < 1) {  
         $('#name').after('<span class="error">This field is required</span>');  
       }  
       if (email.length < 1) {  
         $('#email').after('<span class="error">This field is required</span>');  
       } else {  
         var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;  
         var validEmail = regEx.test(email);  
         if (!validEmail) {  
           $('#email').after('<span class="error">Enter a valid email</span>');  
         }  
       }  
       
       $('#myform').validate({ // initialize the plugin
        rules: {
            year: {
                selectcheck: true
            }
        }
    });

    
       
    if ($('input[type=radio][name=gender]:checked').length == 0) {
        ///Display alert message if no RadioButton is checked.
        alert("Please Select your Gender");
    }
    else {
      var hobbies = $('input[type=radio][name=gender]:checked').val()
       
      
   }
     });  
     
    
   });  