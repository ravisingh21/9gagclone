<?php
session_start();
if(isset($_POST['logout'])) {
session_destroy();
header('location:index.php');
  }

?>
<html>
<body>
  <form method="post" action="">
    <input type="submit" name="logout" value="logout">
   </form>
</body>
</html>
