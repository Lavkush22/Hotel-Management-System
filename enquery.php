
<?php
error_reporting(0);
$conn=mysqli_connect('localhost','root','','cdb');
$name=$_REQUEST['name'];
$gender= $_REQUEST['gender'];
$mobile= $_REQUEST['mobile'];
$email= $_REQUEST['email'];
$sms= $_REQUEST['sms'];
$query="INSERT INTO `condetail`( `Name`, `Gender`, `Mobile`, `Email`, `Message`) VALUES ('$name','$gender','$mobile','$email','$sms')";
$run=mysqli_query($conn,$query);

if($run==TRUE)
{
	$sms="Request submitted we call you Later.";
	header("Location:contect.php?message=".$sms);
}
else{
	echo "Form not submitted something is wrong";
  }
?>
