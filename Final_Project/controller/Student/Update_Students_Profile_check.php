<?php
     session_start();

      require_once('../../model/Student/usersModel.php');

    if(isset($_POST['submit'])){

            if($_POST['id1'] != "" )
        {
        

            $username=$_REQUEST['username1'];
            $userid=$_REQUEST['id1'];
            $email=$_REQUEST["email1" ];
            $date=$_REQUEST['date1'];
            $gender=$_REQUEST['gender1'];
            $ad=$_REQUEST['add1'];
            $password=$_REQUEST['password1' ];
            $file=$_REQUEST['file1'];
            $usertype=$_REQUEST['usertype'];
            $id=$_REQUEST['id'];
        
                 $user= ['id'=>$id , 'username'=>$username  ,'userid'=>$userid,'email'=>$email ,'date'=>$date, 'gender'=>$gender,'ad'=>$ad ,'password'=>$password,
                               'file'=>$file,'usertype'=>$usertype ];
        
        
                               $status=editUser($user);
        
                               if($status)
                               {
                                header('location: ../../view/Student/Loginform.php');
                               }
                               else
                               {
                                   echo "Error";
                               }            
                       


                  
                    

        }
    }
?>

