<?php
session_start();
$_SESSION = [];
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['level']);
session_destroy();
header("Location:index.php");
exit;
?>