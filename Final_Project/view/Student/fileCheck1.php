<?php 
    require_once('header.php');

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

  if(isset($_REQUEST['submit']))
  {
    if (!empty($_POST['usertype']) && !empty($_POST['name'])) {
       
       $value =$_POST['usertype']  ;
       $type  =$_POST['name'];


     $sql ="insert into upload(course,file) values('$value','$type')";


     $run =mysqli_query($con,$sql);

    }

    if($run){
      echo '       
		      <html>
		       <head>
              <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Registration Page</title>
              <link rel="stylesheet" type="text/css" href="../../CSS/Student/Class_Schedule.css">

</head>
      <body>
        <div id="d1">
        <img src="../../assets/Student/uni2.jpg" class="i1">
           
       </div>


                         <div id="d2" >

             <center> <div class="i1">
              <h1>...Uploaded..... </h1>
           
              <a href="Home.php">Go to Homepage</center>
             </div>
            
               </body>
               </html>
		       ';

	
  }
 

  }

?>