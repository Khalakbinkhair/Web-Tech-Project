<?php
	session_start();

	if(isset($_POST['submit1']))
    {
          
        if($_POST["stime"] != "")
        {
            if($_POST["etime"] != "")
            {
                if($_POST["id" ] != "")
                {
                    if($_POST["subject" ] != "")
                    {
                        $myTSfile = fopen('../../model/Admin/addTeacherSchedul.txt', 'a');
                        $addTS = $_POST['stime']."|".$_POST['etime']."|".$_POST["id" ]."|".$_POST["subject" ]."\r\n";
    
                               fwrite($myTSfile, $addTS );
                               fclose($myTSfile);
                               header('location: ../../views/Admin/TeacherSchedule.php');
    
   
                    }
                    else
                    {
                        echo "Invalid subjeect";
                    }
                }
                else
                {
                     echo "Invalid id";
                }
            }

            else
            {
                echo "Invalid endTIme";
            }
        }

        else
        {
             echo "Invalid StartTime";
        }

    }
            

?>
