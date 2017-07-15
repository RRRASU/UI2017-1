<?php
session_start();
unset($_SESSION);
session_destroy();

//destroying the session
header("Location: ../home.html");//redirecting to home page
exit;
?>
