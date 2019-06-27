<?php
include 'db.php';
$username =  mysqli_real_escape_string($conn, $_POST['username']);
$password =  mysqli_real_escape_string($conn, $_POST['password']);
$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");
$rownum = mysqli_num_rows($query);
if($rownum > 0){
    while($row = mysqli_fetch_assoc($query)) {
        if(password_verify($password,  $row['password']) == 1){
            $_SESSION['user'] = $row['username'];
            header("location:home.php");
        }
        else{
            Print '<script>alert("Incorrect Username or Password")</script>';
            Print '<script>window.location.assign("index.html");</script>';
        }
    }
}
else{
    Print '<script>alert("Incorrect Username or Password")</script>';
    Print '<script>window.location.assign("index.html");</script>';
}
?>