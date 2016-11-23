<?php
include('config.php');
include('functions.php');

if(isset($_POST['signin'])) {
  login($_POST);
}
 ?>

<html>
  <head>
   </head>
    <body>
      <form method="post" action="">
        email:<input type="email" name="email" value="" required>
        password:<input type="password" name="password" value="" required><br>
        <input type="submit" value="signin" name="signin">
      </form>
     </body>
</html>
