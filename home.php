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
		header("location:index.html"); // redirects if user is not logged in
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
        <div class="user-list">
          <table>
            <tr>
              <th>Username</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            <?php 
             $conn = mysqli_connect("localhost","admin","admin") or die(mysqli_error());
             mysqli_select_db($conn, "id10057542_basics") or die("Cannot connect to database");
              $query = mysqli_query($conn, "SELECT * FROM users WHERE username <> 'admin' AND username <> '$user'");
              while($row = mysqli_fetch_assoc($query)) {
                Print '<tr>';
                  Print '<td>'.$row['username'].'</td>';
                  Print '<td><a href="edit.php?id='.$row['id'].'">edit</a></td>';
                  Print '<td><a href="#" onclick="removeUser('.$row['id'].')">delete</a></td>';
                Print '</tr>';
              }
            ?>
          </table>
          <script>
            function removeUser(id)
            {
            var r=confirm("Are you sure you want to delete this record?");
            if (r==true)
              {
                window.location.assign("delete.php?id=" + id);
              }
            }
          </script>
        </div>
      </div>
    </div>
  </body>
</html>
