<?php 

    require_once('header.php')

?>
<html>
    <head></head>
    <body>

                   <form method="POST" action="../../controller/Admin/TeacherSchedulCheck.php">
                   <fieldset>
                        
                       CLASS START TIME:
                       <input type="text" name="stime" Value="">
                       END TIME:
                       <input type="text" name="etime" Value="">
                       TEACHER ID:
                       <input type="text" name="id" Value="">
                       Subject:
                       <input type="text" name="subject" Value="">
                       
                       
  
                       <center><input type="submit" name="submit1" Value="Add_Teacher schedule"></center>
                       <center><h4><a href="TeacherSchedule.php">BACK</a><h4></center>
                       
                       
  
                      
                      </fieldset>

                    </form>
    </body>
</html>