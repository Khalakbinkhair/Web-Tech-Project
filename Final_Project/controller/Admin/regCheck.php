<?php
 require_once('../../model/Admin/usersModel.php');

	session_start();

	if(isset($_POST['submit']))
    {
    $username=$_POST['username'];
    $userid=$_POST['id'];
    $email=$_POST["email" ];
    $date=$_POST['date'];
    $gender=$_POST['gender'];
    $ad=$_POST['add'];
    $password=$_POST['password' ];
    $file=$_POST['file'];
    $usertype=$_POST['usertype'];
    
		if($_POST['username'] != "" && str_word_count($_POST['username'])>=2)
        {
			if($_POST['id'] != "" && ($_POST['id']>=0 && $_POST['id']<=9 || $_POST['id']== '-'))
            {
                if($_POST["email" ] != "")
                {
				    if($_POST["date" ] != "")
                    {
                         if(isset($_POST['gender']))
                        {
                            if($_POST['add']!= "" && strlen($_POST['add']>2))
                            {
                                if($_POST['password']!= "")
                                {
                                   
                                     if($_POST['file'] != "")
                                    {
                                        if(isset($_POST['usertype']))
                                        {
                               
                                        //    $myfile = fopen('../model/user.txt', 'a');
                                        //    $user = $_POST['username']."|".$_POST['id']."|".$_POST["email" ]."|".$_POST["gender" ]."|".$_POST["date" ]."|".$_POST['password' ]."|".$_POST['add' ]."|".$_POST['file' ]."|".$_POST['usertype' ]."|".";"."\r\n";

                                        //        fwrite($myfile, $user);
                                        //        fclose($myfile);

                                        $user =[
                                            'username'=>$username,
                                            'userid'=>$userid,
                                            'email'=>$email,
                                            'date'=>$date,
                                            'gender'=>$gender,
                                            'ad'=>$ad,
                                            'password'=>$password,
                                            'file'=>$file,
                                            'usertype'=>$usertype
                                                

                                        ];

                                        $status=addUser($user);

                                            if($status)
                                           {
                                            header('location: ../../views/Admin/Login.html');
                                           }
                                           else
                                           {
                                            echo "Try Again";
                                           }



                                        }
                                        else
                                        {
                                            echo "<h1>Invalid picture!!</h1>";
                                        }
                                    }
                                    else
                                    {
                                        echo "<h1>Invalid picture!!</h1>";
                                    }
                               }
                               else
                               {
                                echo "<h1>Invalid Password!!!</h1>"; 
                               }
                           }
                          else
                            {
                              echo "<h1>Invalid Address...</h1>";
                            }
                        }
                         else
                        {
                             echo "<h1>Invalid Gender...</h1>";
                        }
                    }
                    else
                    {
					   echo "<h1>Invalid Date of Birth...</h1>";
				    }

					
				}
                else
                {
					echo "<h1>Invalid  Email!!</h1>";
				}	
			}
            else
            {
				echo "<h1>Invalid Id!!</h1>";
			}
		}
        else
        {
			echo " <h1>Invalid Username!!</h1>";
		}
	}
?>








