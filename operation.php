<!DOCTYPE html>
<html>
<head>
	<title>operation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<div id="bd">
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    
    <?php
$conn=mysqli_connect('localhost','root','','cdb');
  $sql="SELECT * FROM `logo`";
  $res=mysqli_query($conn,$sql);
   $a=1;
  while ($row=mysqli_fetch_array($res)) 
  {
    if($a==1)
    {
    ?>
<img src="image/<?php echo $row['image'] ?>" id="logo">
  <?php
}
$a++;
  }
  ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contect.php">Enquiry</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="facilities.php">Facilities</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="booking.php">Booking</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Admin Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="gallary.php">Gallary</a>
      </li>
    </ul>
  </div>
</nav><br>
<div class="col-lg-5 m-auto">
  <div class="card">
  <div class="card-header bg-dark">
    <?php
$conn=mysqli_connect('localhost','root','','cdb');
  $sql="SELECT * FROM `logo`";
  $res=mysqli_query($conn,$sql);
   $a=1;
  while ($row=mysqli_fetch_array($res)) 
  {
    if($a==3)
    {
    ?>
<center><img src="image/<?php echo $row['image'] ?>" id="limage"></center>
  <?php
}
$a++;
  }
  ?>
    <h2 class="text-white text-center">Admin Pennal</h2></div>
   <button class="btn-warning btn">
    <a href="newrecord.php" class="text-white " style="text-decoration: none;">
      <h5>Goto Add New Customer Data</a></button>
      <button class="btn-success btn">
    <a href="contactshow.php" class="text-white" style="text-decoration: none;">
      <h5>Goto See Contact Customer Data</a></button></h5>
      <button class="btn-primary btn">
    <a href="bookedshow.php" class="text-white" style="text-decoration: none;">
      <h5>Goto See Booked Customer Data</a></button></h5>
      <button class="btn-secondary btn">
    <a href="paymentshow.php" class="text-white" style="text-decoration: none;">
      <h5>Goto See Customer Payment Data</a></button></h5>
    <button class="btn-danger btn">
    <a href="logout.php" class="text-white" style="text-decoration: none;">
      <h5>Logout</a></button></h5>
</div>
</div><br><br>

<?php
session_start();
if($_SESSION['username']==true)
{
header("Location.operation.php");
}
else{
  header("Location:login.php");
}
?>
<div id="buttom"> 
    <div id="facdivb"><h5><b>Address</b></h5>
    <p id="add">Gulab Estate, T2 Terminal International Airport,MTNL Road, Sakinaka, Andheri, Mumbai, Maharashtra 400072</p>
    </div>
    <div id="facdivb"><h5><b>Toll Free Number</b></h5>
     <p id="add">1800022001<br>1800210111<br>1800111825<br>1800220011</p>
    </div>
    <div id="facdivb"><h5><b>Our Contact</b></h5>
     <p id="add">
      <i class="fa fa-phone" aria-hidden="true"></i> 7860960874<br>
      <i class="fa fa-envelope-o" aria-hidden="true"></i> :saket22373@gmail.com<br>
      <i class="fa fa-facebook" aria-hidden="true"> :Lavkush Kumar</i><br>
      <i class="fa fa-instagram" aria-hidden="true"> :lav_99999</i>
     </p>
    </div>
  </div>
  <div id="slogo">
    <div class="centerdiv">
      <a id="aa" href="https://www.facebook.com" target="_blank">
        <i class="fa fa-2x fa-facebook"></i></a>
      <a id="aa" href="https://www.instagram.com/" target="_blank">
        <i class="fa fa-2x fa-instagram"></i></a>
       <a id="aa" href="https://twitter.com/login" target="_blank">
        <i class="fa  fa-2x fa-twitter"></i></a>
        <a id="aa" href="https://www.youtube.com/" target="_blank">
        <i class="fa fa-2x fa-youtube"></i></a>
        <a id="aa" href="https://www.linkedin.com/" target="_blank">
        <i class="fa fa-2x fa-linkedin"></i></a>
      </div>
  </div>  
</body>
</div>
</html>