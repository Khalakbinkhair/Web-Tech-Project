<?php
    


    require_once('../../model/Student/usersModel.php');
     session_start();

	if(isset($_POST['submit'])){

        if($_POST['username'] !="" && str_word_count($_POST['username'])>=2){
                if($_POST['email'] !=""){
                    if($_POST['gender'] !=""){
                        if($_POST['date'] !=""){
                                if($_POST['id'] !="" && ($_POST['id']>=0 && $_POST['id']<=9 || $_POST['id']== '-')){
                                    if($_POST['file'] !=""){
                                            if($_POST['password'] != ""){
                                                    if($_POST['add'] !=""){
                                                        if($_POST['usertype'] !=""){


    $username=$_REQUEST['username'];
    $userid=$_REQUEST['id'];
    $email=$_REQUEST["email" ];
    $date=$_REQUEST['date'];
    $gender=$_REQUEST['gender'];
    $ad=$_REQUEST['add'];
    $password=$_REQUEST['password' ];
    $file=$_REQUEST['file'];
    $usertype=$_REQUEST['usertype'];
    if($_POST['username'] != "" )
        {
			if($_POST['id'] != "" )
            {
  
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

                                       
                                            if($status  )
                                           {
                                                header('location: ../../view/Student/Loginform.php');
                                           }
                                           else
                                           {
                                            echo "Try Again";
                                           }
                                            }
                                       
                                    }
					}
                }
            }
        }
    }
 }
 }
 }
 }

				
	// 			}else{
	// 				echo "Invalid Address...";
	// 			}
	// 			}else{
	// 		         echo "Null Password...";
	// 	         }	
			   
	//       	    }else{
	// 		    echo "Choose a picture...";
	//        	   }
	//       	  }else{
	// 		  echo "User ID invalid...";
	//           	}
	//            	}else{
	// 		   echo "Invalid date...";
	// 	         }
 //                 	}else{
	//            		echo "Invalid gender...";
	//              	}
	//              	}else{
	//            		echo "Null email...";
	//         	}
	//               }else{
	//                		echo "Null Username...";
	//                	}

	// }
   }


  
?>