<?php
	session_start();

	if(isset($_POST['submit']))
    {
          $sub=$_POST['submit'];
        if($_POST["addm"] != "")
        {
            if($_POST["adddate"] != "")
            {
                if($_POST["addnotice" ] != "")
                {
                    $myCalfile = fopen('../../model/calender.txt', 'a');
                    $cal = $_POST['addm']."|".$_POST['adddate']."|".$_POST["addnotice" ]."\r\n";

                           fwrite($myCalfile, $cal);
                           fclose($myCalfile);

                           

                              header('location: ../../views/academicCalAdd.php');
                }
                else
                {
                     echo"Invalid notice";
                }
            }
            else
            {
                echo"Invalid Date";
            }
        }
        else
            {
                echo"Invalid month";
            }
    }
            

?>
