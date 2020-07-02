<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
// Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
        $conn = mysqli_connect("localhost:3307", "root", "", "newproject");
// SQL query to fetch information of registerd users and finds user match.
        $query = "SELECT username,password from admin where username=? AND password=? LIMIT 1";


        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
        if ($stmt->fetch()) { //fetching the contents of the row 
//$_SESSION['login_user'] = $username; // Initializing Session
            header("location:admin/panel.php"); // Redirecting To Profile Page
            echo"Logged in successfully";
        } else {
            echo"Wrong credentials";
            header("location:index.php");
        }
    }
    mysqli_close($conn); // Closing Connection
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SoftEzi Solutions</title>
<?php include('head.php'); ?>
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
                                <li><a href="register.php">Register</a></li>
                                <li><a href="login.php">Materials</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
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

                <h2 align="center"> Login Form</h2>
                <div class=" w3l-login-form">
                    <!--<h3 align ="center">Login Here</h3>-->
                    <form action="admin/panel.php" method="POST" id="myform">

                        <div class=" w3l-form-group">
                            <label>Username:</label>
                            <div class="group">
                                <i class="fas fa-user"></i>
                                <input type="text" class="form-control" name= "username" placeholder="Username" id ="username" required="required" />
                            </div>
                        </div>
                        <div class=" w3l-form-group" >
                            <label>Password:</label>
                            <div class="group">
                                <i class="fas fa-unlock"></i>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password" required="required" />
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



<?php include ('footer.php'); ?>
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
                            jQuery(document).ready(function ($) {
                                $(".scroll").click(function (event) {
                                    event.preventDefault();
                                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                                });
                            });
        </script></body>
</html>