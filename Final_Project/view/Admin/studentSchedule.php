<?php 

    require_once('header.php')

?>
<html>
    <head>
    <title>Student Schedule</title>
    </head>
    <body>
    <form method="POST" >
                            <center><h2>Student Schedule<h2></center>
                            <center><h4><a href="Home.php">Back</a>|||<a href="studentScheduleAdd.php">Add Student Schedule</a><h4></center>
                <table border="1" width="100%">
                    
                    <tr>
                        <td>Student ID</td>
                        <td>Subject_1(8-11)</td>
                        <td>Subject_2(11-2)</td>
                        <td>Subject_3(11-12.30)</td>
                        <td>Subject_4(12.30-2.30)</td>
                        <td>Subject_5(4-5)</td>
                    </tr>
                    <tr>
                        <td>11-1234-1</td>
                        <td>RM</td>
                        <td></td>
                        <td>Math</td>
                        <td>Web</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11-4567-1</td>
                        <td>English</td>
                        <td>Rm</td>
                        <td>COA</td>
                        <td>Web</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11-4567-1</td>
                        <td></td>
                        <td>Rm</td>
                        <td>Math</td>
                        <td>COA</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>14-8763-1</td>
                        <td>English</td>
                        <td></td>
                        <td></td>
                        <td>Web</td>
                        <td>rm</td>
                    </tr>

                    <tr>
                    <?php
                               $mystudentSfile= fopen('../../model/Admin/addStudentSchedul.txt', 'r');
                                if($mystudentSfile=='')
                                {
                                               echo' <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>';                               
                                      
                                }
                                else
                                {
                                   
                                while (!feof($mystudentSfile)) {
                                    $data = fgets($mystudentSfile);
                                    if ($data != "") {
                                        $addSS  = explode('|', $data);
                                            echo '
                                                <tr>
                                                    <td>' . trim($addSS [0]) . '</td>
                                                    <td>' . trim($addSS [1]) . '</td>
                                                    <td>' . trim($addSS [2]) . '</td>
                                                    <td>' . trim($addSS [3]) . '</td>
                                                    <td>' . trim($addSS [4]) . '</td>
                                                    <td>' . trim($addSS [5]) . '</td>
                                                </tr>';
                                        
                                       }

 
                                    }
                                }
                                ?>
                                

                                    </td>

                    </tr>
                    
                </table>

</form>
   </body>

</html>