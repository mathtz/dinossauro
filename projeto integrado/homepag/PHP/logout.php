<?php 
session_start();
session_unset();
session_destroy();
header('location: /projeto integrado/homepag/home.php');
exit;
?>