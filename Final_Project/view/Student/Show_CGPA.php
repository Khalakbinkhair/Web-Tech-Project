<?php 
   require('header.php');
   require('../../model/Student/usersModel.php');
   
     // $myfile = fopen('../../model/Student/user.txt', 'r');

     // while (!feof($myfile)) {
     //     $data = fgets($myfile);
     //       $user = explode('|', $data);
     //      if ($data != "") {
     //      echo'

    $userid  = $_SESSION['userid'];
    $username= $_SESSION['username'];
    $password= $_SESSION['password'];
    
 $id = getUserByUserId($username,$password);
    $user = getUserById($id);

?>


                <!DOCTYPE html>
                <html>   
                <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Files_Section.css">
                </head>          
                <body>
               
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                 
                      <table width="60%" height="80%"   border="1"  class="i2">
                      <tr>
                        <td colspan="3"align="center"><b><h1>Semester Grade Report</h1></b></td>

                      </tr>
                      <tr>
                        <td><h3>Student ID</h3></td>
                        <td><h3>:</h3></td>
                        <td><h3> <?php echo $user['userid'] ?> </h3></td>
                      </tr>
                          <tr>
                        <td><h3>Student Name</h3></td>
                        <td><h3>:</h3></td>
                        <td> <h3><?php echo $user['username'] ?> </h3></td>
                      </tr>
                          <tr>
                        <td><h3>Credits Completed </h3></td>
                        <td><h3>:</h3></td>
                        <td> <h3>118 </h3></td>
                      </tr>
                          <tr>
                        <td><h3>Courses Completed</h3></td>
                        <td><h3>:</h3></td>
                        <td><h3> 45</h3></td>
                      </tr>
                      <tr>
                        <td><h3>CGPA </h3></td>
                        <td><h3>:</h3></td>
                        <td><h3> 3.60</h3></td>
                      </tr>
                       
                       
                     </table>
                     
                     </div>

          
         </body>
         </html>
         
        


