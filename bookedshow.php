<!DOCTYPE html>
<html>
<head>
	<title>booked data show</title>
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
<div id="baner">
<body>
	<br>
<center>
<div id="card2">
<h5><br>ROOM BOOKED CUSTOMER DATA </h5></div><br>
<h5 style="color: blue">
      <?php 
      error_reporting(0);
            if(isset($_GET['sms'])){
              echo $_GET['sms'];}
      ?></h5></center>
<table>	
		<tr class="bg-dark text-white text-center" >
			<th style="font-size:20px">Cust_ID</th>
			<th style="font-size:20px">Cust_Name</td>
			<th style="font-size:20px">D.O.B</th>
			<th style="font-size:20px">Gender</h5></th>
			<th style="font-size:20px">Fahter Name</th>
			<th style="font-size:20px">Mother Name</th>
			<th style="font-size:20px">Mobine No.</th>
			<th style="font-size:20px">Email Id</th>
			<th style="font-size:20px">Aadhar No.</th>
			<th style="font-size:20px">Chekin Date</th>
			<th style="font-size:20px">Chekout Date</th>
			<th style="font-size:20px">Room Type</th>
			<th style="font-size:20px ">Delete</th>
			<th style="font-size:20px">Update</th>
		</tr>
  <?php
  error_reporting(0);
  $conn=mysqli_connect('localhost','root','','bookingdb');
  $sql="SELECT * FROM `bookingtable`";
  $res=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($res)) 
	{

		?>
		 <tr class="text-center">
		     <td><?php echo $row['CustomerId'];?></td>
		     <td><?php echo $row["Name"];?></td>
		     <td><?php echo $row["Date_of_Birth"];?></td>
		     <td><?php echo $row["Gender"];?></td>
		     <td><?php echo $row["FatherName"];?></td>
		     <td><?php echo $row["MotherName"];?></td>
		     <td><?php echo $row["MobileNo"];?></td>
		     <td><?php echo $row["EmailId"];?></td>
		     <td><?php echo $row["AdharNo"];?></td>
		     <td><?php echo $row["chekin"];?></td>
		     <td><?php echo $row["chekout"];?></td>
		     <td><?php echo $row["Roomtype"];?></td>
		     <td><button class="btn-danger btn">
		         <a href="delete.php?id=<?php echo $row["CustomerId"];?>" 
		         	class="text-white" style="text-decoration: none;">
		          Delete</a></button></td>
		    <td><button  class="btn-warning btn">
		     	<a href='update.php?id=<?php echo $row["CustomerId"] ;?>&n=<?php echo $row["Name"];?>  &dob=<?php echo$row["Date_of_Birth"];?> &g=<?php echo$row["Gender"];?> &f=<?php echo$row["FatherName"];?> &m=<?php echo$row["MotherName"];?>
		     	     &mob=<?php echo$row["MobileNo"];?> &e=<?php echo $row["EmailId"];?> &ad=<?php echo$row["AdharNo"];?> &chen=<?php echo$row["chekin"];?> &cho=<?php echo$row["chekout"];?> &rt=<?php echo $row["Roomtype"];?>' 
		     		class="text-white" style="text-decoration: none;">
		     	Update</a></button></td>
		 </tr> 
	<?php
	}
	?>
	</table><br>
	        <center><button style="background-color: yellow text-white ">
			   <a href="newrecord.php" style=" text-decoration: none";>
        <b style="font-size: 20px" >Add New Record</a></b></a></button>
         <button style="background-color: yellow text-white">
        <a href="operation.php" style=" text-decoration: none";>
        <b style="font-size: 20px" >Goto Admin Pannel</b></a></button>
        <button>
      <a href="logout.php" style="text-decoration: none;">
      <b style="font-size: 20px;margin-left:15px; color: red;" >Logout</a>
      </button></center><br>			
</body>
</div>
</html>