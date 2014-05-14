<?php
$hour=date("G");
echo date("T");
if($hour>=18)
	echo"‚±‚ñ‚Î‚ñ‚¿‚íB";
else
	echo"‚±‚ñ‚É‚¿‚íB";
echo date("n");
echo "Œ‚à‚¨‚µ‚Ü‚¢‚Å‚·";
echo "<br/>";
$ar=array("tokyo","osaka","fukuoka","nagasaki","miyagi","hiroshima","kagoshima");
for($i=1;$i<=6;$i++){
	echo $ar[$i]." ";}
?>