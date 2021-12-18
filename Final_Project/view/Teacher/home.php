<?php
session_start();
include('header.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>

<body>
	<center>
		<br><br><br><br>


		<table width="70%" border="2">

			<tr>
				<td height="100px" width="100px">
					<img src="<?= $_SESSION['pic'] ?>" width="100px" height="100px" />
				</td>
				<td style="text-align:center; color:MediumSeaGreen;">

					<h1> Welcome to <?php echo ($_SESSION['type']); ?> Portal</h1>
					<h2><?php echo ($_SESSION['type']); ?> Name " <?php echo ($_SESSION['u_name']); ?> "</h2>
				</td>

			</tr>
			<tr>

				<td colspan=" 2" align="right" style="color:MediumSeaGreen;">
					<a href="home.php">Home</a> |
					<a href="profile.php"> Show Profile Details</a> |
					<a href=" ../controller/logout.php"> logout</a>
				</td>
			</tr>
			<tr height="200px">
				<td></td>
				<td>
					<ol><b>

							<li><a href="create.php"> Refer Student</a></li><br>
							<li><a href="studentlist.php"> Student List</a></li><br>
							<li><a href="notice.php"> Provide Notice</a></li><br>
							<li><a href="noticelist.php"> Notice List</a></li>
						</b>

					</ol>
				</td>

			</tr>
			<tr height="50px">
				<td colspan="3" align="center"><b>Copyright by Anika @2021</b> <br>
					<b>Gmail :</b><a href="https://www.gmail.com"> rubabzamananika2@gmail.com
				</td>
			</tr>
		</table>
	</center>
</body>

</html>