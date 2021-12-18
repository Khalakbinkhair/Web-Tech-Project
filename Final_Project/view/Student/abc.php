<?php 

	$search = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'project');
	$sql= "select * from bio where name like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
				   
				    <td></td>
					<td>Faculty Name</td>
					<td>Email</td>
					<td>Course</td>
					<td>Bio</td>
					
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
                        <td><img src=../../assets/Student/{$row['file']}></td>
						<td>{$row['name']}</td>
						<td>{$row['email']}</td>
						<td>{$row['course']}</td>
						<td>{$row['bio']}</td>

					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>