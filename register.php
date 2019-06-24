<?php
session_start();
$conn = mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($conn, "basics") or die("Cannot connect to database");
$username =  mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash( mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
$isDuplicate = true;
$query = mysqli_query($conn,"SELECT * FROM users"); 
while($row = mysqli_fetch_array($query)) 
{
    $user = $row['username']; 
    if($username == $user) 
    {
        $isDuplicate = false; 
        Print '<script>alert("Username is already taken!");</script>'; 
        Print '<script>window.location.assign("index.php");</script>'; 
    }
}

if($isDuplicate) 
{
    $_SESSION['user'] = $username;
    mysqli_query($conn,"INSERT INTO users (username, password) VALUES ('$username','$password')"); 
    Print '<script>window.location.assign("greeting.php");</script>';
}
?>