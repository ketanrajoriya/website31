<?php 
error_reporting("ERROR");
$od=opendir("addpic/ketanraj");
$count=0;
while($res=readdir($od))
{
if($res!="." and $res!="..")
{
if($count%4!=0)
{
echo "<a href='settheme.php?them=$res'><img src='theme/$res' height='150' width='150'></a>";
}
else
{
echo "<br><a href='settheme.php?them=$res'><img src='theme/$res' height='150' width='150'></a>";		
}
$count++;
}
}
?>
