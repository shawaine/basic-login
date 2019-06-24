<?php 
    session_start();
     $id = $_SESSION['id'];
    // $conn = mysqli_connect("localhost","root","") or die(mysqli_error());
    // mysqli_select_db($conn, "basics") or die("Cannot connect to database");
    // $username =  mysqli_real_escape_string($conn, $_POST['username']);
    // $password = password_hash( mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
    // mysqli_query($conn,"UPDATE users SET username = '$username', password ='$password' WHERE id = '$id'"); 
    // Print '<script>alert("Successfully Updated.");</script>'; 
    // Print '<script>window.location.assign("home.php");</script>';

        $conn = mysqli_connect("localhost","root","") or die(mysqli_error());
        mysqli_select_db($conn, "basics") or die("Cannot connect to database");
        $username =  mysqli_real_escape_string($conn, $_POST['username']);
        $password = password_hash( mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
        $isDuplicate = true;
        $query = mysqli_query($conn,"SELECT * FROM users WHERE  id <> '$id'"); 
        while($row = mysqli_fetch_array($query)) 
        {
            if($username == $row['username']) 
            {
                $isDuplicate = false; 
                Print '<script>alert("Username is already taken!");</script>'; 
                Print '<script>window.location.assign("edit.php?id='.$id.'");</script>';
            }
        }

        if($isDuplicate) 
        {
            mysqli_query($conn,"UPDATE users SET username = '$username', password ='$password' WHERE id = '$id'"); 
            Print '<script>alert("Successfully Updated.");</script>'; 
            Print '<script>window.location.assign("home.php");</script>';
        }
?>