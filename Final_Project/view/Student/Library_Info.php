<?php
  include_once('header.php');

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from library";
            $result=mysqli_query($con, $sql);


?>

                  <html>
                  <body >
                    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Student/Send_Message_to_Faculty.css">

     </head>
                     <div id="d1">
        <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                           
                            <table align="center"  width="50%" height="60" border="1" >
                                <tr>
                                    <td  colspan="4" >    <img src="../../assets/Student/Lib.jpg" height="10%" width="30%">
                                  <h2><u>Library Information</u></h2>
                                  </td>
                                 
                                </tr>
                                <tr>
                                    <td ><b> <h3>Book Name</h3></b></td>
                                    <td ><b> <h3> Auther Name</h3></b></td>
                                    <td ><b> <h3> Borrow Date </h3></b></td>
                                    <td ><b> <h3> Credit </h3></b></td>
                                    </tr>

                               <?php
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
        
                        <tr>
                            <td><?=$user['book']?></td>
                            

                            <td><?=$user['auther']?></td>

                            <td><?=$user['borrow']?></td>
                            <td ><?=$user['credit']?></td>
                            
                         </tr>


         <?php
            }
        ?>
                      
                                                        
                                             
                            </table>                                   
                                 
                                    <center>    <a href="Home.php"><b><h3>Back<b></h3></a>   </center>  

                        
                      

                  </div>
                  </body>
 </html>


