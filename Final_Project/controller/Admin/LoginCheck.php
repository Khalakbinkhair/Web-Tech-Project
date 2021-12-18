<?php
	session_start();
	require_once('../../model/Admin/usersModel.php');

	if(isset($_POST['submit']))
    {
		$userid = $_POST['id'];
		$password = $_POST['password'];

		if($userid!= "")
		{
			if($password != "")
			{
				// $myfile = fopen('../../model/Admin/user.txt', 'r');

				// while (!feof($myfile)) 
				// {
				// 	$data = fgets($myfile);
				// 	$user = explode('|', $data);

				// 	if(trim($user[1]) == $id && trim($user[5]) == $password)
				// 	{
				// 		setcookie('flag', 'true', time()+3600, '/');

				// 		setcookie('loggedInId',$id,time()+3600,'/');
                //         setcookie('loggedInName',$user[0],time()+3600,'/');
                //         setcookie('loggedEmail',$user[2],time()+3600,'/');
                //         setcookie('loggedgender',$user[3],time()+3600,'/');
                //         setcookie('loggedDate',$user[4],time()+3600,'/');
				// 		setcookie('loggedadd',$user[6],time()+3600,'/');
                //         setcookie('loggedpic',$user[7],time()+3600,'/');
						

				    $status = validate($userid,$password);
					
					setcookie('loggedInName',$status['username'],time()+3600,'/');
					
					if($status['usertype']=='Admin')
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../../views/Admin/Home.php');
					}
					else if($status['usertype']=='Student')
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../../views/Student/Home.php');
					}
					else if($status['usertype']=='Parent')
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../../views/Parent/parentHome.php');
					}
					else if($status['usertype']=='Teacher')
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../../views/Teacher/teacherHome.php');
					}
					else
					{
						echo "invalid username/password";
					}


				

			}
			else
			{
				echo "<h1>Invalid password...</h1>";
			}
		}
		else
		{
			echo "<h1>Invalid id...</h1>";
		}
	}
?>