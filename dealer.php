<?php
session_start();  
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['mobileno'])) {
$error = "Name or Mobileno is invalid";
}
else{
// Define $username and $password
$name = $_POST['name'];
$mobileno = $_POST['mobileno'];

if(isset($_SESSION["name"]))
{
    echo "yes";
}
else {echo "no";
$_SESSION["name"]=$name;
echo $_SESSION["name"];
}
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost:3307", "root", "", "newproject");
// SQL query to fetch information of registerd users and finds user match.

$query = "SELECT mobileno from request where mobileno=$mobileno AND authorize='yes'";
 
 
    if (mysqli_query($conn, $query)) {
  echo "Login successfull";

} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
  echo "Login Denied!";
}
mysqli_close($conn); // Closing Connection
}
}
?>



<!DOCTYPE html>
<html lang="en">
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
<link href="css/logstyle.css" rel="stylesheet" type="text/css" media="all" />
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
<link href="css/font-awesomee.css" rel="stylesheet">
	   

</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
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
                                                     
                                                        <li><a href="indexshop.html">Materials</a></li>
                                                              
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
                    
                    <h2 align="center"> Dealer login</h2>
    <div class=" w3l-login-form">
        <h3 align ="center">Login with your name and mobileno</h3>
        <form action="dealer2.php" method="POST" id="myform">

            <div class=" w3l-form-group" align ="center">
                <label>Name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name= "name" placeholder="name" id ="name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group" >
                <label>Mobile no:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="mobileno" placeholder="mobileno" id="mobileno" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
        <p class=" w3l-register-p">Don't have an account?<a href="#" class="register"> Register</a></p>
    </div>
   
                    </div>
            </div>
                    
                    
                    
                    
                  <!--web-fonts-->
          
<!--//header-->

<!--main-->

                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  

<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="footer-heading">
					<h3 class="agileinfo_header">Get in touch</h3>
					<p class="agileits_dummy_para"></p>
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
					<li><a href="services.html">Services</a></li>
					<li><a href="icons.html">Codes</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="agileinfo">
				<p>© 2017 Tract house . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
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
</script></body>
</html>