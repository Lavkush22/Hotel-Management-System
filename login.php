    <?php include('header.php'); ?>
    <title>Login</title>
		<div class="title">ADMIN lOGIN<br></div>
    <h5>
   <?php
    if(isset($_GET['message']))echo $_GET['message'];
   ?></h5>
		<div class="inputfield">
			<div class="item">
        <form action="admin.php" method="post">
				<label for="user" class="lable"><div class="a">Username</label></div>
	      <input type="Password" name="user" id="user" class="input" required="required"></div>
				<div class="item">
				<label for="pass" class="lable"><div class="a">Password</label></div>
	     <input type="Password" name="pass" id="pass" class="input" required="required"></div>
			</div>
			<center>
        <button style="margin:15px;" class="btn1" name="submit" type="submit" id="btn">Login
        </button>
			  <button style="margin:15px;" class="btn1" name="reset" type="reset">Reset</button>
      </center>
    </form>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
          let btn=document.getElementById("btn");
          btn.addEventListener("click",function(){
        let name=document.getElementById("user").value;
        let mobile=document.getElementById("pass").value;
        if(name=="" || mobile=="")
        {
          swal("Error", "Plese! fill all field!", "error");
        }
      })
    </script>
	</div><br><br></div>
  <?php include('footer.php'); ?>