<?php 

    require_once('header.php')

?>


<html>
    <head></head>
    <body>

                   <form method="POST" action="../../controller/Admin/academicCalenderControl.php">
                    <fieldset>
                        <center>
                      month:
                     <input type="text" name="addm" Value="">
                      date:
                     <input type="text" name="adddate" Value="">
                     notice:
                     <input type="text" name="addnotice" Value=""><br/><hr/>

                     <input type="submit" name="submit" Value="Add_calender">
                     <center><h4><a href="academicCalender.php">BACK</a><h4></center>
                      </center>

                    
                    </fieldset>

                    </form>
    </body>
</html>