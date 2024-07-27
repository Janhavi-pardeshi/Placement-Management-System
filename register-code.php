<?php
session_start();

require_once "dbcon.php";

if(isset($_POST['registerBtn']))
{
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $errors = [];

    if($name == '' OR $phone == '' OR $email == '' OR $password == ''){
        array_push($errors, "All fields are required");
    }

    if($email != '' && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Enter valid email address");
    }

    if($email != ''){
        $userCheck = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
        if($userCheck){
            if(mysqli_num_rows($userCheck) > 0){
                array_push($errors, "Email already registered");
            }
        }else{
            array_push($errors, "Something Went Wrong!");
        }
    }

    if(count($errors) > 0){
        $_SESSION['errors'] = $errors;
        header('Location: register.php');
        exit();
    }

    $query = "INSERT INTO users (name,phone,email,password) VALUES ('$name','$phone','$email','$password')";
    $userResult = mysqli_query($conn, $query);

    if($userResult){
        $_SESSION['message'] = "Registered Successfully";
        header('Location: index.php');
        exit();
    }else{
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: register.php');
        exit();
    }

}

?>