<?php 

    require_once('header.php');

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from result where session ='2020-2021,Fall' ";
    $result=mysqli_query($con, $sql);

    
    if(isset($_REQUEST['submit']))
          
    {
        $Sem= $_REQUEST["Semester"];
        if($Sem == "2020-2021,Fall"){
        ?>



                <html>
                   <head>
      
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Courses_Results.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                 
                    <table align ="center" border="1" >
                        <tr>
                         <td  colspan="3" align="Center"><b><h1>2020-2021,Fall</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td  ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td  ><b><u>Marks</u></b></td>
                               </tr>
                                  <?php
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
        
                        <tr>
                            <td><?=$user['course']?></td>
                            <td><?=$user['grade']?></td>
                            <td><?=$user['marks']?></td>
                            
                         </tr>
         <?php
            }
        ?>


                          
                           </table>
                             </div>
                        
                      <div id="d3" >  <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3></div>

                        

                        
                       
                     

                   </body>

                   </html>
            
       <?php
        }
    }
        ?>


        <?php

         require_once('header.php');

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from result where session ='2020-2021,Spring' ";
    $result=mysqli_query($con, $sql);




          if($Sem == "2020-2021,Spring"){
            ?>

                <html>
                   <head>
      
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Courses_Results.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                 
                    <table align ="center" border="1" >
                        <tr>
                         <td  colspan="3" align="Center"><b><h1>2020-2021,Spring</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td  ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td  ><b><u>Marks</u></b></td>
                               </tr>
                    <?php
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
        
                        <tr>
                            <td><?=$user['course']?></td>
                            <td><?=$user['grade']?></td>
                            <td><?=$user['marks']?></td>
                            
                         </tr>
         <?php
            }
        ?>
                            
                           </table>
                             </div>
                        
                      <div id="d3" >  <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3></div>

                        

                        
                       
                     

                   </body>

                   </html>
    <?php
          
        }

      
    ?>



    <?php
    require_once('header.php');

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from result where session ='2020-2021,Summer' ";
    $result=mysqli_query($con, $sql);

          


           if($Sem == "2020-2021,Summer"){

           ?>

                <html>
                   <head>
      
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Courses_Results.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                 
                    <table align ="center" border="1" >
                        <tr>
                         <td  colspan="3" align="Center"><b><h1>2020-2021,Summer</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td  ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td  ><b><u>Marks</u></b></td>
                               </tr>
                    <?php
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
        
                        <tr>
                            <td><?=$user['course']?></td>
                            <td><?=$user['grade']?></td>
                            <td><?=$user['marks']?></td>
                            
                         </tr>
         <?php
            }
        ?>
                            
                           </table>
                             </div>
                        
                      <div id="d3" >  <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3></div>

                        

                        
                       
                     

                   </body>

                   </html>
              
            
            <?php
        }

        ?>
 
     <?php
     
         require_once('header.php');

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from result where session ='2021-2022,Fall' ";
    $result=mysqli_query($con, $sql);


         if($Sem == "2021-2022,Fall"){
           ?>

                 <html>
                  <head>
      
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Courses_Results.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                    <table align ="center" border="1" >
                        <tr>
                         <td  colspan="3" align="Center"  ><b><h1>2021-2022,Fall</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td ><b><u>Marks</u></b></td>
                               </tr>
                      <?php
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
        
                        <tr>
                            <td><?=$user['course']?></td>
                            <td><?=$user['grade']?></td>
                            <td><?=$user['marks']?></td>
                            
                         </tr>
         <?php
            }
        ?>
                          </table>
                            </div>
                        
                         <div id="d3" >   <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3></div>
                        

            

                   </body>

                   </html>
            
   <?php

        }
         
    
?>
