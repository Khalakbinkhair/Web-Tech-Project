<?php
    require_once('db.php');


function addUser($user)
    {
		$con = getConnection();
		$sql= "insert into users values('','{$user['username']}','{$user['userid']}','{$user['email']}','{$user['date']}','{$user['gender']}','{$user['ad']}','{$user['password']}', '{$user['file']}', '{$user['usertype']}')";
		
		if(mysqli_query($con, $sql))
        {
			return true;
		}
        else
        {
			return false;
		}
	}
	function validate($userid, $password)
	{
		$con = getConnection();
		$sql= "select * from users where userid='{$userid}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if(mysqli_num_rows($result) > 0 )
		{		
			while($user)
			{
				return $user;
			}
			
		}
		else
		{
			return false;
		}
	}
	

	function getAllUsers()
    {
        $con=getConnection();

            $sql ="select * from users ";
            $result=mysqli_query($con, $sql);

            return $result;
                
    }


function getUserById($id)
    {
        $con=getConnection();

        $sql="select * from users where id={$id}";
        $result=mysqli_query($con, $sql);
        $user= mysqli_fetch_assoc($result);

        return $user;
    }


    function editUser($user)
    {
        $con=getConnection(); 

       
        $sql="update users set username='{$user['username']}',  userid='{$user['userid']}',email='{$user['email']}',date='{$user['date']}',  gender='{$user['gender']}',
		                               ad='{$user['ad']}',password='{$user['password']}',file='{$user['file']}',usertype='{$user['usertype']}' where id='{$user['id']}' ";

                if(mysqli_query($con,$sql))
                {
                    return true;
                }
                else
                {
                    echo false;
                }
    }

    
    function deleteUser($id)
    {
        $con=getConnection();

        $sql="delete from users where id={$id}";
        $result=mysqli_query($con, $sql);

        return $result;
    }
	function getUserByUserId($userName, $password)
	{
		$con=getConnection();
		$sql = "select * from users  where username ='{$userName}' AND password = '{$password}'";
		$result=mysqli_query($con, $sql);
		$user= mysqli_fetch_assoc($result);

         
		return $user['id'];
	
	}



?>

