<!DOCTYPE html>
<html lang="en">
<head>
<title>Discussion Forum</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="chatstyle.css">


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
<body>
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.html">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="services.html">Services</a></li>
               <li class="current"><a href="forum.html">Forum</a></li>   
               <li><a href="blog.html">Blog</a></li>
               <li><a href="contacts.html">Contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
  </section>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Online Discussion Forum</h3>
        <div class="blog">
          <time datetime="2014-01-01"><span class="count">02</span><strong>July</strong>2014</time>
          <img src="images/dna.jpg" height="250" width="450" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <a href="#" class="comment"><span class="fa fa-comments"></span><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = " SELECT count(*) from response where topic_no='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count = 0;
    while($row = $result->fetch_assoc()) {
       foreach($row as $cname){
           if($row == 0) continue;
        else {print "$cname";}
           
    }
    }

} else {
    echo "0";
}
$conn->close();
?> </a>
            <p><span class="fwn"><a href="#">Ebola : The Deadly Menace</a></span><em>Posted by <a href="#">Admin</a></em></p>Ebola virus disease (EVD; also Ebola hemorrhagic fever [EHF]), or simply Ebola, is a disease of humans and other primates caused by ebolaviruses (EBOV). Signs and symptoms typically start between 2 days and 3 weeks after contracting the virus as a fever, sore throat, muscle pain and headaches. Then, vomiting, diarrhea and rash usually follow, along with decreased function of the liver and kidneys. At this time some people begin to bleed both internally and externally. Death, if it occurs, follows typically 6 to 16 days after symptoms appear and is often due to low blood pressure from fluid loss.
            <br>
            <a href="disc_01.php" class="link-1">Join Discussion</a>
          </div>
        </div>
        <div class="blog">
          <time datetime="2014-01-01"><span class="count">05</span><strong>July</strong>2014</time>
          <img src="images/heart.jpg" height="195"  alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <a href="#" class="comment"><span class="fa fa-comments"></span> <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = " SELECT  count(*) from response where topic_no='2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
       foreach($row as $cname){
        /*if($row=='1'){echo "$cname";}
           else continue;*/
           echo "$cname";
    }
    }
   
} else {
    echo "0";
}
$conn->close();
?></a>
            <p><span class="fwn"><a href="#">Hypertension : The Silent Killer</a></span><em>Posted by <a href="#">Admin</a></em></p>Hypertension (HTN) or high blood pressure, sometimes called arterial hypertension, is a chronic medical condition in which the blood pressure in the arteries is elevated. Blood pressure is summarised by two measurements, systolic and diastolic, which depend on whether the heart muscle is contracting (systole) or relaxed between beats (diastole). 
            <br>
            <a href="disc_02.php" class="link-1">Join Discussion</a>
          </div>
        </div>
        <div class="blog">
          <time datetime="2014-01-01"><span class="count">12</span><strong>July</strong>2014</time>
          <img src="images/pills.jpg" height="142" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <a href="#" class="comment"><span class="fa fa-comments"></span> <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = " SELECT count(*) from response where topic_no='3'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
       foreach($row as $cname){
        print "$cname";
           
    }
    }
    
} else {
    echo "0";
}
$conn->close();
?></a>
            <p><span class="fwn"><a href="#">Drug Abuse</a></span><em>Posted by <a href="#">Admin</a></em></p>Substance abuse, also known as drug abuse, is a patterned use of a substance (drug) in which the user consumes the substance in amounts or with methods which are harmful to themselves or others. The exact cause of substance abuse is impossible to know because there is not just one direct cause. However substance abuse and addiction is known to run in families.
            <br>
            <a href="disc_03.php" class="link-1">Join Discussion</a>
          </div>
        </div>
        <div class="blog">
          <time datetime="2014-01-01"><span class="count">22</span><strong>July</strong>2014</time>
          <img src="images/box-img2.jpg" alt="" height="290" class="img_inner fleft">
          <div class="extra_wrapper">
            <a href="#" class="comment"><span class="fa fa-comments"></span> <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = " SELECT count(*) from response where topic_no='4'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count = 0;
    while($row = $result->fetch_assoc()) {
       foreach($row as $cname){
        print "$cname";
           
    }
    }
    
} else {
    echo "0";
}
$conn->close();
?></a>
            <p><span class="fwn"><a href="#">Modern HealthCare</a></span><em>Posted by <a href="#">Admin</a></em></p>Access to health care varies across countries, groups, and individuals, largely influenced by social and economic conditions as well as the health policies in place. Countries and jurisdictions have different policies and plans in relation to the personal and population-based health care goals within their societies. Health care systems are organizations established to meet the health needs of target populations. Their exact configuration varies between national and subnational entities. In some countries and jurisdictions, health care planning is distributed among market participants, whereas in others, planning occurs more centrally among governments or other coordinating bodies. In all cases, according to the World Health Organization (WHO), a well-functioning health care system requires a robust financing mechanism; a well-trained and adequately-paid workforce; reliable information on which to base decisions and policies; and well maintained health facilities and logistics to deliver quality medicines and technologies.
            <br>
            <a href="disc_04.php" class="link-1">Join Discussion</a>
          </div>
        </div>
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
          <div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">SHREYANS</a></div>
        </div>
      </div>
    </div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>