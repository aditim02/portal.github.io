<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['area']) || empty($_POST['no']) || empty($_POST['type'])) {
$error = "Please enter all the details";
}
else{
// Define $username and $password
$area = $_POST['area'];
$no = $_POST['no'];
$type = $_POST['type'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost:3307", "root", "", "newproject");
// SQL query to fetch information of registerd users and finds user match.
$query = "INSERT into worker (area,no,type) VALUES ('$area','$no','$type')";


if (mysqli_query($conn, $query)) {
  echo "Your form has been recored successfully";
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
			<h1>Workers <label>Point</label> </h1>
		</div>
		<div class= "agile-voltsub">
			<h2>Form</h2>
                        <form action= "worker.php" method= "POST" >
					<div class= "agile-name" >
						<p>Area of Work</p>
						<input type= "text" name="area" id="name" placeholder= "enter specific area of work" required= ""/>
					</div>
					<div class= "clear"> </div>
					<div class= "agile-email" >
						<p> Total number of workers</p>
                                                <input type= "number" name="no" id= "no" placeholder= "enter no of workers" required= ""/>
					</div>
					<div class="clear"></div>
					<div class="agile-address">
						<p>Type of workers</p>
                                                <input type="text" name="type" id="type" placeholder="enter type of workers" required="" />
					</div>
					<div class= "clear" > </div>
					<input type="submit" value="submit" name="submit" />
				</form>
		</div>
	
	</section>                    
          </div>
            </div>
</body>
</html>
