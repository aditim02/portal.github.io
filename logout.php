
<?php
session_start();
session_unset();
if(session_destroy()) // Destroying All Sessions {
header("Location: index.html");
// Redirecting To Home Page
?>