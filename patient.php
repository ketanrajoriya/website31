<?php
session_start();
error_reporting('ERROR');
$use=$_SESSION['user'];
//$user=$_SESSION['ketan'];
//$_SESSION['uid']=$;

$ketan=$_SESSION['ketan'];
//$_SESSION['log']=$ketan;
$_SESSION['uid']=$ketan;
//echo"hello $ketan";
mysql_connect("localhost","root","");
mysql_select_db("medicare");

$sql="select * from patient where emailid=$ketan";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	
		
//$_SESSION['uid1']=$r[2];
//echo"$r[2]";
	
	?>


<html>
<head>
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script type="application/javascript">
var image1=new Image();
image1.src="imagesone.jpg";
var image2=new Image();
image2.src="imagestwo.jpg";
var image3=new Image();
image3.src="imagesthree.jpg";
</script>

</head>
<body>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]--><script type="application/javascript" language="javascript">
function showpage(page)

{
	var xmlhttp;

if (window.XMLHttpRequest)
  
  {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
  
  xmlhttp=new XMLHttpRequest();
  
  }

else

  {
	  // code for IE6, IE5
  
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  
  }
  
 
xmlhttp.open("GET",page,true);
xmlhttp.send();
xmlhttp.onreadystatechange=function()
 
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
 
    {
    document.getElementById("main").innerHTML=xmlhttp.responseText;
}
  }
}

function searc(name)

{

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();

  }

else

  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }	

xmlhttp.open("GET","search.php?name="+name,true);
xmlhttp.send();
xmlhttp.onreadystatechange=function()

  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {
    document.getElementById("main").innerHTML=xmlhttp.responseText;
    }
  }
  }

</script>
</head>
<body class="page1" id="top">
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        
          <a href="patient.php">


            <img src="images/logo.png" alt="Logo alt">


          </a>
        </h1>
      </div>
    </div>
  </div>
 
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
              <?php
 echo "welcome  &nbsp<a href='patientprofile.php'>$use &nbsp&nbsp&nbsp&nbsp</a>" ;
               echo "<a href='patientsettings.php'>settings</a>"; 
             echo"<a href='patientprofile.php'><img src='profilepic.jpg' align='right' height='70px'>"; ?>
             
<form action="inbox.php">
<input type="submit" value="notifications">
</form>

<h1 class="doc"> PATIENT'S PANEL</h1>
<br><br><br>
<nav>	
<ul>		
<li><a href="index.php">HOME</a></li>		
<li><a href="services.html">SERVICES</a>			
<ul>				
<li><a href="forum.php">FORUM</a></li>				
<li><a href="consult.html">CONSULT A DOCTOR</a></li>				
<li><a href="#">VIDEO CONSULTATION</a>				
<li><a href="checkup.html">ANNUAL HEALTH CHECKUP</a>
</ul>
<li><a href="health.html">HEALTH</a>
<ul>
<li><a href="blog.html">BLOGS</a>
<li><a href="faq.html">FAQ'S</a></ul>					
<li><a href="about.html">ABOUT US</a></li>
<li><a href="contacts.html">CONTACT US</a>	</li>	
</ul>		
</nav>

<form>
<select name="select"><option value="" selected>select</option>
<option value="cardiologist" >cardiologist</option>
<option value="orthopadic">orthopadic</option>
<option value="cardiologist" >cardiologist</option>
<option value="orthopaedic">orthopaedic</option>
<option value="cardiologist" >cardiologist</option>
<option value="orthopaedic">orthopaedic</option>
<option value="cardiologist" >cardiologist</option>
<option value="orthopaedic">orthopaedic</option>
</select>
<input type="submit" name="but" value="submit"></form>
  <form id="searchbox" action=""><table>

<tr><td>Find a specialist Or Browse by Speciality<input type="text" placeholder="Type here" name="searchbr"></td><td></td><td><input type="submit"name="searchk" value="search"></td></tr>
	<tr><td id="main"></td></tr>

</table></form>

<div class="clear"></div>
     <?php
	 
$servername = "localhost";
$username = "root";
$password = "";
$db="medicare";
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$select=$_REQUEST['select'];
echo"$select";
if($_REQUEST['but'])
{
	$sql = "select firstname,lastname,emailid from doctor where speciality='$select'";
	$result = $conn->query($sql);
	
	foreach($result as $val)
	{
		if($val!="")
		{
		echo"<table border='1'>";
		echo"<br> <tr><td> &nbsp;&nbsp;&nbsp;flirst name &nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;last name</td>";
			
			echo "<br><tr><td> &nbsp;&nbsp;&nbsp;".$val["firstname"]."&nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;".$val["lastname"]."";
			echo '<a href="doctprof.php?content='.$val['emailid'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view profile</a></td>';
			
			echo"</table>";
			
			}
	}
	}
?>
<?php

$uiid=$_SESSION['uid'];

$select=$_REQUEST['select'];
 $searchbr=$_REQUEST['searchbr'];
if($_REQUEST['searchk'])
{
	$sql = "select firstname,lastname,emailid from doctor where firstname='$searchbr'";
	$result = $conn->query($sql);
	
	foreach($result as $val)
	{
		if($val!="")
		{
		echo"<table border='1'>";
		echo"<br> <tr><td> &nbsp;&nbsp;&nbsp;flirst name &nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;last name</td>";
					
			echo "<br><tr><td>&nbsp;&nbsp;&nbsp;".$val["firstname"]."&nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;".$val["lastname"]."";
			echo '<a href="doctprof.php?content='.$val['emailid'].'">    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view profile</a></td>';
			echo"</table>";
			}
			else echo" there is no doctor registered with this name in our website";
	}
	}?>
</div>       
    <div class="clear"></div>  
   </div>
 </div> 
 </div> 
  </section>

  <section class="page1_header">
 <div class="container">
      <div class="row">
     <div class="grid_4">
      <a href="chat2.html" class="banner "><div class="maxheight">
    <div class="fa fa-globe">
</div>
Online Chat
</div>
   </a>
  <a href="mydoct.php" class="banner "><div class="maxheight">
   <div class="fa fa-lightbulb-o">
</div>
My doctors </div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-cog">
</div>
Find Nearby Doctors
</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-briefcase">

</div>
Video call
</div>

          </a>
        </div>
        <div class="grid_5">
          <h2>Strong <br> medical<br> Safe</h2>
          
        </div>
      </div>
    </div>
  </section>
</header>

</body>
</html>