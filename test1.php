<?php
$hour=date("G");
echo date("T");
if($hour>=18)
	echo"こんばんちわ。";
else
	echo"こんにちわ。";
echo date("n");
echo "月もおしまいです";
echo "<br/>";
$ar=array("tokyo","osaka","fukuoka","nagasaki","miyagi","hiroshima","kagoshima");
for($i=1;$i<=6;$i++){
	echo $ar[$i]." ";}
?>