<?php 

    require_once('header.php')

?>
<html>
    <head>
    <title>Teacher Schedule</title>
    </head>
    <body>
    <form method="POST" >
                            <center><h2>Teacher Schedule<h2></center>
                            <center><h4><a href="Home.php">Back</a>|||<a href="TeacherSchedulAdd.php">Add Teacher Schedule</a><h4></center>
                <table border="1" width="100%">
                    
                    <tr>
                        <td>CLASS START TIME</td>
                        <td>CLASS END TIME</td>
                        <td>TEACHER ID</td>
                        <td>SUBJECT</td>
                    </tr>
                    <tr>
                        <td>8:00 </td>
                        <td>11:00</td>
                        <td>113-3313-1</td>
                        <td>C++</td>
                    </tr>
                    <tr>
                        <td>11:00 </td>
                        <td>2:00</td>
                        <td>113-3313-1</td>
                        <td>C##</td>
                    </tr>
                    <tr>
                        <td>11:00</td>
                        <td>12:30</td>
                        <td>112-2212-1</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>12:30</td>
                        <td>2:30</td>
                        <td>112-2212-1</td>
                        <td>RM </td>
                    </tr>
                    <tr>
                        <td>12:30</td>
                        <td>2:30</td>
                        <td>112-2212-1</td>
                        <td>WEB </td>
                    </tr>

                    <tr>
                    <?php
                                $myTSfile= fopen('../../model/addTeacherSchedul.txt', 'r');
                                if($myTSfile=='')
                                {
                                               echo' <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>';                               
                                      
                                }
                                else
                                {
                                   
                                while (!feof($myTSfile)) {
                                    $data = fgets($myTSfile);
                                    if ($data != "") {
                                        $addTS = explode('|', $data);
                                            echo '
                                                <tr>
                                                    <td>' . trim($addTS[0]) . '</td>
                                                    <td>' . trim($addTS[1]) . '</td>
                                                    <td>' . trim($addTS[2]) . '</td>
                                                    <td>' . trim($addTS[3]) . '</td>
                                                </tr>';
                                        
                                       }

 
                                    }
                                }
                                ?>
                                

                                    </td>

                    </tr>
                    
                </table>
                
                   

 
                <input type="submit" name="submit" value="Submit">
</form>
   </body>

</html>