<?php
error_reporting(0);
$conn=mysqli_connect('localhost','root','','bookingdb');
$id=$_GET['id'];
$name=$_GET['n'];
$dob=$_GET['dob'];
$gender= $_GET['g'];
$father=$_GET['f'];
$mother=$_GET['m'];
$mobile= $_GET['mob'];
$email= $_GET['e'];
$adhar=$_GET['ad'];
$in=$_GET['chen'];
$out=$_GET['cho'];
$room= $_GET['rt'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update record</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
   input[type=text], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 45%;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  margin-left: 20px;
}
.col-75 {
  float: left;
  width: 70%;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<div id="baner" style="background-color:#ff8000;">
<body>
    <?php
$conn=mysqli_connect('localhost','root','','bookingdb');
if($_GET['submit']){
$id=$_GET['id'];  
$name=$_GET['name'];
$dob=$_GET['dob'];
$gender= $_GET['gender'];
$father=$_GET['father'];
$mother=$_GET['mother'];
$mobile= $_GET['mobile'];
$email= $_GET['email'];
$adhar=$_GET['adhar'];
$in=$_GET['chekin'];
$out=$_GET['chekout'];
$room= $_GET['room']; 
 $query1="SELECT * FROM bookingtable WHERE CustomerId!='$id' and (MobileNo='$mobile' OR EmailId='$email' OR AdharNo='$adhar')";
$run=mysqli_query($conn,$query1);
if(mysqli_num_rows($run)>0){
  $sms="Mobile or Email or Adhar No alredy exits Try Again";
  header("Location:update.php?sms=".$sms);
}else{ 
$sql="UPDATE bookingtable SET Name='$name',Gender='$gender',Date_of_Birth='$dob',FatherName='$father',MotherName='$mother',MobileNo='$mobile',EmailId='$email',AdharNo='$adhar',chekin='$in',chekout='$out',Roomtype='$room' where CustomerId='$id'";
$res=mysqli_query($conn,$sql);
if($res){
  $sms="Record Updated Successfully";
  header("Location:bookedshow.php?sms=".$sms);
}else{
echo "<script>alert('Record Not Updated Try Again')</script>";
  header("location:update.php");}}}
  ?>
	<br><div class="container">
		<div class="card">
  <div class="card-header bg-success">
    <h2 class="text-white text-center">Update Record</h2></div></div>
    <center><h5 style="color: red">
      <?php 
      error_reporting(0);
            if(isset($_GET['sms'])){
              echo $_GET['sms'];}
      ?></h5></center>
	<form action="" method="GET"><br>
	<div class="row">
     <div class="col-25"><label for="id">Customer Id</label></div>
      <div class="col-75">
       <input type="text" name="id" id="" class="form-control" required="required" 
       value="<?php echo $id?>"></div></div>
	   <div class="row">
      <div class="col-25"><label for="name">Name</label></div>
      <div class="col-75">
       <input type="text" name="name" class="form-control" required="required" 
       value="<?php echo $name?>"></div></div>
	<div class="row">
      <div class="col-25"><label>D.O.B</label></div>
      <div class="col-75">
       <input type="text" name="dob" class="form-control" required="required" 
       value="<?php echo $dob?>"></div></div>
    <div class="row">
      <div class="col-25"><label>Gender</label></div>
      <div class="col-75">
       <select required="required" name="gender" class="form-control" required="required">
					<option id="opt"><?php echo $gender?></option>
					<option id="opt">Male</option>
					<option id="opt">Female</option>
					<option id="opt">Other</option>
				</select></div></div>
	<div class="row">
      <div class="col-25"><label>Father Namer</label></div>
      <div class="col-75">
       <input type="text" name="father" required="required" class="form-control" 
       value="<?php echo $father?>"></div></div>
	<div class="row">
      <div class="col-25"><label>Mother Name</label></div>
      <div class="col-75">
       <input type="text" name="mother" required="required" class="form-control"
        value="<?php echo $mother?>"></div></div>
	<div class="row">
      <div class="col-25"><label>Mobile No.</label></div><div class="col-75">
       <input type="text" name="mobile" required="required" class="form-control" 
       value="<?php echo $mobile?>"></div></div>
	<div class="row">
      <div class="col-25"><label>Email Id</label></div>
      <div class="col-75">
       <input type="text" name="email" required="required"class="form-control" 
       value="<?php echo $email?>"></div></div>
	<div class="row">
      <div class="col-25"><label>Aadhar No.</label></div>
      <div class="col-75">
       <input type="text" name="adhar"  required="required" class="form-control" 
       value="<?php echo $adhar?>"></div></div>
	<div class="row">
      <div class="col-25"><label>Chekin Date</label></div>
      <div class="col-75">
       <input type="text" name="chekin" required="required" class="form-control" 
       value="<?php echo $in?>"></div></div>
	<div class="row">
      <div class="col-25"><label>Chekout Date</label></div>
      <div class="col-75">
       <input type="text" name="chekout" id="chekout" class="form-control" required="required" value="<?php echo $out?>"></div></div>
	<div class="row">
      <div class="col-25"><label>Room Type</label></div>
      <div class="col-75">
       <select  required="required" name="room" class="form-control">
					<option id="opt"><?php echo $room?></option>
					<option id="opt">Single Bed with AC</option>
					<option id="opt">Single Bed non-AC</option>
					<option id="opt">Double Bed with AC</option>
					<option id="opt">Double Bed Non-Ac</option>
				</select></div></div>
     	    <br><center>
          <input type="submit" class="btn1" name="submit" value="Update "> 
        </h4></center></button>
 </form>
</div>
</body>
<br>
</div>
</html>
