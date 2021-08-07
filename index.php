<!-- nexgenITs HSM System All right reseverd.-->
<?php
  session_start();
  require 'include/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HMS Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assetslog/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetslog/css/util.css">
	<link rel="stylesheet" type="text/css" href="assetslog/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<span class="login100-form-title p-b-26">
						H M S
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
							<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
								<input class="input100" type="text" name="username">
								<span class="focus-input100" data-placeholder="Username"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<span class="btn-show-pass">
									<i class="zmdi zmdi-eye"></i>
								</span>
								<input class="input100" type="password" name="password">
								<span class="focus-input100" data-placeholder="Password"></span>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" type="submit">
										Login
									</button>
								</div>
							</div>
					<div class="text-center p-t-115">
						<!-- <span class="txt1">
							Don’t have an account?
						</span> -->

						<!-- <a class="txt2" href="#">
							Sign Up
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="assetslog/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assetslog/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assetslog/vendor/bootstrap/js/popper.js"></script>
	<script src="assetslog/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assetslog/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assetslog/vendor/daterangepicker/moment.min.js"></script>
	<script src="assetslog/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assetslog/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assetslog/js/main.js"></script>

</body>
</html>
<!-- ligin php code strat -->
<?php
   require 'include/config.php';

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form
        $user = $_POST['username'];


        $password = $_POST['password'];
        $password =md5($password);


         $sql ="SELECT * FROM signup WHERE username= '$user' and password = '$password'";
         $result=mysqli_query($conn,$sql);
         $count =mysqli_num_rows($result); // if uname/pass correct it returns must be 1 row

         if($count == 1 )
          {
                 session_regenerate_id();
                 $_SESSION['username'] = $user;
                 session_write_close();
                 //header('Location:content/home.php');
								 echo "<script type='text/javascript'>window.location = \"content/home.php\"</script>";
         }
         else
         {
            echo "<script type='text/javascript'>alert('Incorrect Credentials, Try again...');window.location = \"index.php\"</script>";
         }
   }
?>
<!-- ligin php code end -->
