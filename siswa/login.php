<?php
 
session_start();
 
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="log.css">

  </head>
  <body>
  
  
 
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
 
     
 
      if ($username == 'user' && $password == 'user'):
        $_SESSION['username'] = $username;
        
        ?>
        Login sukses...
        <script>
        window.location = 'user.php';
        </script>
      <?php else: ?>
        <big> Maaf Username dan Password yang anda masukkan salah, Silahkan </big><a href="login.php"><b>Coba Lagi</b></a>
      <?php endif;
    }
    else {
    ?>
      <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
	  <h1>LOGIN SISWA</h1>
        <input type="text" name="username" value="" placeholder="User ID" style="width: 280px;">
    </div>
    <div class="input-group">
     <input type="password" name="password" value="" placeholder="Password" style="width: 280px;">
    </div>
    <div class="input"><input type="submit" name="commit" value="Login" class="btn"> </div>
	 <div class="container" style="background-color:#000000">
    </div>
    <?php } ?>
  </body>
</html>