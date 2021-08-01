<?php
error_reporting(0);
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','bookingdb');
  $sql="DELETE FROM `bookingtable` WHERE CustomerId=$id";
  mysqli_query($conn,$sql);
  $sms="Record Deleted Successfully";
  header("location:bookedshow.php?sms=".$sms);
  ?>