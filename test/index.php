<?php
include('config.php');
$error = isset($_GET['error'])? $_GET['error'] : '';

if(isset($_POST['submit'])){
  //DB check - need to work here
  $sql = mysql_query("select * from users where email = '".$_POST['email']."' and password = '".$_POST['password']."'");
  if($userData = mysql_fetch_assoc($sql)){
    $_SESSION['userDetails']  = $userData;
    header('Location:home.php');
    exit;
  }else{
  echo  mysql_error();
  exit;
  }

  header('Location:index.php?error=invalid login');
}
?>
<p style="color:red;"><?php echo $error; ?></p>
<form action="" method="post">
<input type="email" value="email" name="email" required>
<input type="password" value="" name="password" required>
<input type="submit" value="Login" name="submit">
</form>
