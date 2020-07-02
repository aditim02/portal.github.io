<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['discount'])) {
$error = "Please enter all the details";
}
else{
// Define $username and $password
$name = $_POST['name'];
$price = $_POST['price'];
$discount = $_POST['discount'];


// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost:3307", "root", "", "newproject");
// SQL query to fetch information of registerd users and finds user match.


if(isset($_POST['submit'])){
     $file_name= $_FILES['image']['name'];
     $file_type=$_FILES['image']['type'];
      $file_size =$_FILES['image']['size'];
     $file_tem_loc=$_FILES['image']['tmp_name'];
     $file_store ="upload/".$file_name;
     
     if(move_uploaded_file($file_tem_loc, $file_store))
     {
          $sql = "INSERT INTO shop (name,image,price,discount) VALUES ('$name','$file_name','$price','$discount')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
         else {
            echo "Failed to upload file.";
        }

     }
     
 }
mysqli_close($conn); // Closing Connection
}
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

<link href="css/bootstrap1.min.css" rel='stylesheet' type='text/css' />
<link href="css/astyle.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome1.css" rel="stylesheet"> 
<link href="css/animate1.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
	<script>
		 new WOW().init();
	</script>
        <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        
        
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Varela+Round&subset=hebrew" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>  
<link href="//fonts.googleapis.com/css?family=Heebo:300" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Exo" rel="stylesheet">


</head>
<body class="sticky-header left-side-collapsed"  onload="initMap()">
     
    <section>
       
    <!-- left side start-->
    
		<div class="left-side sticky-left-side">
                 
			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">Admin <span>Panel</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="index.html"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
						<li class="menu-list">
							<a href="#"><i class="lnr lnr-cog"></i>
								<span>Requests</span></a>
								<ul class="sub-menu-list">
                                                                    <li><a href="admin5.php">User</a> </li>
                                                                        <li><a href="admin.php">Dealer</a></li>
                                                                        <li><a href="admin6.php">Contractor</a></li>
								</ul>
						</li>
                                                <li><a href="indexshop.html"><i class="lnr lnr-spell-check"></i> <span>Material</span></a></li>
                                                <li><a href="addproduct.php"><i class="lnr lnr-pencil"></i> <span>Uploaded Tender</span></a></li>
                                                <li><a href="admin3.php"><i class="lnr lnr-menu"></i> <span>User requirement</span></a></li> 
                                                <li><a href="admin8.php"><i class="lnr lnr-menu"></i> <span>Material request</span></a></li> 
                                                <li><a href="displaystatus.php"><i class="lnr lnr-menu"></i> <span>Dealer Status</span></a></li> 
						<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>Tender</span></a>
							<ul class="sub-menu-list">
                                                            <li><a href="etender.php">E-Tender</a> </li>
                                                                <li><a href="itender.php">I-tender</a></li>
							</ul>
						</li>      
						<li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Workers Point</span></a>  
							<ul class="sub-menu-list">
                                                            <li><a href="worker1.php">Workers form</a> </li>
                                                            <li><a href="available.php">Availability </a> </li>
							</ul>
						</li>
                                                <li><a href="admin7.php"><i class="lnr lnr-pencil"></i> <span>Uploaded Tender</span></a></li>
                                                <li><a href="admin4.php"><i class="lnr lnr-select"></i> <span>Upload tender</span></a></li>
<!--						<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 
							<ul class="sub-menu-list">
								<li><a href="sign-in.html">Sign In</a> </li>
								<li><a href="sign-up.html">Sign Up</a></li>
								<li><a href="blank_page.html">Blank Page</a></li>
							</ul>
						</li>-->
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
                
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
							</li>
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
										<script src="js/classie.js"></script>
										<script src="js/uisearch.js"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 8 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p><span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
                                                                        <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>
						<div class="clearfix"> </div>
					</div>            	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
	
<!-- banner -->
	<div class="banner">
		<div class="container">              

	<section class= "agile-volt">
            
		<div class= "agile-voltheader">
                    <h1>Add <label>Products</label></h1>
		</div>
		<div class= "agile-voltsub">
			<h2>Sign Up</h2>
                        <form action= "addproduct.php" method= "POST" enctype="multipart/form-data" >
					<div class= "agile-name" >
						<p>Name of the product</p>
						<input type= "text" name="name" id="name" placeholder= "enter product name" required= ""/>
					</div>
					<div class= "clear"> </div>
					<div class= "agile-email" >
						<p> Enter image file name</p>
                                                <input type= "file" name="image" id= "image" placeholder= "Add product image" required= ""/>
					</div>
					<div class="clear"></div>
					<div class="agile-address">
						<p>Price</p>
                                                <input type="number" name="price" id="price" placeholder="Enter price" required="" />
					</div>
					<div class= "clear" > </div>
					<div class= "agile-city" >
						<p>Discount</p>
                                                <input type="number" name="discount" id="discount" placeholder="Enter discount percentage" required=""/>
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
					<p class="agileits_dummy_para">Fusce elementum sem ut ex condimentum facilisis.</p>
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
<script src="js/jquery.nicescroll1.js"></script>
<script src="js/scripts1.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap1.min.js"></script>
</body>
</html>
