<?php include('server.php');
if( isset($_SESSION['success'] ) )
 header('location: index.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title> Login Form in HTML5 and CSS3</title>
  <link rel="stylesheet" a href="style.css">

</head>

<body>
  <div class="header">
    <h2>Login</h2>
  </div>
  <form method="post" action="login.php">
    <?php include('error.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
      Not yet a memeber? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>

</html>