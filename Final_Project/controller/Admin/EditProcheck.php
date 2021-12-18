<?php
	session_start();

	if(isset($_POST['submit']))
    {
		
		if($_POST['idE'] != "" )
		{
			$myfile = fopen('../../model/Admin/user.txt', 'w');
                 $user = $_POST['usernameE']."|".$_POST['idE']."|".$_POST["emailE" ]."|".$_POST["genderE" ]."|".$_POST["dateE" ]."|".$_POST['passwordE' ]."|".$_POST['addE' ]."|".$_POST['fileE' ]."|".";"."\r\n";

                     fwrite($myfile, $user);
                     fclose($myfile);
					   


                     header('location: ../../views/Admin/Login.html');
				    

		}
	}
?>










