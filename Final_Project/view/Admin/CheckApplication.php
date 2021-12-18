<?php 

    require_once('header.php')

?>


<html>
    <head></head>
    <body>
            <form method="POST" >
                    <fieldset>
                        <center>
                        <h2><u>Application</u></h2>
                
                <table border='1'> 
                    <tr>   
                        <td>
                     Dear Sir/Mam,<br/>
                     I am Ben Brown, an incoming freshman, and I'm very much looking forward to attending University College this fall.My family has, unfortunately, 
                     experienced an extreme setback in our financial situation.
                     Just a day after receiving my award information, my father lost his job. After 30 years at The Widget Factory he was unexpectedly let go. He is
                     our family's main income provider. My mother remains employed, but she works part-time at a minimum wage retail job. Consequently, we are
                    suddenly unable to provide the additional funds I'll need for outstanding tuition, books, and expenses.So i need financial aid package.
                       </td>
                       <td>
                           <input type="submit" name="submit1_1" Value="Accept ">
                           <input type="submit" name="submit1_2" Value="Recect">
                       
                       
                        <?php
                        if(isset($_REQUEST["submit1_1"]))
                        {
                            echo "<h2>accepted</h2>";
                        }
                        else if(isset($_REQUEST["submit1_2"]))
                        {
                            echo "<h2>rejected</h2>";
                        }
                        

                        ?>
                        
                        
                       </td>
                    </tr> 
                    <tr>   
                        <td>
                         Dear Sir/Mam,<br/>
                         I am mina, I want to declare my major software engineer.
                         Id:12-444-2
                       </td>
                       <td>
                           <input type="submit" name="submit2_1" Value="Accept">
                           <input type="submit" name="submit2_2" Value="Recect">
                        <?php
                        if(isset($_REQUEST["submit2_1"]))
                        {
                            echo "<h2>accepted</h2>";
                        }
                        else if(isset($_REQUEST["submit2_2"]))
                        {
                            echo "</h2>rejected</h2>";
                        }
                        else
                        {

                        }

                        ?>
                        
                        
                       </td>
                    </tr> 


                      </center>

                </table>
                
                     <center><h4><a href="Home.php">BACK</a><h4></center>
                    </fieldset>

        </form>
    </body>
</htmlupload/>