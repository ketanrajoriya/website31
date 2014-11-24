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
<![endif]-->
</head>
<body class="page1" id="top">
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        
          <a href="index.html">


            <img src="images/logo.png" alt="Logo alt">


          </a>
        </h1>
      </div>
    </div>
  </div>
  


<?php
session_start();
error_reporting('ERROR');
$use=$_SESSION['user'];
$user=$_SESSION['usernam'];
$_SESSION['uid']=$use;

//$ketan=$_SESSION['ketan'];
//$_SESSION['log']=$ketan;

mysql_connect("localhost","root","");
mysql_select_db("medicare");

$sql="select * from doctor where emailid=$use";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	for($i=0;$i<6;$i++)
	{
		//echo"$r[$i]";
		}
		
	//echo"$r[2]";
	
	?>




  <!--==============================
              Stuck menu
  =================================-->
    
          <br><br>


              <?php
error_reporting('ERROR');
session_start();
$uname=$_SESSION['uname'];
/*if($_SESSION['uname']=="")
{
header("location:index.php");		
}*/
//echo $uname;
$od=opendir("profilepic/$uname");
while($res=readdir($od))
{
if($res!="." and $res!="..")
{
$res1=$res;
}
}

$path="profilepic/$uname/$res1";
$tn=file_get_contents("userdata/$uname/them");
$path1="theme/$tn";

?>
<?php
 echo "welcome <a href='doctorprofile.php'>&nbsp;&nbsp;&nbsp;$user</a>" ;
               echo "<a href='doctorsettings.php'>&nbsp;&nbsp;&nbsp;settings</a>"; 
             echo"<a href='doctorprofile.php'><img src='profilepic.jpg' align='right' height='70px'></a>"; ?>

<h1 class="doc" align="right "> DOCTOR'S PANEL </h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<div class="container">
      <div class="row">
        <div class="grid_12 ">
        <div class="navigation ">
<nav align="center">	
<ul>		
<li><a href="index.php">HOME</a></li>		
<li><a href="services.html">SERVICES</a>			
<ul>				
<li><a href="forum.html">ASK A QUESTION</a></li>				
<li><a href="consult.html">CONSULT A DOCTOR</a></li>				
<li><a href="#">VIDEO CONSULTATION</a>	</li>			
<li><a href="checkup.html">ANNUAL HEALTH CHECKUP</a></li>
</ul>
<li><a href="health.html">HEALTH</a>
<ul>
<li><a href="blog.html">BLOGS</a>
<li><a href="faq.html">FAQ'S</a></ul>					
<li><a href="about.html">ABOUT US</a></li>
<li><a href="contacts.html">CONTACT US</a>	</li>	
</ul>		
</nav>
<form id="searchbox" action=""><table>

<tr><td>Find a specialist Or Browse by Speciality<input type="text" id="search" onKeyUp="searc(this.value)" placeholder="Type here"    ></td></tr>

<tr><td id="main"></td></tr>

</table></form>
<br><br><br><br><br><br>
<div class="clear"></div>
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
  <a href="mypat.php" class="banner "><div class="maxheight">
   <div class="fa fa-lightbulb-o"></div>
   My Patients</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-cog"></div>Find Nearby Doctors</div>
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
</body>
</html>