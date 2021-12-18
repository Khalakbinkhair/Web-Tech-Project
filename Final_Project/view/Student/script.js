function validation(){
        
    let username = document.getElementById("username").value;
    let id = document.getElementById("id").value;
    let email = document.getElementById("email").value;
    let date = document.getElementById("date").value;
    let Male = document.getElementById("Male");
    let Female = document.getElementById("Female");
    let Other = document.getElementById("Other");
    let address = document.getElementById("add").value;
    let password = document.getElementById("password").value;
    let file= document.getElementById("file").value;
    let Admin = document.getElementById("Admin");
    let Teacher = document.getElementById("Teacher");
    let Student = document.getElementById("Student");
    let Parent = document.getElementById("Parent");

//username Validation 
    if (username == "") {
      
        alert('Name: Null value');
         return false;
    }
    else if(username.length<2 && (username>='A' && username<='Z' || username>='a' && username<='z'))
    {
        alert('Name: Contains at least two words');
    }
    else if(username >='0'  &&username<='9' || username=='~' || username=='!' || username=='@' || username =='#' || username=='$' || username=='%' || username=='^' || username=='&' ||username=='*' ||username=='()'|| username=='/' )
    {
        alert('Name: Can contain a-zor A-Zor dot(.) or dash(-)');
    }
    else if(username>='0' && username<='9')
   {
        alert('Name: Must be starts with letter');
   }

   //ID validation
     else  if (id == "" || id.length < 5 || id =="-" ) {
        alert('Id: Null Id Include with(-) ');
        return false;
    }

    



   //Email validation 

   else  if(email == ""){
        //document.getElementById("err-email").innerHTML="Please enter a valid email";
        alert('Email: Null email');
        return false;
    }
    
    //Date validation
    else  if(date == ''){
        alert('Date Of Birth : Enter Birth Date Please');
        return false;
    } 
    //Gender Validation 
    else  if(!Male.checked && !Female.checked && !Other.checked){
        alert('Gender : Select Any One ');
        return false;
    } 
    //Address Validation
     else  if(address == '')
     {
        alert('Adress : Can not be empty ');
        return false;
    } 
     //Password Validation
    else  if(password == '')
     {
        alert('password : Can not be empty ');
        return false;
    } 
    

      //File Validation
    else  if(file == '')
     {
        alert('File : Select Any One ');
        return false;
    } 
    //UserType Validation  
    else  if(!Admin.checked && !Teacher.checked && !Student.checked && !Parent.checked)
     {
        alert('usertype : Select Any One ');
        return false;
    }     
    

}