<?php
// Fetching Values From URL
include('config.php');
include ('function.php');

if(isset($_POST['save'])){
  save($_POST);
  echo "string";
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="function.js"></script>
    <![endif]-->
  </head>
    <body>
      <form action="" method="post" id="data" id="prj">
        <input type="hidden" name="id" value="" required>
        <input type="text" name="name" value="" required>
        <input type="submit" name="save" value="Save">
      </form>

      <table>
        <tr>
          <td colspan=3>Name</td>
         </tr>
        <tr>
          <td></td>
          <td><input type="button" value="Edit" onclick="ask()"/></td>
          <td><input type="button" value="Delete" onclick=""/></td>
         </tr>


      </table>





      </body>
 </html>
