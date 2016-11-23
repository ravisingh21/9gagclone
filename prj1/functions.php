<?php

function sign($post){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * FROM userdata WHere email='$email'";
  $res=mysql_query($sql);
  $row=mysql_fetch_array($res);
  if ($row) {
    echo "already registered!";
  }
  else{
  $sql="insert into userdata (email,password) VALUES('$email','$password')";
  $result=mysql_query($sql);
  if ($result) {
     echo "<a href='signin.php'>signin</a>";
}
}
}

function login($post){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * FROM userdata WHere email='$email'";
  $result=mysql_query($sql);
  $count=mysql_num_rows($result);

    if ($count== 0) {
      echo "email id not registered!";

  }
    else {
    $sql="SELECT * FROM userdata WHere email='$email' and password='$password'";
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);
    header('location:home.php');

          if ($count==1) {
            session_start();
            $_SESSION['email']=$email;

          }
          else {"try again!";
        }
  }
}


?>
