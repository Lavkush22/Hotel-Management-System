<!DOCTYPE html>
<html>
<head>
	<title>New Reord</title>
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
<div id="baner" style="background-color:#0080ff;">
<body>
<br><div class="container">
	<div class="card">
  <div class="card-header bg-success">
    <h2 class="text-white text-center">Add New Record</h2></div></div>
    <center><h5 style="color: blue">
      <?php 
      error_reporting(0);
            if(isset($_GET['sms'])){
              echo $_GET['sms'];}
      ?></h5></center>
	<form action="newinsert.php" method="POST"><br>
	   <div class="row">
      <div class="col-25"><label for="name">Name</label></div>
      <div class="col-75">
       <input type="text" name="name" class="form-control" required="required" 
       value=""></div></div>
	<div class="row">
      <div class="col-25"><label>D.O.B</label></div>
      <div class="col-75">
       <input type="date" name="dob" class="form-control" required="required" 
       value=""></div></div>
    <div class="row">
      <div class="col-25"><label>Gender</label></div>
      <div class="col-75">
       <select required="required" name="gender" class="form-control" required="required">
					<option id="opt">select</option>
					<option id="opt">Male</option>
					<option id="opt">Female</option>
					<option id="opt">Other</option>
				</select></div></div>
	<div class="row">
      <div class="col-25"><label>Father Namer</label></div>
      <div class="col-75">
       <input type="text" name="father" required="required" class="form-control" 
       value=""></div></div>
	<div class="row">
      <div class="col-25"><label>Mother Name</label></div>
      <div class="col-75">
       <input type="text" name="mother" required="required" class="form-control"
        value=""></div></div>
	<div class="row">
      <div class="col-25"><label>Mobile No.</label></div><div class="col-75">
       <input type="text" name="mobile" required="required" class="form-control" 
       value=""></div></div>
	<div class="row">
      <div class="col-25"><label>Email Id</label></div>
      <div class="col-75">
       <input type="text" name="email" required="required"class="form-control" 
       value=""></div></div>
	<div class="row">
      <div class="col-25"><label>Aadhar No.</label></div>
      <div class="col-75">
       <input type="text" name="adhar"  required="required" class="form-control" 
       value=""></div></div>
	<div class="row">
      <div class="col-25"><label>Chekin Date</label></div>
      <div class="col-75">
       <input type="date" name="chekin" required="required" class="form-control" 
       value=""></div></div>
	<div class="row">
      <div class="col-25"><label>Chekout Date</label></div>
      <div class="col-75">
       <input type="date" name="chekout" id="chekout" class="form-control" required="required" value=""></div></div>
	<div class="row">
      <div class="col-25"><label>Room Type</label></div>
      <div class="col-75">
       <select  required="required" name="room" class="form-control">
       	            <option id="opt">Select</option>
					<option id="opt">Single Bed with AC</option>
					<option id="opt">Single Bed non-AC</option>
					<option id="opt">Double Bed with AC</option>
					<option id="opt">Double Bed Non-Ac</option>
				</select></div></div>
     	    <br><center><tr>
     		<center><button class="btn1" type="submit" style="margin:15px;" name="submit">Submit</button>
     <button class="btn1" type="reset" style="margin:15px;">Reset</button></center>
</form>	
<center>
     <a href="operation.php" style=" text-decoration: none";>
     <b style="font-size: 20px" >Goto Admin Pannel</b></a>
     <a href="logout.php" style="text-decoration: none;">
     <b style="font-size: 20px; margin-left:15px; color: red;">Logout</a></center><br>

</body>
</div>
</html>