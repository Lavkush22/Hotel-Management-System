<?php
error_reporting(0);
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','cdb');
  $sql="DELETE FROM `condetail` WHERE Id=$id";
  mysqli_query($conn,$sql);
  header("location:contactshow.php");
  ?>