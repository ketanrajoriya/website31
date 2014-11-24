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
<?php
error_reporting('ERROR');
$name=$_REQUEST['name'];
//$name="ketan";
mysql_connect("localhost","root","");
mysql_select_db("medicare");
if($name!="")
{
$sql="select * from doctor where firstname like '$name'";
$ms=mysql_query($sql);
while($res=mysql_fetch_array($ms))
{
if($res[1]=="")
{
echo "name not found";		
}
else
{	

echo "$res[1] $res[4]"."<br>";
//echo ."<br>";
}
}
}
?>
<input type="text" name="name"  onKeyUp="searc(this.value)" />
