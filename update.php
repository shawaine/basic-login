<?php 
        include 'db.php';
        $id = $_SESSION['id'];
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