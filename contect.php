<?php include('header.php'); ?>
<h5><center>
    <title>Enquery</title>
<?php
$conn=mysqli_connect('localhost','root','','cdb');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$gender= $_POST['gender'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$sms= $_POST['sms'];
$query1="SELECT * FROM condetail WHERE Mobile='$mobile' OR Email='$email' ";
$run=mysqli_query($conn,$query1);

if(mysqli_num_rows($run)>0)
{
  echo "Mobile or Email alredy exits Try Again";
}else{
  $query=mysqli_query($conn,"INSERT INTO `condetail`( `Name`, `Gender`, `Mobile`, `Email`, `Message`)VALUES ('$name','$gender','$mobile','$email','$sms')");
  if($query)
  {
    echo"Thank You We will be Call You Soon";
  }
  else{
    echo"not submitted";
  }
}
}
?></h5></center>
		<div class="title">enquery form<br></div>
		<div class="inputfield">
			<div class="item">
				<form action="contect.php" method="POST">
				<label for="fname" class="lable"><div class="a">Name</label></div>
				<input type="text" name="name" class="input" required="required" id="name">
			</div>
				<div class="item">
				<label for="gender" class="lable"><div class="a">Gender</label></div>
				<select name="gender" required="required" id="gender">
					<option id="opt">select</option>
					<option id="opt">Male</option>
					<option id="opt">Female</option>
					<option id="opt">Other</option>
				</select>
				<div class="item">
				<label for="mobile" class="lable"><div class="a">Mobile No.</label></div>
				<input type="mobile" name="mobile"  class="input" required="required" id="mobile">
			</div>
				<div class="item">
				<label for="email" class="lable"><div class="a">Email Id</label></div>
				<input type="text" name="email" id="email" class="input" required="required">
			</div>
				<div class="item">
				<label for="msg" class="lable"><div class="a">Message</label></div>
				<textarea id="msg" class="text_area" name="sms" required="required" id="sms"></textarea>
			</div>
			</div>
			<center>
			<button  type="submit" style="margin:15px;" class="btn1" name="submit" id="btn" >Submit
			</button>
			<button  type="reset" style="margin:15px;" class="btn1" name="reset" id="reset">Reset
			</button></center>
		</form>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</div></div><br></div>
	<?php include('footer.php'); ?>
