<?php 

    require_once('header.php')

?>


<html>
    <head></head>
    <body>

                   <form method="POST" action="../../controller/Admin/AdmissionInfoCheck.php">
                    <fieldset>
                        <center>
                      NOTICE:
                      <input type="text" name="addnotice" Value="">

                      DATE:
                     <input type="text" name="adddate" Value=""><br/><hr/>

                     <input type="submit" name="submit" Value="Add Admission Info">
                     <center><h4><a href="AdmissionInfo.php">BACK</a><h4></center>
                      </center>

                    
                    </fieldset>

                    </form>
    </body>
</html>