<?php 

    require_once('header.php')

?>

<html>
    <head>
    <title>ADD student Schedule</title>
    </head>
    <body>

                   <form method="POST" action="../../controller/Admin/studentScheduleCheck.php">
                   <fieldset>
                        
                        Student ID:
                       <input type="text" name="sid" Value=""><br/><hr/>
                       Subject_1(8-11):
                       <input type="text" name="s1" Value=""><br/>
                       Subject_2(11-2):
                       <input type="text" name="s2" Value=""><br/>
                       Subject_3(11-12.30):
                       <input type="text" name="s3" Value=""><br/>
                       Subject_4(12.30-2.30):
                       <input type="text" name="s4" Value=""><br/>
                       Subject_5(4-5):
                       <input type="text" name="s5" Value=""><br/><hr/>
                       
  
                       <center><input type="submit" name="submit" Value="Add_Student schedule"></center>
                       <center><h4><a href="studentSchedule.php">BACK</a><h4></center>
                       
                       
  
                      
                      </fieldset>

                    </form>
    </body>
</html>