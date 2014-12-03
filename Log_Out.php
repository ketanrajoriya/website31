<script>
<?php
session_start();
session_unset($uid);
header("location:index.php");
?>


alert("You are Successfully Logged Out..");
</script>
