function click(ev) {    
    ev.preventDefault();
  let selectInputs = document.querySelectorAll('select');
  let res = [];
  selectInputs.forEach(input => {
   res.push(input.value)
  })
  return res;
}    