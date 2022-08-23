<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <form class="form" id="form" action="" method="post">
        <h1>Sign Up</h1>
        <?php include('errors.php'); ?>
        <div class="input-control">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" />
        </div>
        <div class="input-control">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" />
          <div class="error"></div>
        </div>

        <div class="input-control">
          <label for="password">Password</label>
          <input id="password" name="password_1" type="password" />
        </div>

        <div class="input-control">
          <label for="password2">Password again</label>
          <input id="password2" name="password_2" type="password" />
        </div>
        <button class="button" type="submit" name="reg_user">Sign Up</button>
      </form>
    </div>
  </body>
</html>
