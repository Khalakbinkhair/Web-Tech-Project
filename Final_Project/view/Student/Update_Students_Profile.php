<?php 

    require('header.php');
    require('../../model/Student/usersModel.php');

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
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Update_Students_Profile.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
            <form  method="post" action="../../controller/Student/Update_Students_profile_check.php">
                
            <table  border="1"  class="i2">
                <tr>
                 <td colspan="3" align="Center"><b> <h1>Update Your Profile..</b></h1></td>
                
             </tr>

<tr><td>                 
  Name   :<input type="text" name="username1" value="<?=$user['username']?>"> </td></tr>
<tr>
   
   <input type="hidden" name="id1" value="<?=$user['userid']?>"></tr>

<tr>
    <td>Email:<input type="email" name="email1" value="<?=$user['email']?>"></td>
</tr>
<tr>
    <td>
      Date of Birth:<input type="date" name="date1" value="<?=$user['date']?>"></td>
  </tr>

 <tr><td >
 Gender  :
        <input type="radio" name="gender1" value="Male">Male
        <input type="radio" name="gender1" value="Female">Female
        <input type="radio" name="gender1" value="Other">Other</td></tr>

       <tr>
    <td >Address:<input type="text" name="add1" value="<?=$user['ad']?>"></td></tr>

<tr>
    <td>Password:<input type="password" name="password1"value="<?=$user['password']?>"></td></tr>


  <tr>  <td>Profile picture:<input type="file" name="file1" value=""></td></tr>
 
                         
                          <input type="hidden" name="usertype" value="<?=$user['usertype']?>"> 
                    
    


    </div>
     </td>
                          

   </table>    
<div id="d3"> <h3><input type="submit" name="submit"value="Update"/>|<a href="Home.php">Back</a>
</h3></div>
<input type="hidden"name="id" value="<?=$user['id']?>">


     </form>
      
           
        </body>
   
</html>
