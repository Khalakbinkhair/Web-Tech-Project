<?php 

    require_once('header.php')

?>

<html>

      <head>
      <title>Edit Profile</title>
      </head>

      <body>
      <form method="post" action="../../controller/Admin/EditProcheck.php">
		
        <table border="1" align="center" width="680px" height="550px">

          <tr>
              <td><img src="../asset/logo.jfif" width="101px" height="101px"></td>
          </tr>

              <tr>
                  <td>
                      <legend><b>EDIT PROFILE</b></legend>
          
                  <table>
                     <tr>
                        <td><b>Username:</b></td>
                        <td><input type="text" name="usernameE" value=""></td>
                      </tr>
                      <tr>
                          <td><b>Id:</b></td>
                          <td><input type="text" name="idE" value=""></td>
                        </tr>
                      <tr>
                          <td><b>Email:</b></td>
                          <td><input type="email" name="emailE" value=""></td>
                      </tr>
                      <tr>
                          <td><b>Date of Birth:</b></td>
                          <td><input type="date" name="dateE" value="date"></td><hr/>
                          
                      </tr>
                      <tr>
                          <td><b>Gender:</b></td>
                          <td>
                              <input type="radio" name="genderE" value="Male"><b>Male</b>
                              <input type="radio" name="genderE" value="Female"><b>Female</b>
                              <input type="radio" name="genderE" value="Other"><b>Other</b>
                              
                          </td>
                      </tr>
                      </tr>
                      <tr>
                         <td><b>Address:</b></td>
                         <td><input type="text" name="addE" value=""></td>
                     </tr>
                     <tr>
                      <tr>
                          <td><b>Password:</b></td>
                          <td><input type="password" name="passwordE" value=""></td>
                      </tr>
                      <tr>
                          <td><b>Confirm Password:</b></td>
                          <td><input type="password" name="confirmpasswordE" value=""></td>
                      </tr>
                      <tr>
                          <td><b>Picture:</b></td>
                          <td><input type="file" name="fileE" value=""></td>
                      </tr>
                      
                      <tr>
                          <td colspan="2"><hr/></td>
                          
                      </tr>
                      <tr>
                          <td colspan="2"><input type="submit" name="submit" value="Edit">
                              <a href="showPro.php">BACK</a>
                          </td>
                          
                      </tr>
                   </table>
                  </td>
              </tr>
          </table>



      </body>
</html>