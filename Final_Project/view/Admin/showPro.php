<?php 

    require_once('header.php')

?>        
<html>
      <head>
           <title>Profile</title>
      </head>
      <body>
                  <table border="1" align ="center"  width="44%" height ="50%" >
                         <tr>
                            <td align="Left"  colspan="2" ><img src="../../asset/Admin/logo.jfif" height ="100px" width="100px">
                            <?php echo $_COOKIE['loggedInName'] ?> Welcome to Your Profile |||
                             <b><a href="EditPro.php">Edit Profile</a></b> |
                             <b><a href="Home.php">Back</a></b> 

                            
                         </tr>
                         
                        </tr>
                         <tr>  
                           <td width="50px" >  Name :  <?php echo $_COOKIE['loggedInName'] ?></td> 
                           <td rowspan="3" width="26%" >  <img src=<?php echo $_COOKIE['loggedpic'] ?> height ="100px" width="150px">  </td>  </tr>
                         </tr>
                
                         <tr> 
                            <td >Id : <?php echo $_COOKIE['loggedInId'] ?></td>
                         </tr>
                         <tr> 
                            <td >Email:  <?php echo $_COOKIE['loggedEmail'] ?></td> 
                         </tr>               
                         <tr>  
                            <td colspan="2">Gender:  <?php echo $_COOKIE['loggedgender'] ?></td> 
                        </tr>
                        <tr>  
                            <td colspan="2" >Date of bith: <?php echo $_COOKIE['loggedDate'] ?></td> 
                        </tr>
                        <tr>  
                            <td colspan="2" >Address:  <?php echo $_COOKIE['loggedadd'] ?></td> 
                        </tr>


                 </table>
      </body>
</html>

