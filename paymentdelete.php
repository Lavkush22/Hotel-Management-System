<?php
error_reporting(0);
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','bookingdb');
  $sql="DELETE FROM `payment` WHERE CustomerId=$id";
  mysqli_query($conn,$sql);
  
  header("location:paymentshow.php");
  ?>