<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Basic PHP</title>
  </head>
  <body>
    <header><h1>Basic PHP</h1></header>
    <div class="container">
      <div class="box">
        <form action="register.php" method="POST">
          <h1>REGISTER</h1>
          <h4>Username</h4>
          <input
            class="input"
            type="text"
            name="username"
            id="username"
            placeholder="username here"
            maxlength="50"
            required
          />
          <h4>Password</h4>
          <input
            class="input"
            type="password"
            name="password"
            id="password"
            placeholder="password here"
            maxlength="50"
            required
          />
          <input class="btn" type="submit" value="Register" />
        </form>
      </div>
      <div class="box">
        <form action="checklogin.php" method="POST">
          <h1>LOGIN</h1>
          <h4>Username</h4>
          <input
            class="input"
            type="text"
            name="username"
            id="username"
            placeholder="username here"
            maxlength="50"
            required
          />
          <h4>Password</h4>
          <input
            class="input"
            type="password"
            name="password"
            id="password"
            placeholder="password here"
            maxlength="50"
            required
          />
          <input class="btn" type="submit" value="Login" />
        </form>
      </div>
    </div>
  </body>
</html>
