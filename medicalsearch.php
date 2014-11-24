<html>
<head>

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

</script></head>

<body>

<form><table>

<!--<tr><td><a href="#" onClick="showpage('link1.php')">link1</a></td></tr>

<tr><td><a href="#" onClick="showpage('link2.php')">link2</a></td></tr>

<tr><td><a href="#" onClick="showpage('link3.php')">link3</a></td></tr>-->

<tr><td>SEARCH<input type="text" onKeyUp="searc(this.value)"></td></tr>

<tr><td id="main"></td></tr>

</table></form>

</body>
</html>