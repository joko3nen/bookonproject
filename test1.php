<?php
$hour=date("G");
echo date("T");
if($hour>=18)
	echo"����΂񂿂�B";
else
	echo"����ɂ���B";
echo date("n");
echo "���������܂��ł�";
echo "<br/>";
$ar=array("tokyo","osaka","fukuoka","nagasaki","miyagi","hiroshima","kagoshima");
for($i=1;$i<=6;$i++){
	echo $ar[$i]." ";}
?>