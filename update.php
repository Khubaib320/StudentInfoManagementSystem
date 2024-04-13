<?php 
include 'connection.php'; 
$id = $_GET['id'];
$select = "SELECT * FROM student WHERE id='$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Update Student Information</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" value="<?php echo $row['firstname']; ?>" class="form-control" name="firstname" id="firstname" placeholder="Enter Firstname" required>
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" value="<?php echo $row['lastname']; ?>" class="form-control" name="lastname" id="lastname" placeholder="Enter Lastname" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" value="<?php echo $row['age']; ?>" class="form-control" name="age" id="age" placeholder="Enter Age" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="update_btn">Update</button>
        <!-- Styled "View" button -->
        <button type="button" class="btn btn-secondary btn-block view-btn"><a href="view.php" style="color: #fff; text-decoration: none;">Back</a></button>
    </form>
</div>

</body>
</html>

<?php
if(isset($_POST['update_btn']))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
    $update = "UPDATE student SET firstname='$fname', lastname='$lname', age='$age' WHERE id='$id'";
    $data = mysqli_query($con, $update);
    if($data){
        echo "<script>alert('Data Updated successfully');
        window.open('http://localhost/Demo/view.php','_self');
        </script>";
    } else {
        echo "<script>alert('Failed to Update data');</script>";
    }
}
?>
