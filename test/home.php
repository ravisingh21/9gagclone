<?php
include('config.php');

if(!isset($_SESSION['userDetails'])){
  header('Location:index.php');
}
$id =  $_SESSION['userDetails']['id'];

$sql = mysql_query('select * from posts where id ='.$id);

?>
<br>
<h1>Wekcome <?php echo $_SESSION['userDetails']['name'];?> , id:<?php echo $id;?></h1>
<br><br>
<a href="logout.php">Logout</a>
<br><br>
<br><br>
Add Post
<form action="" method="post">
Title <input type="text" value="text" name="title" required>
Image Path <input type="text" value="" name="image_path" required>
<input type="submit" value="Save" name="submit">
</form>.

<table border="1" width="90%">
  <tr>
    <td>Created By</td>
    <td>Title</td>
    <td>Action</td>
  </tr>
  <?php while ($post = mysql_fetch_assoc($sql)) { ?>
  <tr>
    <td><?php echo $post['id']?></td>
    <td><?php echo $post['title']?></td>
    <td><a href="">Delete</a></td>
  </tr>
  <?php }?>
</table>
