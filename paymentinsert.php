<?php
error_reporting(0);
$conn=mysqli_connect('localhost','root','','bookingdb');
$card=$_REQUEST['card'];
$name=$_REQUEST['name'];
$cardno=$_REQUEST['cardno'];
$exdate= $_REQUEST['exdate'];
$cvv=$_REQUEST['cvv'];
$amount=$_REQUEST['amount'];
$query=mysqli_query($conn,"INSERT INTO `payment`(`CardType`,`Card Holder Name`,
	`Card Number`, `Expiry Date`,`CVV`,`Amount`)
	VALUES('$card','$name','$cardno','$exdate','$cvv','$amount')");
if($query)
{
  $sms1="Payment is Under Proccesing Plese!";
  echo "<h3><center>$sms1<br>Wait Loading...</center></h3>";
  $sms="Payment Successfull Thank You!";
  header("refresh:8;url=payment.php?mess=".$sms);
}else{
	echo"HTTP Error";
}
?>