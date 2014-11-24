<?php
error_reporting("ERROR");

$connection = mysql_connect("localhost","root","");
mysql_query("create database if not exists commdb");
mysql_query("create table if not exists response (comment TEXT (10000) , time DATETIME, topic_no NUMBER)");
$db = mysql_select_db("commdb",$connection);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
       $comment = $_POST['comment'];
    if($comment != '')
    {
        $query = mysql_query("insert into response (comment , time, topic_no) values ('$comment', NOW() ,'3')", $connection);
        echo "<script>alert('Response recorded..Thanks!!!'); window.open('disc_03.php','_self');</script>";
       
    }
    
    else { echo "Something Went Wrong :( <br> Please try again!!!"; }
}
 //header("location:Forum.html");
mysql_close($connection);
?>