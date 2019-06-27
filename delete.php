<?php
include 'db.php';
if(!isset($_SESSION['user'])){ 
    header("location:index.html");
}

if($_SERVER['REQUEST_METHOD'] == "GET")
{
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
    Print '<script>alert("Successfully Deleted.")</script>';
    header("location: home.php");
}
?>