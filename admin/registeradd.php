<?php
session_start();
include('conn.php');


// thêm mới tài khoản 
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $pass = $_POST['password'];
    $pass = md5($pass);
    $roles = $_POST['roles'];


    $query = "INSERT INTO users (username,name,password,role) VALUES ('$username','$fullname','$pass','$roles')";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        $_SESSION['success'] = "User Profile Added";// save
        header('location:register.php');
    }
    else
    {
        $_SESSION['status'] = "User Profile not Added";
        header('location:register.php');
    }
}

// kêt thúc thêm mới tài khoản

// suar taif khaoanf

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $fullname = $_POST['edit_fullname'];
    $pass = $_POST['edit_password'];
    $pass = md5('$pass');
    $roles = $_POST['edit_roles'];


    $query = "UPDATE users set username = '$username', name = '$fullname', password = '$pass', role = '$roles' WHERE id = '$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $query_run = $_SESSION['success'] = "Your data is update";
        header("Location: register.php");
    }
    else
    {
        $query_run = $_SESSION['status'] = "Your data not update";
        header('Location: register.php');
    }
}


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE  FROM users WHERE id = '$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $query_run = $_SESSION['success'] = "Your data is delete";
        header("Location: register.php");
    }
    else
    {
        $query_run = $_SESSION['status'] = "Your data not delete";
        header('Location:register.php');
    }

}

?>