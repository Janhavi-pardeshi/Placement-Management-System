<?php
   

  include 'dbcon.php';
   
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from placements where id = $id";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "Deleted Successfully!";
        }
        else
        {
            die(mysqli_error($conn));
        }
    }
    header('Location:placement.php');
    exit;
?>