<!DOCTYPE html>
<html>
<head>
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
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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
      
  </div>
</nav>
  <div class="contactus">
<?php
$conn=mysqli_connect('localhost','root','','cdb');
  $sql="SELECT * FROM `logo`";
  $res=mysqli_query($conn,$sql);
   $a=1;
  while ($row=mysqli_fetch_array($res)) 
  {
    if($a==4)
    {
    ?>
<center><img src="image/<?php echo $row['image'] ?>" id="limage"></center>
  <?php
}
$a++;
  }
  ?>