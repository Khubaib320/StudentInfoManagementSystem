<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container form-container">
    <h2>Enter Details</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter Firstname" required>
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Lastname" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="save_btn">Save</button>
        <button type="view" class="btn btn-primary btn-block"><a href="view.php">View</a></button>
    </form>
</div>
<?php
 if(isset($_POST['save_btn']))
 {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $age=$_POST['age'];
    $query="INSERT INTO student ( firstname, lastname, age) VALUES ('$fname','$lname','$age')";
    $data=mysqli_query($con,$query);
    if($data){
        echo "<script>alert('Data inserted successfully');</script>";
    } else {
        echo "<script>alert('Failed to insert data');</script>";
    }
 }
?>

</body>
</html>
