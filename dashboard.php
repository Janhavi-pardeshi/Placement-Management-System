<?php
include('authentication.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        #two
        {
            color:red;
        }
    </style>
 
</head>
<body>

    <!-- <div class="container">
        <div class="mt-4 card card-body shadow">
            <h4>Welcome to Dashboard</h4> -->
            <?php
                if(isset($_SESSION['message'])){
                    echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
                    unset($_SESSION['message']);
                }
            ?>
            <!-- <div>
                <a href="index.php" class="btn btn-primary">Home Page</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div> -->

    <header>
        <div class="navbar">
           
            <div class="logo">
                <img src="MET logo.webp" height="58px"/>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="placement.php">Placement Records</a></li>
                <li><a href="fillinfo.php">Fill Info</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
    </header>

    <div class="About-Us">
       
    </div>
    
    <footer>
        <marquee id="two">Welcome to MET's Bhujabal Knowledge City Institute Of Engineering!</marquee>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
