function validateForm(date)
{
var date =date;
let date1 = new Date(1900,12,31); 
let date2 = new Date(2016,12,31); 
if (date.valueOf() ==="") 
{
 document.write("")= alert("Date is empty"); 
}

else if (date1.valueOf() < date.valueOf() && date.valueOf()  < date2.valueOf()) { 
  document.write("Thanks"); 
}


console.log(date1.valueOf() === date2.valueOf())
}