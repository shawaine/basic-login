<?php
session_start(); 
if(!isset($_SESSION['user'])){ 
    header("location:index.html");
}

if($_SERVER['REQUEST_METHOD'] == "GET")
{
    $conn = mysqli_connect("localhost","admin","admin") or die(mysqli_error());
mysqli_select_db($conn, "id10057542_basics") or die("Cannot connect to database");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
    Print '<script>alert("Successfully Deleted.")</script>';
    header("location: home.php");
}
?>