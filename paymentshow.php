<!DOCTYPE html>
<html>
<head>
	<title>paymentshowdata</title>
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
	<h5><br>CUSTOMER PAYMENT DATA</h5>
</div>
  <br><table> 
    <tr class="bg-dark text-white text-center" >
      <th style="font-size:22px">Payment_ID</th>
      <th style="font-size:22px">Card Type</th>
      <th style="font-size:22px">Card Holder Name</td>
      <th style="font-size:22px">Card number</th>
      <th style="font-size:22px">Card Expiry</th>
      <th style="font-size:22px">Card CVV</th>
      <th style="font-size:22px">Amount Rs.</th>
      <th style="font-size:20px ">Delete</th>
    </tr>
    <?php
  error_reporting(0);
  $conn=mysqli_connect('localhost','root','','bookingdb');
  $sql="SELECT * FROM `payment`";
  $res=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($res)) 
  {

    ?>
     <tr class="text-center">
         <td><?php echo $row['CustomerId'];?></td>
         <td><?php echo $row['CardType'];?></td>
         <td><?php echo $row["Card Holder Name"];?></td>
         <td><?php echo $row["Card Number"];?></td>
         <td><?php echo $row["Expiry Date"];?></td>
         <td><?php echo $row["CVV"];?></td>
         <td><?php echo $row["Amount"];?></td>
         <td><button class="btn-danger btn">
             <a href="paymentdelete.php?id=<?php echo $row["CustomerId"];?>" 
              class="text-white" style="text-decoration: none;">
              Delete</a></button></td>
         </tr>
    <?php
  }
  ?>
  </table>
<br><button><center>
  <a href="operation.php" style=" text-decoration: none";>
  <b style="font-size: 20px" >Goto Admin Pannel</b></a></button>
   <button>
    <a href="logout.php" style="text-decoration: none;">
      <b style="font-size: 20px" >Logout</a></button></center><br>
</body>
</div>
</html>