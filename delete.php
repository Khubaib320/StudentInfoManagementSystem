<?php 
include 'connection.php'; 
$id = $_GET['id'];
$query = "DELETE FROM student WHERE id='$id'";
$data = mysqli_query($con, $query);
if($data)
{
    echo "<script>alert('Data Delete successfully');
          window.location='view.php';</script>";
} else {
    echo "<script>alert('Failed to delete data');</script>";
}
?>
