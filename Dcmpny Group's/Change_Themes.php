<?php 
error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid']; 
include("Include_MColor.php")
?>


<?php
$mColors_Array=array(
"1 RED (fast)"=>"FF0000",
"2 DARK RED (OK red)"=>"8B0000",
"3 MAROON no humans"=>"800000",
"4 TOMATO (vitalizing)"=>"FF6347",
"5 VIOLET RED (crazy depression)"=>"D02090",
"6 PALE VIOLET RED not me"=>"DB7093",
"7 MEDIUM VIOLET RED heart & soul"=>"C71585",
"8 INDIAN RED universal consciousness"=>"CD5C5C",
"9 FIRE BRICK scotchguard"=>"B22222",
"10 SIENNA no-no"=>"A0522D",
"11 ORANGE RED team"=>"FF4500",
"12 ORANGE co-creator"=>"FFA500",
"13 DARK ORANGE magic color"=>"FF8C00",
"14 CORAL core of all"=>"FF7F50",
"15 LIGHT CORAL bit-by-bit"=>"F08080",
"16 PEACH flattery"=>"FEF0DB",
"17 PEACH PUFF ego cart"=>"FFDAB9",
"18 PAPAYAWHIP lower"=>"FFEFD5",
"19 YELLOW direction"=>"FFFF00",
"20 LIGHT YELLOW no shadow"=>"FFFFE0",
"21 LEMON CHIFFON snap"=>"FFFACD",
"22 GREEN YELLOW glass"=>"ADFF2F",
"23 SUNFLOWER mind control"=>"F6A600",
"24 GOLDENROD miracle worker"=>"DAA520",
"25 DARK GOLDENROD gold dust"=>"B8860B",
"26 LIGHT GOLDENROD controller"=>"EEDD82",
"27 LIGHT GOLDENROD YELLOW heavy hand"=>"FAFAD2",
"28 PALE GOLDENROD kick-ass"=>"EEE8AA",
"29 PINK sweet 16"=>"FFC0CB",
"30 LIGHT PINK hot pad"=>"FFB6C1",
"31 HOT PINK shorts"=>"FF69B4",
"32 FUCHSIA skipping"=>"FF00FF",
"33 DEEP PINK light bulb"=>"FF1493",
"34 MISTY ROSE shamanic heart"=>"FFE4E1",
"35 SALMON practicality"=>"FA8072",
"36 LIGHT SALMON practical one"=>"FFA07A",
"37 DARK SALMON completer"=>"E9967A",
"38 YELLOW GREEN clearer healer"=>"9ACD32",
"39 GREEN healing new growth"=>"008000",
"40 PALE GREEN flowing healer"=>"98FB98",
"41 LIGHT GREEN gentle healer"=>"90EE90",
"42 DARK GREEN deep healer"=>"006400",
"43 OLIVE keeps one alive"=>"808000",
"44 OLIVE DRAB intuitive healing 2x4"=>"6B8E23",
"45 DARK OLIVE GREEN armour penetrator"=>"556B2F",
"46 CHARTREUSE hereditary scissors"=>"7FFF00",
"47 FOREST GREEN all-encompassing healer"=>"228B22",
"48 GAINSBORO bodily fluid filter"=>"DCDCDC",
"49 SPRING GREEN no hassle healing"=>"00FF7F",
"50 MEDIUM SPRING GREEN get the job done healer"=>"00FA9A",
"51 LAWN GREEN eternal healer"=>"7CFC00",
"52 HONEYDEW union builder"=>"F0FFF0",
"53 MINT CREAM stop leakage"=>"F5FFFA",
"54 LIGHT SEA GREEN garbage collector"=>"20B2AA",
"55 MEDIUM SEA GREEN procurement truck"=>"3CB371",
"56 DARK SEA GREEN building inspector"=>"8FBC8F",
"57 LIME electrical conduit"=>"00FF00",
"58 LIME GREEN full gear"=>"32CD32",
"59 TEAL all gear"=>"008080",
"60 TURQUOISE pollutant chaser"=>"40E0D0",
"61 PALE TURQUOISE room clearer"=>"AFEEEE",
"62 MEDIUM TURQUOISE ghost busting"=>"48D1CC",
"63 DARK TURQUOISE boogie buster"=>"00CED1",
"64 AQUA pipeline"=>"00FFFF",
"65 MEDIUM AQUAMARINE Freud"=>"66CDAA",
"66 BLUE (communicate)"=>"0000FF",
"67 MEDIUM BLUE jump gap"=>"0000CD",
"68 DARK BLUE blow up"=>"00008B",
"69 LIGHT BLUE freedom"=>"ADD8E6",
"70 ALICE BLUE full thought"=>"F0F8FF",
"71 NAVY princess and the pea"=>"000080",
"72 NAVY BLUE graduate gene"=>"9FAFDF",
"73 AZURE no bump"=>"F0FFFF",
"74 CADET BLUE recovery"=>"5F9EA0",
"75 CYAN truth"=>"00FFFF",
"76 LIGHT CYAN discernment"=>"E0FFFF",
"77 DARK CYAN adios yesterday"=>"008B8B",
"78 SLATE BLUE ascended master telephone"=>"6A5ACD",
"79 LIGHT SLATE BLUE hidden needs"=>"8470FF",
"80 MEDIUM SLATE BLUE magnifying glass"=>"7B68EE",
"81 DARK SLATE BLUE cling free"=>"483D8B",
"82 POWDER BLUE good man"=>"B0E0E6",
"83 SKY BLUE good woman"=>"87CEEB",
"84 LIGHT SKY BLUE dust buster"=>"87CEFA",
"85 DEEP SKY BLUE nit picker"=>"00BFFF",
"86 MIDNIGHT BLUE toothache"=>"191970",
"87 STEEL BLUE boot camp"=>"4682B4",
"88 LIGHT STEEL BLUE closet"=>"B0C4DE",
"89 ROYAL BLUE dimension"=>"4169E1",
"90 CORNFLOWER BLUE rebel"=>"6495ED",
"91 DODGER BLUE invisible"=>"1E90FF",
"92 BLUE VIOLET mountain"=>"8A2BE2",
"93 INDIGO (LL carrier)"=>"4B0082",
"94 PURPLE (spirituality)"=>"800080",
"95 MEDIUM PURPLE human be-ing"=>"9370DB",
"96 LAVENDER you"=>"E6E6FA",
"97 LAVENDER BLUSH pocket"=>"FFF0F5",
"98 ORCHID alignment"=>"DA70D6",
"99 MEDIUM ORCHID stop the fits"=>"BA55D3",
"100 DARK ORCHID soul king"=>"9932CC",
"101 THISTLE eraser"=>"D88FD8",
"102 PLUM umph"=>"DDA0DD",
"103 VIOLET moderator"=>"EE82EE",
"104 DARK VIOLET bloom"=>"9400D3",
"105 MAGENTA nuts"=>"FF00FF",
"106 DARK MAGENTA sane"=>"8B008B",
"107 WHITE (connection)"=>"FFFFFF",
"108 ANTIQUE WHITE bully"=>"FAEBD7",
"109 FLORAL WHITE edge"=>"FFFAF0",
"110 GHOST WHITE independent"=>"F8F8FF",
"111 IVORY wisdom"=>"FFFFF0",
"112 NAVAJO WHITE agreement"=>"FFDEAD",
"113 SNOW"=>"FFFAFA",
"114 WHITE SMOKE freshener"=>"F5F5F5",
"115 GRAY intensity"=>"808080",
"116 DARK GRAY oh no!"=>"A9A9A9",
"117 DARK SLATE GRAY toe"=>"2F4F4F",
"118 DIM GRAY mirror"=>"696969",
"119 LIGHT GRAY dial"=>"D3D3D3",
"120 SLATE GRAY guest"=>"708090",
"121 LIGHT SLATE GREY detail"=>"778899",
"122 BROWN grounding"=>"A52A2A",
"123 CHOCOLATE"=>"D2691E",
"124 ROSY BROWN $ cha-ching $"=>"BC8F8F",
"125 SADDLE BROWN slide"=>"8B4513",
"126 SANDY BROWN boot"=>"F4A460",
"127 SEASHELL (flow)"=>"FFF5EE",
"128 BEIGE watch"=>"F5F5DC",
"129 LINEN thermostat"=>"FAF0E6",
"130 OLD LACE weird"=>"FDF5E6",
"131 WHEAT grease"=>"F5DEB3",
"132 BLANCHED ALMOND traveler"=>"FFEBCD",
"133 BISQUE builder"=>"FFE4C4",
"134 PERU good looks"=>"CD853F",
"135 MOCCASIN path"=>"FFE4B5",
"136 CORN SILK the big intention"=>"FFF8DC",
"137 BURLY WOOD flea market"=>"DEB887",
"138 KHAKI commando"=>"F0E68C",
"139 DARK KHAKI drill sergeant"=>"BDB76B",
"140 BLACK (absorbs)"=>"000000",
"141 PEARLESCENT (for highest good)"=>"FFE2B7",
"142 GOLD (God)"=>"FFD700",
"143 SILVER (fast flow)"=>"C0C0C0",
"144 COPPER (malleable)"=>"B87333");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="Images/SR_Logo.jpg" />
<title>Change Theme - ShopCircle</title>
</head>

