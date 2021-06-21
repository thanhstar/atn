<?php  
session_start();
include "../db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) 
{

	function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);
	$password = md5($password);
	$name = test_input($_POST['name']);
  
    $sql = "INSERT INTO users (role,username,password,name) VALUES ('$role','$username','$password','$name')";
    $result = mysqli_query($conn, $sql);
        if ($result) 
        {
        	echo "successfull";
        	header("Location: ../index.php");

        }
        else 
        {
        	header("Location: ../register.php?");
        	echo "fail";
        }
	
}
else 
{
	header("Location: ../register.php");
}
?>
