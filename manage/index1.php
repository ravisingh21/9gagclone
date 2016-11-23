<?php
include('config.php');
include('function.php');

$button="save";
$data=getData();
$id=isset($_GET['edit'])?$_GET['edit'] : '';

if (isset($_POST['save'])) {
  if ($id!='') {
    updateData($_POST);
  }
  else {
    save($_POST);
}
}
if (isset($_GET['edit'])) {
  $button="update";
  $editname=editData($data);
}

if(isset($_GET['delete'])){
  del($_GET);
}


 ?>

 <form action="" method="post" id="data">
   <input type="text" name="id" value="<?php if(isset($id)){ echo $id;}?>">
   <input type="text" name="name" value="<?php if(isset($editname)){ echo $editname['name'];}?>">
   <input type="submit" name="save" value="<?php echo $button; ?>">
 </form>

 <table>
   <?php foreach ($data as $list) {?>
   <tr>
     <td><?php echo $list['name'];  ?></td>
     <td><a href="?edit=<?php echo $list['id']  ?>">Edit</a></td>
     <td><a href="?delete=<?php echo $list['id'] ?>">Delete</a></td>
   </tr>
 </tr>
<?php } ?>
 </table>