<body>
<form>

	
<table width="100%" border="0">
<tr><td><hr />
<font style="font-family:Verdana, Geneva, sans-serif; font-size:18px; font-weight:500">Background Colors <input type="submit" value="Reset" name="Reset_mBackground" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600; margin-right:30px"/><hr />
</font></td></tr>
  
<tr><td>
<?php
foreach($mColors_Array as $mColor_Name=>$mColor)
{
	$i==1;
	$i++;
	$mecho_BG_Array="<a href='Inbox.php?goto_mbgcolor=$mColor'><input type='button' value='&nbsp;&nbsp;&nbsp;$i&nbsp;&nbsp;&nbsp;' style='background-color:#$mColor; color:#FFFFFF; font-size:12px; font-weight:600'/></a>";
	echo $mecho_BG_Array;
	}
?>
</td></tr>
  
<tr><td><hr />
<font style="font-family:Verdana, Geneva, sans-serif; font-size:18px; font-weight:500">Button Colors <input type="submit" value="Reset" name="Reset_mButton" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600; margin-right:30px" /><hr /></font></td></tr>

<tr><td>
<?php
foreach($mColors_Array as $mColor_Name=>$mColor)
{
	$j==1;
	$j++;
	$mecho_BG_Array="<a href='Inbox.php?goto_mbuttoncolor=$mColor'><input type='button' value='&nbsp;&nbsp;&nbsp;$j&nbsp;&nbsp;&nbsp;' style='background-color:#$mColor; color:#FFFFFF; font-size:12px; font-weight:600'/></a>";
	echo $mecho_BG_Array;
	}
?>
</td></tr>

<tr><td><hr />
<font style="font-family:Verdana, Geneva, sans-serif; font-size:18px; font-weight:500">Font Colors 
<input type="submit" value="Reset" name="Reset_mFont" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600; margin-right:30px"/><hr /></font></td></tr>
  
<tr><td>
<?php
foreach($mColors_Array as $mColor_Name=>$mColor)
{
	$k==1;
	$k++;
	$mecho_BG_Array="<a href='Inbox.php?goto_mfontcolor=$mColor'><input type='button' value='&nbsp;&nbsp;&nbsp;$k&nbsp;&nbsp;&nbsp;' style='background-color:#$mColor; color:#FFFFFF; font-size:12px; font-weight:600'/></a>";
	echo $mecho_BG_Array;
	}
?>
</td></tr>
</table>

</form>

</body>
</html>

