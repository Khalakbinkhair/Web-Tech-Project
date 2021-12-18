<?php 

    require_once('header.php')

?>



<html>
    <head></head>
    <body>
            <form method="POST" >
                    <fieldset>
                        <center>
                        <h2><u>ADMISSION</u><h2>
                        <h4><a href="Home.php">Back</a>|||<a href="AdmissionInfoAdd.php">Add AdmissionInfo </a><h4>
                     
                <table border='1'> 
                    <tr>   
                        <td colspan="2">Admission Schedule for SPRING 2021 - 2022 (Slot-1)</td>

                    </tr> 
                    <tr>   
                        <td>Online Admission Form open:</td>
                        <td>October 14, 2021</td>
                    </tr> 
                    <tr>   
                        <td>Deadline for Online Admission Form Submission :</td>
                        <td>November 04, 2021</td>
                    </tr> 
                    <tr>   
                        <td>Online Admission Viva Schedule:​</td>
                        <td>November 06 - 09, 2021<br/>* Candidates will be contacted from the respective department 
                                and specific online viva schedule will be set for each candidate. 
                                  If not contacted within these dates, please query with the 
                                    Admission Information Department Office.</td>
                    </tr> 
                    <tr>   
                        <td>Admission Result :</td>
                        <td>November 12 - 13, 2021<br/>homepage noticeBoard</td>
                    </tr> 
                    <tr>   
                        <td>Online Admission of Selected Candidates (Slot - 1):</td>
                        <td>November 14 - 18, 2021</td>
                    </tr>
                    <?php
                                $myAdmissionfile= fopen('../../model/Admin/AdmissionInfo.txt', 'r');
                                if($myAdmissionfile=='')
                                {
                                               echo' <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>';                               
                                      
                                }
                                else
                                {
                                   
                                while (!feof($myAdmissionfile)) {
                                    $data = fgets($myAdmissionfile);
                                    if ($data != "") {
                                        $ad = explode('|', $data);
                                            echo '
                                                <tr>
                                                    <td>' . trim($ad[0]) . '</td>
                                                    <td>' . trim($ad[1]) . '</td>
                                                   
                                                </tr>';
                                        
                                    }



                                
                                      }
                                }
                                ?>


                       </center>

                </table>

                    </fieldset>

        </form>
    </body>
</htmlupload/>