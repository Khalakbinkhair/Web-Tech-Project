<?php 

    require_once('header.php')

?>

        <html>

            <head></head>
                    <body>
                    
                            <center><h2>Academic Calender<h2></center>
                            <center><h4><a href="Home.php">Back</a>|||<a href="academicCalAdd.php">Add Academic Calender Info</a><h4></center>
                            <table border="1" align="center"  width="850px" >
                                <tr>
                                    <td colspan="3" align="center"><h4>Regular Students and Masters’ Freshman Class :<u> September 12, 2021</u></h4></td>

                                </tr>
                                <tr >
                                    <td colspan="3" align="center" >
                                            <table >
                                                <tr>
                                                    <td colspan="3"><b>2021</b></td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td rowspan="6">Sep</td>
                                                    <td>9 (Thursday)</td>
                                                    <td>New Teachers’ orientation</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>12</td>
                                                    <td>First Day of Classes (Regular and Masters’ Freshman Classes)</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>General Meeting</td>
                                                </tr>
                                                <tr>

                                                    <td> 16 & 19</td>
                                                    <td>Adding/ Dropping</td>
                                                </tr>
                                                <tr>

                                                    <td>19</td>
                                                    <td>Submission of TSF and course description(Regular and Masters’ Freshman Classes)</td>
                                                </tr>
                                                <tr>

                                                    <td>26<hr/></td>
                                                    <td>Automatic conversion of UW, I, blank grades of Summer 2020-21 Semester to F<hr/></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="6"> Oct</td>
                                                    <td>3</td>
                                                    <td>Submission of TSF and course description(Undergraduate Freshman Courses)</td>
                                                </tr>
                                                <tr>

                                                    <td>7 (Thursday)</td>
                                                    <td>Makeup of Sunday Classes</td>
                                                </tr>

                                                <tr>

                                                    <td>9 (Saturday)</td>
                                                    <td>Makeup of Monday Classes</td>
                                                </tr>
                                                <tr>

                                                    <td>21</td>
                                                    <td>Submission of mid semester assessment plan to VC’s office</td>
                                                </tr>
                                                <tr>

                                                    <td>16 – 21</td>
                                                    <td>Mid Semester Laboratory Assessment</td>
                                                </tr>
                                                <tr>

                                                    <td>23 – 28<hr/></td>
                                                    <td>Mid Semester Assessment<hr/></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="5">Nov</td>
                                                    <td>4</td>
                                                    <td>Submission of mid semester grades</td>
                                                </tr>
                                                <tr>

                                                    <td>21 - 25</td>
                                                    <td>TPE</td>
                                                </tr>
                                                <tr>

                                                    <td>25</td>
                                                    <td>Mid semester Grades Locked</td>
                                                </tr>
                                                <tr>

                                                    <td>21 - 25</td>
                                                    <td>Pre-registration for Spring 2021-22</td>
                                                </tr>
                                                <tr>
                                                    <td>27 – Dec 9<hr/></td>
                                                    <td>Final Laboratory Assessment<hr/></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="5">Dec</td>
                                                    <td>4</td>
                                                    <td>Submission of mid semester grades</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Submission of original final assessment plan to VC’s office</td>
                                                </tr>
                                                <tr>
                                                    <td>4 - 18</td>
                                                    <td>Final Assessment</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>Submission of Final Grades</td>
                                                </tr>
                                                <tr>
                                                    <td>Dec 19 –<br/>Jan 15, 2022</td>
                                                    <td>Semester break<br/> Release of grades<br/> Final Registration for Spring 2021-22</td>
                                                </tr>
                                            </table> 
                                             
                                            
                                        
                                    </td>
                                          
                                </tr>
                                <?php
                                $myCalfile= fopen('../../model/Admin/calender.txt', 'r');
                                if($myCalfile=='')
                                {
                                               echo' <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>';                               
                                      
                                }
                                else
                                {
                                   
                                while (!feof($myCalfile)) {
                                    $data = fgets($myCalfile);
                                    if ($data != "") {
                                        $cal = explode('|', $data);
                                            echo '
                                                <tr>
                                                    <td>' . trim($cal[0]) . '</td>
                                                    <td>' . trim($cal[1]) . '</td>
                                                    <td>' . trim($cal[2]) . '</td>
                                                </tr>';
                                        
                                    }



                                
                                      }
                                }
                                ?>
                                

                                    </td>
                                </tr>
                        

                            </table>
        

             </body>

        </html>';



