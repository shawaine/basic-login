<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Greeting</title>
  </head>
  <body>
    <div class="container">
      <h1>Welcome User</h1>
      <h3>Click the button to go to Home Page</h3>
      <form action="home.php">
        <input class="btn" type="submit" value="Go to Home" />
      </form>
      <form action="logout.php">
        <input class="btn" type="submit" value="Logout" />
      </form>
    </div>
  </body>
</html>
