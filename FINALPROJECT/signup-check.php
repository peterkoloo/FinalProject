<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {
        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
	$pass = mysqli_real_escape_string($conn,$_POST['password']);

	$re_pass = mysqli_real_escape_string($conn,$_POST['re_password']);
	$name = mysqli_real_escape_string($conn,$_POST['name']);
        if (empty($uname)) {
            header("Location: signup.php?error=User Name is required&$user_data");
            exit();
        }else if(empty($pass)){
            header("Location: signup.php?error=Password is required&$user_data");
            exit();
        }
        else if(empty($re_pass)){
            header("Location: signup.php?error=Re Password is required&$user_data");
            exit();
        }
        else if(empty($name)){
            header("Location: signup.php?error=Name is required&$user_data");
            exit();
        }
        else if($pass !== $re_pass){
            header("Location: signup.php?error=The confirmation password  does not match&$user_data");
            exit();
        } else{
    $pass = md5($pass);

    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=The username is taken try another&$user_data");
        exit();
    }else {
       $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
       $result2 = mysqli_query($conn, $sql2);
       if ($result2) {
            header("Location: signup.php?success=Your account has been created successfully");
         exit();
       }else {
               header("Location: signup.php?error=unknown error occurred&$user_data");
            exit();
       }
    }
}
    }
else{
	header("Location: signup.php");
	exit();
}