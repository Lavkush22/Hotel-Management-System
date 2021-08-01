<!DOCTYPE html>
<html>
<head>
	<title>contectshowdata</title>
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
	<br><center>
<div id="card2">
	<h5><br>CONTACT CUSTOMER DATA</h5>
</div><br>
	<table>	
		<tr class="bg-dark text-white text-center" >
			<th style="font-size:22px">Cust_ID</th>
			<th style="font-size:22px">Cust_Name</td>
			<th style="font-size:22px">Gender</th>
			<th style="font-size:22px">Mobine No.</th>
			<th style="font-size:22px">Email Id</th>
			<th style="font-size:22px">Message</th>
			<th style="font-size:22px">Delete</th>
		</tr>
  <?php
  error_reporting(0);
  $conn=mysqli_connect('localhost','root','','cdb');
  $sql="SELECT * FROM `condetail`";
  $res=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($res)) 
	{

		?>
		 <tr class="text-center">
		     <td><?php echo $row["Id"];?></td>
		     <td><?php echo $row["Name"];?></td>
		     <td><?php echo $row["Gender"];?></td>
		     <td><?php echo $row["Mobile"];?></td>
		     <td><?php echo $row["Email"];?></td>
		     <td><?php echo $row["Message"];?></td>
		     <td><button class="btn-danger btn">
		     <a href="deletecontact.php?id=<?php echo $row["Id"]; ?>"
		     class="text-white" style="text-decoration: none;"> Delete</a></button></td>
		 </tr> 
	<?php
	}
	?>
	</table><br><button><center>
  <a href="operation.php" style=" text-decoration: none";>
        <b style="font-size: 20px" >Goto Admin Pannel</b></a></button></center><br>
</body>
</div>
</html>