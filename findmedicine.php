<?php 
session_start();
error_reporting('ERROR');
session_unset($_REQUEST['uid']);
$servername = "localhost";
$username = "root";
$password = "";
$db="medicare";
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />

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
<![endif]-->
        <script type="application/javascript" language="javascript">
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
        <h1>
          <a href="index.php">


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


<nav align="center">	

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
<option value="cancer" >cancer</option>
<option value="headache">headache</option>
<option value="cancer" >cancer</option>
<option value="orthopaedic">orthopaedic</option>
<option value="cancer" >cancer</option>
<option value="orthopaedic">orthopaedic</option>
<option value="cancer" >cancer</option>
<option value="orthopaedic">orthopaedic</option>
</select>
<input type="submit" name="but" value="submit"></form>
  <form id="searchbox" action=""><table>

<tr><td>Find a specialist Or Browse by Speciality<input type="text" placeholder="Type here" name="searchbr"></td><td></td><td><input type="submit"name="searchk" value="search"></td></tr>

<tr><td id="main"></td></tr>

</table></form>

<?php
$searchbr=$_REQUEST['searchbr'];

if($_REQUEST['searchk'])
{
$sql = "select name,uses from medicine where name='$searchbr'";
	$result = $conn->query($sql);
	
	if($result ->num_rows > 0)
	{
		echo"<table border='1'>";
		echo"<br> <tr><td> &nbsp;&nbsp;&nbsp;flirst name &nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;last name</td>";
		$i=0;
		$a=array();
		while($row= $result->fetch_assoc())
		{
			
			echo "<br><tr><td> &nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;".$row["uses"]."<a href='doctprof.php'>".$_SESSION['doctemail']."</a></td>";
			$i++;
			}
			echo"</table>";
			
			$count=count($a);
			for($i=0;$count;$i++)
			{
			echo"hello $a[$i]";	
			}
			}
}
?>
<?php
$uiid=$_SESSION['uid'];
//$uiid="ketan@gmail.com";


if($_REQUEST['but'])
{

$select=$_REQUEST['select'];

{
$sql = "select name,uses from medicine where uses='$select'";
	$result = $conn->query($sql);
	
	if($result ->num_rows > 0)
	{
		echo"<table border='1'>";
		echo"<br> <tr><td> &nbsp;&nbsp;&nbsp;flirst name &nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;last name</td>";
		$i=0;
		$a=array();
		while($row= $result->fetch_assoc())
		{
			
			echo "<br><tr><td> &nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;".$row["uses"]."<a href='doctprof.php'>".$_SESSION['doctemail']."</a></td>";
			$i++;
			}
			echo"</table>";
			
			$count=count($a);
			for($i=0;$count;$i++)
			{
			echo"hello $a[$i]";	
			}
			}
}}
?>


<div class="clear"></div>
     </div>       
    <div class="clear"></div>  
   </div>
 </div> 
 </div> <br><br><br><br><br><br><br><br><br><br>
  
  <section class="page1_header">
 <div class="container">
      <div class="row">
     <div class="grid_4">
      <a href="doctorslogin.php" class="banner "><div class="maxheight">
    <div class="fa fa-globe">
</div>
Doctor's Login
</div>
   </a>
  <a href="patientlogin.php" class="banner "><div class="maxheight">
   <div class="fa fa-lightbulb-o"></div>User Login </div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-cog"></div>Find Doctors</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-briefcase"></div>Video call</div>
          </a>
        </div>
        <div class="grid_5">
          <h2>Strong <br> medical<br> Safe</h2>
          
        </div>
      </div>
    </div>
  </section>
</header>
<div class="block-1">
  <div class="container">
    <div class="row">
      <div class="grid_3">
        <div class="block-1_count">10</div>
        Years of <br> Experience
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count">30</div>
        Successful <br> Projects
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count">20</div>
        Partner <br> Projects
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <a href="#" class="support"><img src="images/support.png" alt=""></a>
      </div>
    </div>
  </div>
</div>
<!--=====================
          Content
======================-->
<br>

