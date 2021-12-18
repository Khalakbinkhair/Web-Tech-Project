 <?php 
   $json = $_REQUEST['data'];
   $json = json_decode($json);

$value=$json->myname;
$type=$json->name;



$server = "localhost" ;
$username ="root";
$password = "";
$dbname ="project";



$con = mysqli_connect($server, $username, $password, $dbname);



$sql = "insert into products (value, type) VALUES ('$value','$type')";



$run =mysqli_query($con,$sql);



echo "Successfull !";
      
?>