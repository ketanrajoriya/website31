<?php
session_start();
session_unset($_REQUEST['uid']);
header("location:Index.php");
?>