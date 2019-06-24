<?php
session_start(); 
if(!isset($_SESSION['user'])){ 
    header("location:index.php");
}

if($_SERVER['REQUEST_METHOD'] == "GET")
{
    $conn = mysqli_connect("localhost","root","") or die(mysqli_error());
    mysqli_select_db($conn, "basics") or die("Cannot connect to database");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
    header("location: home.php");
}
?>