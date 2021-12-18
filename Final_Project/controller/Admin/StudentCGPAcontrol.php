
<?php
        session_start();
           
       
        if(isset($_REQUEST['submit']))
        {
            $cg = $_REQUEST["cgpa1"];
            
                $re=str_replace("70",$cg,"3.70");
                $_SESSION['cgpa1'] = $re;
                echo $_SESSION['cgpa1'];
            
        }
?>

