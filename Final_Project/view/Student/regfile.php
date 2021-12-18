<?php
   include('../../controller/Student/regfilecheck.php');

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Student/regfile.css">

</head>
 <body>
    
       <div id="d1">
        <img src="../../assets/Student/regfile1.jpg" class="i1">
           
       </div>
<div id="d2" class="i2">


            <form name="myform"  method="post"  onsubmit="return validation()"  >
           
               <div id="d3">
                 <img src="../../assets/Student/uni1.jpg" class="i3">
                   
               </div>
              
            
         
                
                 <center> <b> <h1><i><u>Registration Page</u></h1>
                
            
                
  Name:<input type="text"  name="username" id="username" value="" placeholder="Enter username"><center>-----------------------------------------------------</center></br>

  User ID:<input type="text"  name="id"  id="id" value="" placeholder="Enter userID" ><center>-----------------------------------------------------</center></br>

  Email:<input type="email"  name="email" id="email" value="" placeholder="Enter Email"><center>-----------------------------------------------------</center></br>

  Date Of Birth:<input type="date"  id="date" name="date" value="" placeholder="Enter Date of birth"><center>-----------------------------------------------------</center></br>
      
 
       Gender:
        <input type="radio"  name="gender" id="Male" value="Male">Male
        <input type="radio"  name="gender" id="Female" value="Female">Female
        <input type="radio"  name="gender" id="Other" value="Other">Other<center>-----------------------------------------------------</center></br>


        Address:<input type="text" name="add" id="add" value="" placeholder="Enter Address"><center><b>-----------------------------------------------------</b></center></br>


     Password:<input type="password"  name="password" id="password"  value="" placeholder="Enter password"></br></i><center><b>------------------------------------------------</b></center>



Profile picture:<input type="file" name="file" id="file" value=""><center><b>-----------------------------------------------------</center></br></b>
  User Type:
                                <input type="radio" name="usertype" id="Admin " value="Admin"><b>Admin</b>
                                <input type="radio" name="usertype" id="Teacher " value="Teacher"><b>Teacher</b>
                                <input type="radio" name="usertype" id="Student " value="Student"><b>Student</b>
                                <input type="radio" name="usertype" id="Parent " value="Parent"><b>Parent</b><br/>



       
</br><input type="submit" name="submit"value="submit" >|<a href="Loginform.php">Login Here</a></center>

         <script type="text/javascript" src="script.js"></script>
             
                           
    </form>




</body>
</html>

        
     