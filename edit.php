
<?php


 $conn = mysqli_connect("localhost","root","","user");
 
 if(!$conn){
     die("Connection Failed". mysqli_connect_error());
 }
 

  $id="";
  $fname="";
  $lname="";
  $company="";
  $package="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("placement.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from placements where id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("Location:placement.php");
      exit;
    }
    $fname=$row["fname"];
    $lname=$row["lname"];
    $company=$row["company"];
    $package=$row["package"];

  }
  else{
    $id = $_POST["id"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $company=$_POST["company"];
    $package=$_POST["package"];

   
    $sql = "update placements set fname='$fname', lname='$lname', company='$company', package='$package' where id='$id'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="placement.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> FIRST NAME: </label>
 <input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control"> <br>
 <label> LAST NAME: </label>
 <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control"> <br>

 <label> COMPANY: </label>
 <input type="text" name="company" value="<?php echo $company; ?>" class="form-control"> <br>


 <label> PACKAGE </label>
 <input type="text" name="package" value="<?php echo $package; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="placement.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
