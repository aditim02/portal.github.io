<?php 
$conn = mysqli_connect("localhost:3307", "root", "", "newproject");
 $sql = "SELECT * FROM file";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result,MYSQLI_ASSOC);

 if(isset($_POST['upload'])){
     $file_name= $_FILES['file']['name'];
     $file_type=$_FILES['file']['type'];
     $file_size =$_FILES['file']['size'];
     $file_tem_loc=$_FILES['file']['tmp_name'];
     $file_store ="upload/".$file_name;
     
     if(move_uploaded_file($file_tem_loc, $file_store))
     {
          $sql = "INSERT INTO file (name, size, downloads) VALUES ('$file_name', $file_size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
         else {
            echo "Failed to upload file.";
        }

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


<style>
    
table#t01 {
      background-color: "white";
}
</style>

</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
                                    <h1><a class="navbar-brand" href="index.html">SoftEzi</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							
<!--                                                         <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="register.php">Dealer</a></li>
									<li><a href="cregister.php">Contractor</a></li>
                                                                        <li><a href="uregister.php">User</a></li>

      								</ul>
							</li>-->
                                                                                                                
                                                       <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tender<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="contractor2.php">I-tenders</a></li>
									<li><a href="worker.php">Workers point</a></li>
                                                                        <li><a href="contractor2.php">E-tenders</a></li>
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
                                                        <li><a href="logout.php">Logout</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
          
                 </div>                
   
            
                                    <div class="container">
                                        <section class= "agile-volt">

                                        <div class= "agile-voltheader">
                                                <h1>Upload <label>Tender</label> files</h1>
                                        </div>
                                        <div class= "agile-voltsub">
                                            <form action="upload.php" method="POST" enctype="multipart/form-data">
                                                <label>Uploading files</label>
                                                <p><input type="file" name="file"/></p>
                                                <p><input type="submit" name="upload" value="upload"></p>


                                            </form>
                                    </div>

                                    </div>
           
        
            
                                                <div class="container">
                                                <div class="modal-content">
                                                <h2 align="center">Tender results</h2>
                                                <form action="admin.php" method="POST"> 
                                                <table class="table table-striped">
                                                <font size="2" face="Courier New" colour="black" >
                                                <thead class="thead-dark">
                                                       <tr class="table-striped">
                                                       <th>Tender Number</th>
                                                       <th><b>Tender Name</b></th>
                                                       <th>Contractor Name</th>
                                                     </tr>
                                                     <?php
                                               //session_start(); // Starting Session
                                               // mysqli_connect() function opens a new connection to the MySQL server.
                                               $conn = mysqli_connect("localhost:3307", "root", "", "newproject");
                                               // SQL query to fetch information of registerd users and finds user match.
                                               $query = "SELECT * from tresult";
                                               if ($result = mysqli_query($conn, $query)) {
                                               $cnt=1;
                                               while($row=mysqli_fetch_object($result))
                                               {
                                               ?>
                                               <tr>
                                               <td><?php echo $row->tno;?></td>
                                               <td name="tname"><?php echo $row->name;?></td>
                                               <td><?php echo $row->cname?></td>
                                                
                                                   </form>

                                               </tr>

                                                <?php
                                               $cnt=$cnt+1;
                                                }
                                               mysqli_close($conn);
                                               }// Closing Connection
                                               ?>
                                       </div>     

</div>                    
</div>


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
