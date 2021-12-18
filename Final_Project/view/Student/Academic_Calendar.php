<?php
   include_once('header.php');

     $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from acalender  ";
    $result=mysqli_query($con, $sql);


?>

<html>
<head>
              <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Registration Page</title>
              <link rel="stylesheet" type="text/css" href="../../CSS/Student/Academic_Calendar.css">

</head>
                    <div id="d1">
        <img src="../../assets/Student/uni2.jpg" class="i1">
           
       </div>
     
       <div id="d3">
                <img src="../../assets/Student/uni1.jpg" class="i3"></div>

       

                       <div id="d2" >
                                <h2><u>Regular Students and Masters’ Freshman Class :<u> September 12, 2021</u></h2>

                                <tr >
                                    <td colspan="3" align="center" >
                                            <table >
                                                <tr>
                                                    <td colspan="3"><b>2021</b></td>
                                                   
                                                </tr>
                                                
                                <?php
                             
                               
                    
                               while($user= mysqli_fetch_assoc($result))
                              {  ?>

                              <tr>                         
                                <td><?=$user['addm']?></td>
                                <td><?=$user['adddate']?></td>
                                <td><?=$user['addnotice']?></td>
                                
                            
                            </tr>
                         <?php
                           }

                        ?>

                                
                                           
                                                
                                     
                                           
                                             
                            </table>
                             <center><h2><a href="Home.php" >Back</a> </h2> </center>  
                                          </div>    
                                         
                                    
                            

                    
                    </body>
                    </html>
                    
