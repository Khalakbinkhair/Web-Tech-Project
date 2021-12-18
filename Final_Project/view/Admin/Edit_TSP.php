<!DOCTYPE html>
<html>
<head>
	<title>Edit Teacher Student Parents PAGE</title>
</head>
<body>

	<form method="post" action="../../conttroller/Admin/Edit_TSP.php">
		
		  <table border="1" align="center" width="450px" height="450px">

                <tr>
                    <td>
                       <center><b>EDIT parent/Student/Teacher</b></center> 
			
			        <table>
				       <tr>
					      <td>Username:</td>
				          <td><input type="text" name="username" value=""></td>
				        </tr>
                        <tr>
                            <td>Id:</td>
                            <td><input type="text" name="id" value=""></td>
                          </tr>
				        <tr>
					        <td>Email:</td>
					        <td><input type="email" name="email" value=""></td>
				        </tr>
                        <tr>
					        <td>Date of Birth:</td>
					        <td><input type="date" name="date" value="date"></td><hr/>
				        </tr>
                        <tr>
					        <td>Gender:</td>
					        <td>
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                                <input type="radio" name="gender" value="Other">Other
                            </td>
				        </tr>
                        </tr>
                        <tr>
                           <td>Address:</td>
                           <td><input type="text" name="add" value=""></td>
                       </tr>
                       <tr>
                        <tr>
					        <td>Password:</td>
					        <td><input type="password" name="password" value=""></td>
				        </tr>
                        <tr>
					        <td>Picture:</td>
					        <td><input type="file" name="file" value=""></td>
				        </tr>
                        <tr>
					      <td>Type:</td>
				          <td><input type="text" name="type" value=""></td>
				        </tr>
                        
				        <tr>
					        <td colspan="2"><hr/></td>
					        
				        </tr>
                        <tr>
					        <td colspan="2"><input type="submit" name="submit" value="ADD">
                                <a href="Home.php">BACK</a>
                            </td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>
</body>
</html>
