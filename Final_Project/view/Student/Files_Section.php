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
                  <table width="50%" height="80%"   border="1" class="i2" >

                        <tr>
                         <td colspan="2" align="Center"  ><b><h3>Files</h3></b>
                         </td>
                
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

                      
                       
              
                         </div>
                       <div id="d3"><a href="Home.php"><h3>Back</h3></a></div>

              
                   </table>
                                  
    
                    
            
             </body>
         </html>
  