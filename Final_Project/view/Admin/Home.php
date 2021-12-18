<?php 

    require_once('header.php')

?>

<html>
     <head>
          <title>Home</title>
     </head>

     <body>

        <table border="1", width="100%" >
                <tr style="background-color:sky;">
                    <td align="left"><img src="../../asset/Admin/logo.jfif" height ="100px" width="100px" ><h3> University Portal</h3></td>
                    
                    <td align="right" width="1500px">
                        <b>Welcome <?php echo $_COOKIE['loggedInName'] ?></b> |
                        <b><a href="Home.php">Home</a></b> |
                        <b><a href="showPro.php">Show Profile</a></b> |
                        <b><a href="reg.html">Registration</a></b> |
                        <b><a href="../../controller/Admin/logout.php">LogOut</a></b>
                    </td>

        
                </tr>
                <tr height ="500px" >
                  
                  <td width="200px" colspan="3" >
                      <table align="center" width="1000px" border="1 ">
                           <tr>
                             <ul>
                             <td ><h3><a href="Add_TSP.php" ><li> Add Student/Parent/Teacher</a></li> </h3></td>        
                             <td><h3><a href="CheckApplication.php"><li> Check Application</li></a></h3></td>
                                               
                                        
                           </tr>
                           <tr>
                            <td><h3><a href="showListTSP.php"><li> Show List of Student/Parent/Teacher</li></a></h3></td> 
                            <td><h3><a href="academicCalender.php"><li> Academic Calendar</li></a></h3></td>   
           

                          </tr>
                          <tr>
                            <td><h3><a href="TeacherSchedule.php"><li> Teacher Schedule</li></a></h3></td> 
                            <td><h3><a href="AdmissionInfo.php"><li>Add admission info</li></a></h3></td>      

                          </tr>
                          <tr>
                            <td><h3><a href="studentSchedule.php"><li>Student Schedule</li></a></h3></td>
                            <td><h3><a href="NoticeAdd.php"><li>Add Notice</li></a></h3></td>  
            

                          </tr>
                          <tr>
                            <td><h3><a href="StudentCGPA.php"><li>Control students CGPA</li></h3></td>  
                            <td></td> 
         

                          </tr>
                                         
                                   
                          </ul>

                      </table>
                  </td>
                 
                </tr>
                <tr>
                  
                  <td colspan="3" align="center">Copyright @ 20121</td>
                  
     
                </tr>

              

        </table>

     </body>




</html>

