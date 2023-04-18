<?php 
    session_start();  
    // Check if the user has already logged in
    if(isset($_SESSION['email']))
        // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
        header("Location: mypage.php");

    else
    {
?>
		<!DOCTYPE html>
		<html lang="en">
		<head> 
		<link rel="Stylesheet" href="css-styles.css"> 
		<title>weCare</title>
		</head>
		<body>


			<!--bar-->
		<nav>
			<ul>
			<li><img src="../FinalProject/photo/logo.png" alt="logo"></li>
			<li><a href="first.html">back to welcome page</a></li>
			</ul>
		</nav>
		<!--bar-->
		<div class="container">
			
			<div class="signin-form-container">
				<form class="formlog" action="checklogin.php" method="post">
					
					<h1>Login</h1>

					 <?php
                            if(isset($_GET['error']))
                                echo "<div class='alert alert-danger' role='alert'>".$_GET['error']."</div>";
                        ?> 
					
					<input type="email" class="fill-field box" placeholder="Email" required name="email" >
					<input type="password" class="fill-field box" placeholder="Password" required name="password">
					<p>Login As a</p>
					<span>
					<a href="../FinalProject/parentPage/parentPage.html" target="_blank" ><input type ="button" class="button" value="Parent"></a>
					<a href="../FinalProject/babySitterPage/babySitterPage.html" target="_blank"><input type="button" class="button" value="BabySitter"></a>
				    </span>
	              
					<lable>Parent<input type="radio" class="fill-field box" name="pr" ></lable> 
					<lable>BabySitter<input type="radio" class="fill-field box" name="bsr" ></lable> 
				<a href="#">Forgot your password?</a>
				</form>
		</div>
			<div class="overlay-container">
				<div class="overlay">
				
						
				
					<div class="overlay-panel overlay-right">
						<h1 class="h1WLS">Hello!, Welcome To WeCare</h1>
						<p class="pWLS">SignUp as </p> 
						
					
						<a href="SignUpParent.html" target="_blank">
						<button class="button box">Parent </button></a>
						<a href="SignupBabySitter.html" target="_blank">
				<button class="button box" >Babysitter</button></a>
			
					</div>
				</div>
			</div>
		</div>


		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>We<span>Care</span></h3>


				<p class="footer-company-name">We Care © 2022</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Altahlia Street</span> Riyadh</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+966 5553332229</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@WeCare.com">support@WeCare.com</a></p>
				</div>

			</div>
		<div class="footer-right">

			<p class="footer-company-about">
				<span>About the company</span>
				Founded in 2022,WeCare is born out of the desire to make it simpler for
						parents to find great babysitters.
			</p>

			<div class="footer-icons">
				
				<a href="Wecare.facebook.com" target="_blank">
					<img src="../FinalProject/photo/facebook-icon.png" alt="facebbok" class="footer-icons">
				</a>
				<a href="Wecare.twitter.com" target="_blank"> 
					<img src="../FinalProject/photo/twitter-icon.png" alt="twitter" class="footer-icons">
				</a>
				<a href="Wecare.instagram" target="_blank"> 
					<img src="../FinalProject/photo/instagram-icon.png"  alt="instagram" class="footer-icons">
				</a>
				

			</div>

		</div>



		</footer>
		</body>

		</html>
<?php
    }
?>