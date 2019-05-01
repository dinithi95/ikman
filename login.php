<!DOCTYPE html>
<html>
<head>
	<title>ikman.lk</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/common.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>


<body>

		<?php
			$file_name="en";//by default en thmy wda krnne
			if(isset($_GET["lang"])){//lang parameter eka set wey nm
				$file_name = $_GET["lang"];
			}
			$L = parse_ini_file("lang/$file_name.ini");
		?>






		
<div id="section1" class="container-fluid">
		<!--start of section1-->
		<div class="container">
			
		
			<div class="row">
				
				<div class="col-md-2">
					<img src="images/logo.png">
				</div>

				<div class="col-md-1 all">
					<span>All ads</span>
				</div>

				<div class="col-md-3 button1">
					<a href="?lang=en" class="btn1">English</a><!--edit-->
					<a href="?lang=ta" class="btn1">සිංහල</a>
					<a href="?lang=ta" class="btn1">தமிழ்</a>
				</div>


				<div class="col-md-2 icon">
					<i class="fas fa-comments"></i> Chat
				</div>

				<div class="col-md-2 icon">
					<i class="fas fa-user-alt"></i> Login
				</div>

				<div class="col-md-2 button2">
					<a href="x" class="btn2">POST YOUR AD</a>
					
					</div>
				</div>
		</div>
		<!--end of section1-->
</div>




<div id="section4" class="container-fluid">
<!--starat-->
	<div  class="container">

		<div class="row">

		<div class="col-md-6">
			
			<div class="heading">
				<h1><?=$L["login in to ikman"];?></h1>
				<h5>To view your ads and account details, please login to your ikman account.</h5>
			</div>

			<ul class="info">
		
				<img width="72" height="72" src="images/start.png">
				<span>Start posting your own ads.</span>

			</ul>


			<ul class="info">
			
				<img width="72" height="72" src="images/mark.png">
				<span>Mark ads as favorite and view them later.</span>

			
			</ul>


			<ul class="info">
			
				<img width="72" height="72" src="images/view.png">
				<span>view posting your own ads.</span>

			
			</ul>
			</div>


			<div class="col-md-6" style="padding-top: 60px;">
			<div class="field">

					<form action="login_action.php" method="post">

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email" />

				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" />
				</div>

				<div class="form-group">
					<input type="login" value="RESET" class="btn btn-info"/>
					<input type="submit" value="REGISTER" class="btn btn-success"/>
				</div>

			</form>


			</div>



		</div>
	</div>




			










	

<!--end-->
</div>
</div>





<div class="container">
		<!--start of footer-->
		<div class="row">
			
			<div class="col-md-4">
				<p class="title">Download our app</p>
					<img width="136" height="41" src="images/google.png">
					<img width="136" height="41" src="images/apple.png">

				<p class="title1">Connect with us</p>	
			</div>
		
			<div class="col-md-2">
					<p class="title">Learn More</p>
					<p class="sub">How to sell fast</p>
					<p class="sub">Buy Now on ikman.lk</p>
					<p class="sub">Membership</p>
					<p class="sub">Banner Advertising</p>
					<p class="sub">Promote your ad</p>
			</div>

			<div class="col-md-2">
					<p class="title">Help & Support</p>
					<p class="sub" class="sub">FAQ</p>
					<p class="sub" class="sub">Stay safe on ikman.lk</p>
					<p class="sub" class="sub">Contact us</p>
			</div>
	
			<div class="col-md-2">
					<p class="title" >Social</p>
					<p class="sub">Blog</p>
					<p class="sub">Facebook</p>
					<p class="sub">Twitter</p>
					<p class="sub">YouTube</p>
					<p class="sub">Google+</p>
			</div>
		
			<div class="col-md-2">
					<p class="title">About us</p>
					<p class="sub">About us</p>
					<p class="sub">Career</p>
					<p class="sub">Terms & Conditions</p>
					<p class="sub">Privacy Policy</p>
					<p class="sub">Sitemap+</p>
			</div>
		

</div>

</div>

<hr>


<div class="container">

	<div class="copyright">
			<div class="col-md-8">
			<p>Copyright © Saltside Technologies</p>
			</div>

			<div class="col-md-4 logo">
			<img height="18" src="images/footer.png">
			</div>
	</div>
	<!--end of footr-->
</div>

</body>
</html>