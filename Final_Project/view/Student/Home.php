<?php 
   include('header.php');

?>

  <html>
       <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Student/Home.css">

</head>
     
       <body>
         <div id="d1">
        <img src="../../assets/Student/uni2.jpg" class="i1">
           
       </div>
<div id="d2" class="i2">
               <div id="d3">
                 <img src="../../assets/Student/uni1.jpg" class="i3">
                   
               </div>


               <center> <h2>   Welcome to..<?php echo $_COOKIE['loggedInName'] ?> </br>------------------------ </h2></center>
                  
                   
              <h2>   <a href="Show_CGPA.php"><p align="right">Show CGPA|</a>
                    <a href="Show Notification .php"> Show Notification</a> | <a href="../../controller/Student/logout.php"> logout</a></h2>
                    
                    
                   
              <div id="d4" class="i4">
                
               <h1>    <a href="Academic_Calendar.php">Academic Calendar</a></br>
               </br>   <a href="Show_Teachers_biography.html">Show Teachers Biography  </a></br>
                  </br>   <a href="Library_Info.php"><b>Library Info</a>

                   </div>

                       <div id="d5" class="i5">

              <h1>    <a href="Class_Schedule .php">Class Schedule </a></br>
               </br><a href="Send_Message_to_Faculty.html">Send Message to Faculty</a></br>
             </br> <a href="Application_to_Admin.html">Application to Admin  </a></br>
             </h1>

                 
            
                     </div>
                   <div id="d6" class="i6">


                       <h1> <a href="Show_Students_Profile.php">Show  Profile </a></br>
                     </br>  <a href="Update_Students_Profile.php">Update Students Profile</a></br>
                    </br>    <a href="Files_Section.php">Files Section</a>
                    </h1>
                    </div>
                    <div id="d7" class="i7">

                    <h1> <a href="Filecheck1.html">Upload a File</a></br>
                     
                     </br> <a href="Show_Courses_results.html">Show Courses and results </a>

                       </h1>
                          </div>
                 
                        <div id="d8" class="i8">
                               <h2> <i>  Copyright @2021     </i>    </div>
          </div>
        </body>
   
          </html>
                 
       