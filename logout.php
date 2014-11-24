<?php
session_start();
$log=$_SESSION['log'];
session_unset($log);
header("location:index.php");
?>