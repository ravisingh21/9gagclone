<?php
  include('config.php');
  include('functions.php');

if(isset($_POST['save'])) {
  sign($_POST);
}

if(isset($_POST['signin'])) {
  login($_POST);
}
 ?>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Sign In</title>

     <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/custom.css" rel="stylesheet">

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>
 <body >
      <form method="post" action="" id="form">
        email:<input type="email" name="email" value="" required>
        password:<input type="password" name="password" value="" required><br>
        <input type="submit" value="signup" name="save" onclick="saySubmit()">
          <input type="submit" value="signin" name="signin"><a href="signin.php"></a>
      </form>

<script language="javascript" type="text/javascript">

  </body>
</html>