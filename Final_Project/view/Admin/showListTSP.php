<?php 

    require_once('header.php')

?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="../../controller/Admin/logout.php">logout </a> 
	</center>
	<br>
	<table border="1" align="center">
		<tr>
			<th>No</th>
			<th>NAME</th>
			<th>ID</th>
			<th>EMAIL</th>
            <th>Gender</th>
            <th>Date Of Birth</th>
            <th>Password</th>
            <th>Address</th>
            <th>User Type</th>
			<th>  </th>
			
		</tr>
		<?php
		     $myfileAdd = fopen('../model/Addstp.txt','r');
		    $count =0;
			
			while (!feof( $myfileAdd)) {
				$data = fgets($myfileAdd);
				if($data!="")
				{
					$useradd = explode('|', $data);
		
					echo '<tr>
						    <td>' . ++$count . '</td>
						    <td>' . $useradd[0] . '</td>
						    <td>' . $useradd[1] . '</td>
						    <td>' . $useradd[2] . '</td>
                            <td>' . $useradd[3] . '</td>
                            <td>' . $useradd[4] . '</td>
                            <td>' . $useradd[5] . '</td>
                            <td>' . $useradd[6] . '</td>
                            <td>' . $useradd[8] . '</td>
							<td><a href="Edit_TSP.php">EDIT</a>||
							<a href="Remove_TSP.php?id='.$count.'">REMOVE</a></td>
						    
							
						    </td>
					     </tr>';
				}
			}
			fclose($myfileAdd);
		?>
	</table>
</body>
</html>