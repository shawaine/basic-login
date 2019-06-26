<?php
session_start();
$conn = mysqli_connect("localhost","id10057542_admin","admin") or die(mysqli_error());
mysqli_select_db($conn, "id10057542_basics") or die("Cannot connect to database");
$username =  mysqli_real_escape_string($conn, $_POST['username']);
$password =  mysqli_real_escape_string($conn, $_POST['password']);
$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");
$rownum = mysqli_num_rows($query);
if($rownum > 0){
    while($row = mysqli_fetch_assoc($query)) {
        if(password_verify($password,  $row['password']) == 1){
            $_SESSION['user'] =$username;
            header("location:home.php");
        }
        else{
            Print '<script>alert("Incorrect Password")</script>';
            Print '<script>window.location.assign("index.html");</script>';
        }
    }
}
else{
    Print '<script>alert("Incorrect Username")</script>';
    Print '<script>window.location.assign("index.html");</script>';
}
?>