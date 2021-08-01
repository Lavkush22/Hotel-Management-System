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
<div id="baner">
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#12015023@">
    
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
<center><img src="image/<?php echo $row['image'] ?>" id="logo"></center>
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
        <a class="nav-link" href="contect.php">Enquery</a>
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
</nav>
</div>
  <div id="baner">
    <div id="demo" class="carousel slide" data-ride="carousel">

<?php
$conn=mysqli_connect("localhost","root","","cdb");
$sql=$conn->query("SELECT * FROM slideimg ");
?>
  <ul class="carousel-indicators">

    <?php
     $i=0;
     foreach($sql as $row){
       $actives='';
       if($i==0)
       {
        $actives='active';
       }
    ?>
    <li data-target="#demo" data-slide-to="<?= $i;?>" class="<?= $actives ?>"></li>
    <?php $i++; } ?>
  </ul>
  <div class="carousel-inner">

    <?php
     $i=0;
     foreach ($sql as $row) {
       $actives='';
       if($i==0)
       {
        $actives='active';
       }
    ?>
    <div class="carousel-item <?= $actives; ?>">
      <img src="image/<?= $row["image"] ?>" width="100%" height="500px">
    </div>
    <?php $i++; }?>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div id="baner">
<br><h3><b><i><center>Top Headline</center></i></b></h3>
<div id="hdiv"><br><center><img src="image/chek.jpg" height="90px" width="90px">
<br><br><h4><b><i>About</h4></i></center></b>
<p>Taj Hotels is a chain of luxury hotels and a subsidiary of the Indian Hotels Company Limited; headquartered at Express Towers, Nariman Point in Mumbai. Incorporated by the founder of the Tata Group, Jamsetji Tata, in 1903, the company is a part of the Tata Group, one of India's largest business conglomerates</p>
</div>
<div id="hdiv"><br><center><img src="image/chek.jpg" height="90px" width="90px">
<br><br><h4><b><i>Services</h4></i></center></b>
  <p>Typically, the basic hotel services include reception guests, room service, food service, including restaurants in the hotel, and security. Sometimes in the small hotels the duties of security, a cook and a cleaner are performed by the owner himself.
  These are the laundry service, massage room, fitness gyms, conference rooms.</p>
</div>
<div id="hdiv"><br><center><img src="image/chek.jpg" height="90px" width="90px">
  <br><br><h4><b><i>History</i></h4></center></b>
<p>Jamsetji Nusserwanji Tata, founder of the Tata Group, opened the Taj Mahal Palace, a hotel in Mumbai (formerly called Bombay) overlooking the Arabian Sea, on 16 December 1903. It was the first Taj property and the first Taj hotel.Hotels that accepted only European guests were very common across British India then.</p>
</div>
</div></div>
<div id="baner">
<h3><b><i><center>Recomented Room</center></i></b></h3><br>
<?php
$conn=mysqli_connect('localhost','root','','cdb');
  $sql="SELECT * FROM `imagetable`";
  $res=mysqli_query($conn,$sql);
   $a=1;
  while ($row=mysqli_fetch_array($res)) 
  {
    if($a<=4)
    {
    ?>
<div id="baner">
<div id="gallary" style="float: left;">
<img src="image/<?php echo $row['image'] ?>" height="300px" width="100%">
</div></div>
  <?php
}
$a++;
  }
  ?><div id="baner">
<div id="hpr">
   <p>Single Bed Non-AC<br>
   Rs.500 Per Night <br>in <i class="fa fa-usd" aria-hidden="true"></i>6.55<br>Rating..
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span></p></div>
<div id="hpr">
  <p>Single Bed With AC<br>
   Rs.1000 Per Night <br>in <i class="fa fa-usd" aria-hidden="true"></i>13.11<br>Rating..
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span></p></div>
<div id="hpr">
  <p>Double Bed Non-AC<br>
   Rs.1000 Per Night <br>in <i class="fa fa-usd" aria-hidden="true"></i>.11<br>Rating..
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></p></div>
<div id="hpr">
  <p>Double Bed With AC<br>
   Rs.2000 Per Night  <br>in <i class="fa fa-usd" aria-hidden="true"></i> 26.22<br>Rating..
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span></p>
</div>
</div>
</div>
<br>
<?php include('footer.php'); ?>