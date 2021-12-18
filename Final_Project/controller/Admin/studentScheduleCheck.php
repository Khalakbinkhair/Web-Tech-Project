<?php
	session_start();

	if(isset($_POST['submit']))
    {
          
  
                        $mystudentSfile = fopen('../../model/Admin/addStudentSchedul.txt', 'a');
                        $addSS = $_POST['sid']."|".$_POST['s1']."|".$_POST["s2" ]."|".$_POST["s3" ]."|".$_POST["s4" ]."|".$_POST["s5" ]."\r\n";
    
                               fwrite($mystudentSfile, $addSS  );
                               fclose($mystudentSfile);
                               header('location: ../../views/studentSchedule.php');
    
   
 
    }
            

?>
