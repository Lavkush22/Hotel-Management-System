
<?php
session_start();
$uname=$_POST['user'];
$pass=$_POST['pass'];
$conn=mysqli_connect('localhost','root','','admindb');
$sql="SELECT * FROM `admin`";
$res=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($res)) 
{
  if($row["username"]=="$uname" AND $row["password"]=="$pass")
  {
    $var=1;
  }
}
if($var==1)
{
   $_SESSION['username']=$uname;	
  header("Location:operation.php");
}
else
{ 
	$sms="usename or password wrong";
  header("Location:login.php?message=".$sms);
}
?>


   