<?php
 include ('../../controller/Student/logincheck.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Student/Loginform.css">

</head>
 <body>
    
       <div id="d1">
        <img src="../../assets/Student/regfile1.jpg" class="i1">
           
       </div>
<div id="d2" >
  


            <form method="post" onsubmit="return validation()">

        <center>
            <div id="d3">
                <img src="../../assets/Student/uni1.jpg" class="i3">

     
           <h1> <b><i>SIGN IN</i></br><center>---------------------</center>
               
                
        
                

            User ID :  <input type="text" name="text" id="id"><br/>
     </br>  Password: <input type="Password" name="password" id="password"><br/></h1></center>
 

   <center><h2><input type="submit" name="submit"value="Login"></a></br></br>Do you have any account?<a href="regfile.php">Register Here</a> </h2></center> 
  </b>  
  
    
           </i></b></br>        

         </div>
         <script type="text/javascript" src="scriptLogin.js"></script>
        </body>



</html>