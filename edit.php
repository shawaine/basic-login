<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Edit</title>
</head>
<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:index.php');
}

$user = $_SESSION['user'];

$id = $_GET['id'];
$_SESSION['id'] = $id;

$conn = mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($conn, "basics") or die("Cannot connect to database");
$query = mysqli_query($conn, "SELECT * FROM users WHERE id ='$id'");
$numrow = mysqli_num_rows($query);
if($numrow <= 0)
{     
    header('location:home.php');
}
while($row = mysqli_fetch_assoc($query)) {
    $username = $row['username'];
    $password = $row['password'];
}
              
?>
<body>
    <div class="container">
      <div class="user">
        <p>
          Hello
          <?php Print "$user"?>!
        </p>
    </div>
    <div class="edit">
        <h1>Welcome to Edit Page</h1>
        <form action="home.php">
            <input class="btn" type="submit" value="Go to Home" />
        </form>
        <form action="logout.php">
            <input class="btn" type="submit" value="Logout" />
        </form>
        </div>
      <div class="box">
        <form action="update.php" method="POST">
            <h1>Selected User: <?php Print "$username"?></h1>
          <h4>New Username</h4>
          <input
            class="input"
            type="text"
            name="username"
            id="username"
            placeholder="username here"
            value=  <?php Print "$username"?>
            maxlength="50"
            required
          />
          <h4>New Password</h4>
          <input
            class="input"
            type="password"
            name="password"
            id="password"
            placeholder="password here"
            maxlength="50"
            required
          />
          <input class="btn" type="submit" value="Update" />
        </form>
      </div>
    </div>
    
</body>
</html>
