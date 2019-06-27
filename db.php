<?php
if(session_status() == PHP_SESSION_NONE){
session_start();
}
$conn = mysqli_connect("localhost","id10057542_admin","admin") or die(mysqli_error());
mysqli_select_db($conn, "id10057542_basics") or die("Cannot connect to database");
?>