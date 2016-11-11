<?php
session_start();
  include('config.php');
  if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $sql="INSERT INTO manage(name) VALUES('$name')";
    $result=mysql_query($sql);
  }

  if(isset($_GET['edit'])){

        $_SESSION['updateData']=null;

    $id =$_GET['edit'];
    $sql ="SELECT * FROM manage WHERE id=$id";
    $editData=mysql_query($sql);

        while ($rows=mysql_fetch_array($editData)) {
            $data=$rows;
        }
  }

  if(isset($_POST['update'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $sql="UPDATE manage SET name='$name' WHERE id=$id";
    $updateData=mysql_query($sql);

        $_SESSION['updateData']="Successfully updated!";
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (02);

    header("location:index.php");

  }

  if (isset($_GET['delete'])) {
    $id=$_GET['delete'];
    $sql="DELETE FROM manage WHERE id=$id";
    $deleteData=mysql_query($sql);

    header("location:index.php");

  }

      $sql="SELECT * FROM manage";
      $result=mysql_query($sql);

      $now=time();

  if (isset($_SESSION['start']) && $now>$_SESSION['expire']) {
    session_destroy();
    # code...
  }

  if (isset($_SESSION['updateData'])) {
      echo $_SESSION['updateData'];
  }

 ?>
    <form action="" method="post">
      <input type="hidden" value="<?php if(isset($data)){ echo $data['id']; }  ?>" name="id">
      <input type="text" value="<?php if(isset($data)){ echo $data['name']; }  ?>" name="name" required>
      <input type="submit" value="<?php if(isset($data)){ echo 'Update'; } else{ echo 'Save';}  ?>"  name="<?php if(isset($data)){ echo 'update'; }else{ echo 'submit';}  ?>" >
    </form>
    <br><br>

    <table>
      <?php while ($rows=mysql_fetch_array($result)) {?>
      <tr>
        <td><?php echo $rows['name']; ?></td>
        <td><a href="?delete=<?php echo $rows['id']; ?>">Delete</a></td>
        <td><a href="?edit=<?php echo $rows['id']; ?>">Edit</a></td>
      </tr>
            <?php }?>
    </table>
<? php
  mysql_close()
 ?>
