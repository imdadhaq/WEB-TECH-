function Return()
{
    let name = document.getElementById('search_name').value;
    let xhttp= new XMLHttpRequest();

    //xhttp.open('GET', 'abc.php?name='+name, true);
    xhttp.open('POST', '../controller/service.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name='+name);

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            
            document.getElementById('seals-details').innerHTML = this.responseText;
            console.log(this.responseText);

}
    }
}
function Replace()
{
    let name = document.getElementById('search_name').value;
    let xhttp= new XMLHttpRequest();

    //xhttp.open('GET', 'abc.php?name='+name, true);
    xhttp.open('POST', '../controller/service.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name='+name);

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            
            document.getElementById('repalce').innerHTML = this.responseText;
            console.log(this.responseText);

}
    }
}