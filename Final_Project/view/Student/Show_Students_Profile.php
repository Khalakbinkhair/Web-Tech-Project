 <?php

  session_start();
 

  require('../../model/Student/usersModel.php');
   
   // $myfile = fopen('../../model/Student/user.txt', 'r');

   // while (!feof($myfile)) {
   //       $data = fgets($myfile);
   //     $user = explode('|', $data);
   //      if ($data != "") {
           
   //           echo ' 
    $userid  = $_SESSION['userid'];
    $username= $_SESSION['username'];
    $password= $_SESSION['password'];
    

    $id = getUserByUserId($username,$password);
    $user = getUserById($id);

     

?> 

               <html>
               <head>
              <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Registration Page</title>
              <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Students_Profile.css">

</head>
<body>
 <div id="d1">
        <img src="../../assets/Student/uni2.jpg" class="i1">
           
       </div>
<div id="d2" class="i2">
       
            <div id="d3">
                <img src="../../assets/Student/uni1.jpg" class="i3"></div>
                
                    <center>  <h1>   Welcome to Your Profile</br>---------------------------</h1></center>
                         </br>

<div id="d4" >
                          </br><img src= "../../assets/Student/<?php echo $user['file'] ?>"  class="i4">
                          </div>



<h1>
<center>
                               Name    : <?php echo $user['username'] ?></br>

                         </br> Email   : <?php echo $user['email'] ?></br>

                         </br> Gender  : <?php echo $user['gender'] ?></br>

                         </br> Date of Birth : <?php echo $user['date'] ?></br>
   
                        </br>  User ID :  <?php echo $user['userid'] ?></br>
                          
                         </br> Address   :  <?php echo $user['ad'] ?></h1>
                      </center>
              
    
 
      
                    
                  
                     
                <div id="d6" class="i6">
                <center> &#160 <a href="Home.php"><h1> &#160&#160 Back</h1></a></center>
                </div>
                </div>

             </body>
         </html>
  
