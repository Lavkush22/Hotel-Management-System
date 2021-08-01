  <!DOCTYPE html>
  <html>
  <head>
  <title>payment Page</title>
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
  background-color: Green;
  padding: 20px;
  width: 45%;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  margin-left: 20px;
  font-size: 18px;
}
.col-75 {
  float: left;
  width: 70%;
  margin-top: 6px;
  margin-left: 5px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<div id="baner" style="background-color:#ff8000;">
  <body><br>
    <div class="container">
      <center><h5 style="color: white">
      <?php 
      error_reporting(0);
            if(isset($_GET['mess'])){
              echo $_GET['mess'];
              header("refresh:5;url=home.php");}
      ?></h5></center><br>
    <?php
$conn=mysqli_connect('localhost','root','','cdb');
  $sql="SELECT * FROM `logo`";
  $res=mysqli_query($conn,$sql);
   $a=1;
  while ($row=mysqli_fetch_array($res)) 
  {
    if($a==5)
    {
    ?>
<center><img src="image/<?php echo $row['image'] ?>" id="limage"></center>
  <?php
}
$a++; }  ?>

  <?php 
    if(isset($_GET['date1']))
    $d1=$_GET['date1'];
    if(isset($_GET['date2']))
    $d2=$_GET['date2'];
    $date1="$d1";
    $date2="$d2";
  function dateDiff($date1, $date2) 
  {
    $date1_ts = strtotime($date1);
    $date2_ts = strtotime($date2);
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400);
  }
  $d= dateDiff($date1, $date2);
  ?>
    <div class="title">payment inr- <?php error_reporting(0); 
     if(isset($_GET['room'])) $room= $_GET['room'];
     if($room=="Single Bed with AC")
     echo "1000.00" * $d;
     else if($room=="Single Bed non-AC")
     echo "500.00" * $d;
     else if($room=="Double Bed with AC")
     echo "2000.00" * $d;
     else if($room=="Double Bed Non-Ac")
    echo "1500.00" * $d;
    ?><br></div>

  <form action="paymentinsert.php" method="POST">
    <div class="row">
      <div class="col-25"><label>Card Type</label></div>
      <div class="col-75">
       <select required="required" name="card" class="form-control" required="required">
          <option id="opt">select</option>
          <option id="opt">Master</option>
          <option id="opt">Visa</option>
          <option id="opt">Rupay</option>
        </select></div></div>
  <div class="row">
     <div class="col-25"><label for="id">Card HolderName</label></div>
      <div class="col-75">
       <input type="text" name="name" id="" class="form-control" required="required" 
       value=""></div></div>
     <div class="row">
      <div class="col-25"><label for="name">Card Number</label></div>
      <div class="col-75">
       <input type="text" name="cardno" class="form-control" required="required" 
       value=""></div></div>
  <div class="row">
      <div class="col-25"><label>expiry Date</label></div>
      <div class="col-75">
       <input type="Date" name="exdate" class="form-control" required="required" 
       value=""></div></div>
       <div class="row">
      <div class="col-25"><label>CVV</label></div>
      <div class="col-75">
       <input type="Text" name="cvv" class="form-control" required="required" 
       value=""></div></div>
       <div class="row">
      <div class="col-25"><label for="name">Total Amount</label></div>
      <div class="col-75">
       <input type="text" name="amount" class="form-control" required="required" 
       value="<?php if($room=="Single Bed with AC")
        echo "1000.00" * $d;
        else if($room=="Single Bed non-AC")
        echo "500.00" * $d;
        else if($room=="Double Bed with AC")
        echo "2000.00" * $d;
        else if($room=="Double Bed Non-Ac")
        echo "1500.00" * $d;?>"></div></div>

      <center><button style="margin:15px;" class="btn1" name="btn" id="btn">Pay</button>
      <button style="margin:15px;" class="btn1" name="reset">Reset</button></center>
    </form>
  </div>
  <br>
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
