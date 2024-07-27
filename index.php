<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form in PHP MySQL with Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        <div class="card card-body shadow">

            <?php
                if(isset($_SESSION['message'])){
                    echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
                    unset($_SESSION['message']);
                }
            ?>

            <div class="row">
                <div class="col-md-12 text-center">

                    <h4>Login and Registration Form Placement Management System</h4>
                    <br/>

                    <?php if(isset($_SESSION['loggedInStatus'])) : ?>

                        <a href="dashboard.php" class="btn btn-secondary">Dashboard</a>
                        <a href="logout.php" class="btn btn-danger">Logout</a>

                    <?php else: ?>

                        <a href="login.php" class="btn btn-primary">Login</a>
                        <a href="register.php" class="btn btn-info">Register</a>

                    <?php endif; ?>

                </div>
            </div>
           
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>