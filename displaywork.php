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
    </div>                
                                        <div class="events">
                                             
                                       <div class="container">
                                          <div class="modal-content">
                                      <h2 align="center">Availability of workers</h2>
                                      <form action="displaywork.php" method="POST"> 
                                      <table class="table table-striped">
                                          <font size="2" face="Courier New" colour="black" >
                                        <thead class="thead-dark">
                                            <tr class="table-striped">
                                            <th>ID</th>
                                            <th><b>Area of workers</b></th>
                                            <th>Total number of workers</th>
                                            <th>Type of workers</th>
                                            <th>Charges</th>
                                            <th>Total cost</th>
                                          </tr>
                                          <?php
                                    
                                    // mysqli_connect() function opens a new connection to the MySQL server.
                                    $conn = mysqli_connect("localhost:3307", "root", "", "newproject");
                                    // SQL query to fetch information of registerd users and finds user match.
                                    $query = "SELECT * from available";
                                    if ($result = mysqli_query($conn, $query)) {
                                    $cnt=1;
                                    while($row=mysqli_fetch_object($result))
                                    {
                                    ?>
                                    <tr>
                                    <td><?php echo $row->id;?></td>
                                    <td name="cname"><?php echo $row->area;?></td>
                                    <td><?php echo $row->no;?></td>
                                    <td><?php echo $row->type;?></td>
                                    <td><?php echo $row->charges;?></td>
                                    <td><?php echo $row->cost;?></td>  

                                    </tr>
                                      </form>
                                     <?php
                                    $cnt=$cnt+1;
                                     }
                                    mysqli_close($conn);
                                    }// Closing Connection
                                    ?> 
                                        </thead>
                                        </font>  
                                      </table>
                                    </div>
                                           </div>
       </div>                                         
  </div>
</body>
</html>
