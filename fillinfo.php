<?php

    $servername="localhost";
    $username="root";
    $password="";
    $database="user";
    $con=mysqli_connect($servername,$username,$password,$database);
    if(!$con)
    {
        die("error detected" .mysqli_error($con));
    }

    if(isset($_POST['submit']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $cname=$_POST['cname'];
        $package=$_POST['package'];

        $sql="INSERT INTO placements (fname,lname,company,package) VALUES ('$fname','$lname','$cname','$package')";
        if(mysqli_query($con,$sql))
        {
            echo "<script> alert('new record inserted')</script>";
        }
        else
        {
            echo "error:" .mysqli_error($con);
        }
        mysqli_close($con);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="mt-4 card card-body shadow">
       
        <form method="POST" action="fillinfo.php" >
      

                <div class="mb-3 mt-5">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="cname" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Package</label>
                    <input type="text" name="package" class="form-control" />
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                </div>
                


            
        </form>

</div>
</div>
</div>
    </div>
   
</body>
</html>