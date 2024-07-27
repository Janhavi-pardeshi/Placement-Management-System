<?php
require_once('pdatabase.php');
require_once('functions.php');
// $query="select * from placements ";
$result=display_data();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Records</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" > -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
 

</head>
<body>
        <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Placement Records</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="p-3 mb-2 bg-dark text-white">
                                <td>ID</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Comapny</td>
                                <td>Package</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        <tr>
                        <tbody>
                    <?php 
                       
                        $sql_query = "SELECT * FROM placements";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $id= $row['id'];
                                $fname = $row['fname'];
                                $lname = $row['lname'];
                                $company = $row['company'];
                                $package = $row['package'];

                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $lname; ?></td>
                        <td><?php echo $company; ?></td>
                        <td><?php echo $package; ?></td>
                        <td><a href="edit.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
                          
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
</body>
</html>