<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login Page</title>
  </head>
  <body>
    <div class="container">
      <form class="form" id="form" action="login.php" method="post">
        <h1>Login</h1>
        <?php include('errors.php'); ?>
        <div class="input-control">
          <label for="username"> Username </label>
          <input class="label1" id="username" name="username" type="text" />
        </div>
        <div class="input-control">
          <label class="label2" for="input-control"> Password </label>
          <input id="password" name="password" type="password" />
        </div>
        <button class="button" type="submit" name="login_user"> Login </button>
        <br /><br />
        <span class="txt1"> Don’t have an account? </span>
        <a class="txt2" href="../sign up/signup.php"> Sign Up </a>
      </form>
    </div>
  </body>
</html>
