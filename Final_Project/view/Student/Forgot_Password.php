<?php
    session_start();
    $email  = $_SESSION['email'];
   
    require('../../model/Student/usersModel.php');
    echo $email;
 
	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
	  // $myfile = fopen('../model/user.txt', 'r');

   //   while (!feof($myfile)) {
   //       $data = fgets($myfile);
   //       $user = explode('|', $data);
         if ($email != "") {
           
               $useremail= $user['email']   ;
			 	
					
			}
			
		   }
		
			if($email != ""){
				if(  $useremail == $email){
			 
		// $myfile = fopen('../model/user.txt', 'r');

  //    while (!feof($myfile)) {
  //        $data = fgets($myfile);
  //          $user = explode('|', $data);
         // if ($data != "") {
           

			 	   echo'

               <html>
                 <body bgcolor="aliceblue">
                  <table align ="center"width="20%" height="20%"   border="1" >
                       
                         
         
 
                     
            ';
					
			}

		   }	
             
   
   
  

?>