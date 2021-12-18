function validation(){
        
    
    let id = document.getElementById("id").value;
    let password = document.getElementById("password").value;

    if (id == "" ) {
        //document.getElementById("err-id").innerHTML="Enter Your id";
        alert('Id: Null Id');
        return false;
    }
    if(password == '')
     {
        alert('password : Can not be empty ');
        return false;
    } 



}