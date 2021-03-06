<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['mobileno']) ||empty($_POST['email'])) {
$error = "Please enter all the details";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost:3307", "root", "", "newproject");
// SQL query to fetch information of registerd users and finds user match.
$query = "INSERT into user (username,password,mobileno,email) VALUES ('$username','$password','$mobileno','$email')";


if (mysqli_query($conn, $query)) {
  echo "Your signup has been recored successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}     
}

mysqli_close($conn); // Closing Connection
}
?>

<!DOCTYPE html>

<head>
<title>SoftEzi Solutions</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
<script type="application/x-javascript">
    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0); }, 
    false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Varela+Round&subset=hebrew" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>  
<link href="//fonts.googleapis.com/css?family=Heebo:300" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Exo" rel="stylesheet">


</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<h1><a class="navbar-brand" href="index.html"><span>SoftEzi </span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							
                                                         <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="register.php">Dealer</a></li>
									<li><a href="cregister.php">Contractor</a></li>
                                                                        <li><a href="uregister.php">User</a></li>

      								</ul>
							</li>
                                                                                                                
                                                       <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Forms<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
<!--									<li><a href="etender.php">E-tenders</a></li>-->
									<li><a href="worker.php">Workers point</a></li>
      								</ul>
							</li>
                                                     
                                                        <li><a href="materials.php">Materials</a></li>
                                                              
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="login.php">Admin</a></li>
									<li><a href="dealer.php">Dealer</a></li>
                                                                        <li><a href="user.php">User</a></li>
                                                                        <li><a href="contractor.php">Contractor</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
                

	<section class= "agile-volt">
            
		<div class= "agile-voltheader">
			<h1>User <label>Sign Up</label> form</h1>
		</div>
		<div class= "agile-voltsub">
			<h2>Sign Up</h2>
                        <form action= "uregister.php" method= "POST" >
					<div class= "agile-name" >
						<p>username</p>
						<input type= "text" name="username" id="username" placeholder= "enter your name" required= ""/>
					</div>
					<div class= "clear"> </div>
					<div class= "agile-email" >
						<p> password</p>
                                                <input type= "password" name="password" id= "password" placeholder= "Your password" required= ""/>
					</div>
					<div class="clear"></div>
					<div class="agile-address">
						<p>Mobile No</p>
                                                <input type="number" name="mobileno" id="mobileno" placeholder="Your mobile no" required="" />
					</div>
					<div class= "clear" > </div>
					<div class= "agile-city" >
						<p>Email Address</p>
                                                <input type="email" name="email" id="license" placeholder="Your email id" required=""/>
					</div>
					<div class="clear"></div>
					
					<input type="submit" value="submit" name="submit" />
				</form>
		</div>
	
	</section>                    
          </div>
            </div>
<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="footer-heading">
					<h3 class="agileinfo_header">Get in touch</h3>
					<p class="agileits_dummy_para">Join Us.</p>
				</div>
				<div class="footer-icons">
					<ul>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
						<li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
						<li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a><span>Google +</span></li>
						<li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a><span>Dribbble</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- copyright -->
<div class="copyright">
		<div class="container">
			<div class="w3agile-list">
				<ul>
					<li><a href="index.html">Home</a></li>
					
					
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="agileinfo">
				<p>© 2020 SoftEzi. All Rights Reserved.</p>
			</div>
		</div>
	</div>
<!-- //copyright -->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/
								
		$().UItoTop({ easingType: 'easeOutQuart' });
								
		});
</script>
<!-- //here ends scrolling icon -->
</body>
</html>
