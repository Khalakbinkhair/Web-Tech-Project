<?php 

   include_once('header.php');
  

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from notification";
    $result=mysqli_query($con, $sql);



?>
           
                <!DOCTYPE html>
                <html>
                 <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Files_Section.css">

               </head>             
                <body >
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                 
                      <table width="40%" height="100%"   border="1"  class="i2">
                      <tr>
                        <td colspan="3"><b><h1>Show Notification</h1></b></td>
                      </tr>
                    <?php
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
        
                        <tr>
                            <td>
                           <a href="../../assets/Student/<?= $user['file']?>"><?= $user['file']?></a></td>
                            
                         </tr>
         <?php
            }
        ?>

                 <tr>
                         
                 </table>
                   </div>
                     

  
               
             </body>
         </html>
