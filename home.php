<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Home</title>
  </head>
  <?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	?>
  <body>
    <div class="container">
      <div class="user">
        <p>
          Hello
          <?php Print "$user"?>!
        </p>
      </div>
      <div class="home">
        <h1>Welcome to Home Page</h1>
        <form action="logout.php">
          <input class="btn" type="submit" value="Logout" />
        </form>
      </div>
    </div>
  </body>
</html>
