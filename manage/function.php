<?php

function save($post){
  $name=$_POST['name'];
  $sql="INSERT INTO manage(name) VALUES('$name')";
  $result=mysql_query($sql);
  return $result;
}

function getData(){
  $sql="SELECT * FROM manage";
  $res=mysql_query($sql);

  if ($res) {
    while ($row=mysql_fetch_array($res)) {
      $arr[]=$row;
    }
      return $arr;
  }
}

function editData($data){
  $id=$_GET['edit'];
  $sql="SELECT * FROM manage WHERE id=$id";
  $result=mysql_query($sql);
  $row=mysql_fetch_array($result);
  $editname=$row;
  return $editname;
}

function updateData($post){
  $name=$post['name'];
  $id=$post['id'];
  $sql="UPDATE manage SET name='$name' WHERE id=$id";
  $res=mysql_query($sql);

  header('location:index1.php');

}

function del($get){
  $id =$_GET['delete'];
  $qry ="DELETE FROM manage WHERE id =$id";
  $res = mysql_query($qry);

  header('location:index1.php');

}



?>
