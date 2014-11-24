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
          <a href="index.php">
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
               <li><a href="index.php">Home</a></li>
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
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Modern HealthCare</h3>
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT comment, time  FROM response where topic_no='4'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Commented at " . $row["time"]. "<br><h4> ".$row["comment"]."</h4><br>";
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>
          <h5>Enter Your Opinion</h5>
        
                        <form action="getcom_04.php" method="POST">
                        <p>
                            <textarea id="comment" name="comment" cols="120" rows="10"></textarea>
                        </p>    
                        
                            <input height="100" id="submit" type="submit" name="submit" value="Submit">
                            
                        </form>
        <div class="blog">
          </div>
        </div>
      </div>
        </div>
    </section>
    </body>
</html>
