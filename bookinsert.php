
<?php
error_reporting(0);
$conn=mysqli_connect('localhost','root','','bookingdb');
$name=$_REQUEST['name'];
$dob=$_REQUEST['dob'];
$gender= $_REQUEST['gender'];
$father=$_REQUEST['father'];
$mother=$_REQUEST['mother'];
$mobile= $_REQUEST['mobile'];
$email= $_REQUEST['email'];
$adhar=$_REQUEST['adhar'];
$in=$_REQUEST['chekin'];
$out=$_REQUEST['chekout'];
$room= $_REQUEST['room'];
$query1="SELECT * FROM bookingtable WHERE MobileNo='$mobile' ";
$query2="SELECT * FROM bookingtable WHERE EmailId='$email' ";
$query3="SELECT * FROM bookingtable WHERE AdharNo='$adhar' ";
$run1=mysqli_query($conn,$query1);
$run2=mysqli_query($conn,$query2);
$run3=mysqli_query($conn,$query3);
if(mysqli_num_rows($run1)>0)
{
  $sms="Mobile No. alredy exits Try Again";
  header("Location:newrecord.php?sms=".$sms);
}elseif(mysqli_num_rows($run2)>0){
  $sms="Email Id alredy exits Try Again";
  header("Location:newrecord.php?sms=".$sms);
}elseif(mysqli_num_rows($run3)>0){
  $sms="Adhar No. alredy exits Try Again";
  header("Location:newrecord.php?sms=".$sms);
}else{
   $query=mysqli_query($conn,"INSERT INTO `bookingtable`(`Name`, `Date_of_Birth`, `Gender`, `FatherName`, `MotherName`, `MobileNo`, `EmailId`, `AdharNo`, `chekin`, `chekout`, `Roomtype`) VALUES ('$name','$dob','$gender','$father','$mother','$mobile','$email','$adhar','$in','$out','$room')");
  if($query)
  {
    $sms="Form Submitted Successful Plese! Pay Amount";
    echo "<h3><center>$sms<br>Wait Loading...</center></h3>";
   header("refresh:5;url=payment.php?room=".$room ."&date1=".$in ."&date2=".$out);
 }
  else{
    header("Location:booking.php");
  }
}
?>