<img src="imagesone.jpg" name="slide" width="100%" height="250" />
<script>
var step=1;
function slideit()
{
	if(!document.images)
	return 
	document.images.slide.src=eval("image"+step+".src")
	if(step<3)
	step++
	else
	step=1
	setTimeout("slideit()",2500)
}
slideit()
</script>



<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_10 preffix_1 ta__center">
        <div class="greet">
          <h2 class="head__1">
            Welcome
          </h2>
          <p>Read more about the <a href=" http://blog.templatemonster.com/free-website-templates/" rel="nofollow" class="color1">freebie</a> here. <br> Go to TemplateMonster.com and find more <a href="http://www.templatemonster.com/properties/topic/business-services/" rel="nofollow" class="color1">goodies</a> of this kind </p>
          Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet site amet est vel, commodo venenatis eros. Fusce adipiscing quam id risus sagittis, non consequat lacus interdum. nulla, eu sodales arcu. Quisque viverra nulla nunc, eu ultrices libero ultricies eget. Phasellus accumsan 
        </div>
      </div>
    </div>
  </div>
 
  <!--
<form id="searchbox" action="">
    Find a specialist Or Browse by Speciality<input id="search" type="text" placeholder="Type here">
    <input id="submit" type="submit" value="Search">
</form>
-->


  <article class="content_gray">
    <div class="container">
      <div class="row">
        <div class="grid_7">
          <h3>Doctor's panel</h3>
          <div class="block-2">
            <img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Experience</a></div>
              <p>Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert varius augue, eu consectetur ligulaam dui eros dertoli.</p>Fusce adipiscing quam id risus sagittis, non consequat lacus interdum. Proin ut tinciduntol nulla, eu sodales vertomin
              <br>
              <a href="#" class="link-1">more</a>
            </div>
          </div>
          <div class="block-2">
            <img src="images/page1_img2.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <div class="text1"><a href="#"></a></div>
              <p>Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert varius augue, eu consectetur ligulaam dui eros dertoli.</p>Fusce adipiscing quam id risus sagittis, non consequat lacus interdum. Proin ut tinciduntol nulla, eu sodales vertomin
              <br>
              <a href="#" class="link-1">more</a>
            </div>
          </div>
        </div>
        <div class="grid_4 preffix_1">
          <h3>Testimonials</h3>
          <blockquote class="bq1">
            <p>“Curabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am est vel commodo venenatisipiscing... ”</p>
            <span>Liza Jons</span>
          </blockquote>
          <blockquote class="bq1">
            <p>“Burabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am ast vel commodo venenatisipiscino... ”</p>
            <span>Mark Brown</span>
          </blockquote>
        </div>
      </div>
    </div>
  </article>
  <div class="container">
    <div class="row">
      <div class="grid_5">
        <h4>About Us</h4>
        <img src="images/page1_img3.jpg" alt="" class="img_inner fleft">
          <p>Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert arius augue, eu consectetur </p>
          <p class="offset__1">Eligulaam dui eros dertolisce dertolo adipiscing quam id risus sagittis</p>
          Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert rius augue, eu consectetur larem dui eros dertolisce dertolo 
      </div>
      <div class="grid_4">
        <h4>Solutions</h4>
        <ul class="list-1">
          <li><a href="#">Vivamus at magna non nunc tristique </a></li>
          <li><a href="#">Aliquam nibh ante, egestas id</a></li>
          <li><a href="#">Ommodo luctus libero</a></li>
          <li><a href="#">Faucibus malesuada faucibusonec </a></li>
          <li><a href="#">Laoreet metus id laoreet</a></li>
          <li><a href="#">Jalesuadaorem ipsum dolor sit ame</a></li>
        </ul>
      </div>
      <div class="grid_3">
        <h4>Contact Info</h4>
        <address>
          <ul class="cont_address">
            <li>8901 Marmora Road, Glasgow, D04 89GR</li>
            <li>+1 (800) 123 9876</li>
            <li><a href="#">info@demolink.org</a></li>
            <li><a href="#">www.demolink.org</a></li>
          </ul>
        </address>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <div class="copyright"><span class="brand">Stable</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">f5 students team</a></div>
        </div>
      </div>
    </div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>