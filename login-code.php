<?php 
session_start();

require_once 'dbcon.php';

if(isset($_POST['loginBtn']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $errors = [];

    if($email == '' OR $password == ''){
        array_push($errors, "All fields are mandetory");
    }

    if($email != '' && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
    }
    
    if(count($errors) > 0)
    {
        $_SESSION['errors'] = $errors;
        header('Location: login.php');
        exit();
    }

    $userQuery = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $userQuery);

    if($result){
        if(mysqli_num_rows($result) == 1){

            $_SESSION['loggedInStatus'] = true;
            $_SESSION['message'] = "Logged In Successfully!";
            
            header('Location: dashboard.php');
            exit();
            
        }else{

            array_push($errors, "Invalid Email or Password!");
            $_SESSION['errors'] = $errors;

            header('Location: login.php');
            exit();
        }
    }else{
        array_push($errors, "Something Went Wrong!");
        $_SESSION['errors'] = $errors;

        header('Location: login.php');
        exit();
    }

}
?>