<?php
    session_start();
    	require_once('../../model/Student/usersModel.php');
 
	if(isset($_REQUEST['submit'])){

		$userid = $_REQUEST['text'];
		$password = $_REQUEST['password'];


		if($userid != ""){
			if($password != ""){


				$status = validate($userid,$password);
			 
			// if($_COOKIE['username'] == $username && $_COOKIE['password'] == $password){
			// 	//	$_SESSION['flag'] = "true";
			// 	   setcookie('flag', 'true', time()+3600,'/');
                     
         setcookie('loggedInName',$status['username'],time()+3600,'/');
         
                    $_SESSION["usertype"] = $status['usertype'];
					$_SESSION["username"] = $status['username'];
					$_SESSION["password"] = $status['password'];
					$_SESSION["userid"] = $status['userid'];
					 
         
					
					if($status['usertype']=='Admin')
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../../view/Admin/Home.php');
					}
					else if($status['usertype']=='Student')
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../../view/Student/Home.php');
					}
					else if($status['usertype']=='Parent')
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../../view/Parent/home.php');
					}
					else if($status['usertype']=='Teacher')
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../../view/Teacher/Home.php');
					}
					else
					{
						echo "invalid username/password";
					}


					//header('location: ../../view/Student/Home.php');
				}else{
					echo "invalid userid";
				}
			}else{
				echo "Invalid password...";
			}
		 }
			// else{
		// 	echo "Null Submission ";
		// }
	
?>