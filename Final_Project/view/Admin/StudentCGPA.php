<?php 

    require_once('header.php')

?>
<html>
      <head>
          <title>Student CGPA</title>
     </head>
    <body>
    <form method="POST"  >
                            <center><u><h2>Student CGPA<h2></u></center>
                            <center><h4><a href="Home.php">Back</a><h4></center>
                <table border="1" width="100%">
                    
                    <tr>
                        <th>Student ID</th>
                        <th>NAME</th>
                        <th>CGPA</th>
                        <th>current CGPA</th>
                        
                    </tr>
                    <tr>
                        <td>11-1234-1</td>
                        <td>JACK</td>
                        <td><input type="text" name="cgpa1" value="3.70">
                        
                            <input type="submit" name="submit" value="Show CGPA">
                        </td>
                        <td>

                            
<?php
        
           
       
        if(isset($_REQUEST['submit']))
        {
            $cg = $_REQUEST["cgpa1"];
            $re=str_replace("3.70",$cg,"3.70");
                $_SESSION['cgpa11'] = $re;
                
                
        }
        
        echo $_SESSION['cgpa11'];
?>
                        
                        </td>
                        
                    </tr>
                    <tr>
                        <td>11-9049-1</td>
                        <td>MIMI</td>
                        <td><input type="text" name="cgpa2" value="3.80">
                        
                        <input type="submit" name="submit1" value="Show CGPA">
                        </td>
                        <td>
                        <?php
                            
                               
                           
                            if(isset($_REQUEST['submit1']))
                            {
                                $cg1 = $_REQUEST["cgpa2"];
            $re1=str_replace("3.80",$cg1,"3.80");
                $_SESSION['cgpa22'] = $re1;
                
                
        }
        
        echo $_SESSION['cgpa22'];

                            ?>
                        
                        </td>
                        
                    </tr>
                    <tr>
                        <td>14-94332-1</td>
                        <td>Jhon</td>
                        <td><input type="text" name="cgpa3" value="3.84">
                            
                               
                           <input type="submit" name="submit2" value="Show CGPA">
                           </td>
                           <td>
                             <?php
                           if(isset($_REQUEST['submit2']))
                           {
                               $cg1 = $_REQUEST["cgpa3"];
                      $re1=str_replace("3.84",$cg1,"3.84");
                          $_SESSION['cgpa33'] = $re1;
               
                         
                       }
       
                       echo $_SESSION['cgpa33'];

                            ?>
                        
                        </td>
                        
                    </tr>
                    <tr>
                        <td>15-94432-1</td>
                        <td>COCO</td>
                        <td><input type="text" name="cgpa4" value="3.69">
                        <input type="submit" name="submit3" value="Show CGPA">
                        </td>
                        <td>

                        <?php
                           if(isset($_REQUEST['submit3']))
                           {
                               $cg1 = $_REQUEST["cgpa4"];
                      $re1=str_replace("3.69",$cg1,"3.69");
                          $_SESSION['cgpa44'] = $re1;
               
                          echo $_SESSION['cgpa44'];
                       }
       
                       echo $_SESSION['cgpa44'];

                            ?>
                        
                        </td>
                        
                    </tr>
                    <tr>
                        <td>12-93934-1</td>
                        <td>MOMo</td>
                        <td><input type="text" name="cgpa5" value="3.75">
                        <input type="submit" name="submit4" value="Show CGPA">
                        </td>
                        <td>

                        <?php
                           if(isset($_REQUEST['submit4']))
                           {
                               $cg1 = $_REQUEST["cgpa5"];
                      $re1=str_replace("3.75",$cg1,"3.75");
                          $_SESSION['cgpa55'] = $re1;
                          
           
                       }
       
                       echo $_SESSION['cgpa55'];


                            ?>

                        
                        </td>
                        
                    </tr>


                    
                </table>

</form>
   </body>

</html>