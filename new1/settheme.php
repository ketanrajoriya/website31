<?php
session_start();
$uname=$_SESSION['uname'];
$them=$_REQUEST['them'];
$fp=fopen("userdata/$uname/them","w");
fwrite($fp,$them);
//header("location:home.php");
?>