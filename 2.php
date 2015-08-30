<?php
$a=0.7;
$b=1-0.3;
var_dump($a==$b);
echo'<br/>';
$a=0.3;
$b=1-0.7;
var_dump($a==$b);
echo'<br/><br/>';
$a='PHP';
$b='MYSQL';

echo "i like $a and $b";
echo'<br/><br/>';
echo 'i like $a and $b';
echo'<br/><br/>';
echo 'i like "$a" d "$b"';
echo'<br/><br/>';
echo "i like '$a' and '$b'";
echo'<br/><br/>';

echo "i like {$a}ood and {$b}ood";
echo'<br/><br/>';
echo "<a href='http://www.163.com' onclick='javascript:alert(\"hello\")'/>please click me.</a>";

echo'<br/><br/>';
echo decbin(101);
echo'<br/><br/>';
echo decoct(101);
echo'<br/><br/>';echo'<br/><br/>';
$a=5; 
$b=10;
$$a=$b;
$b=$a;
$a=$$a;
echo $b.'---'.$a;
echo'<br/><br/>';echo'<br/><br/>';

echo'<br/><br/>';
echo "\x60";
var_dump("\x60");
echo'<br/><br/>';

for ($i=33; $i<=126; $i++)
{   
   // var_dump($i);
     $d="0$i";
	 $c="0x$i";
	
	// var_dump($c);
	 echo chr($i);
	 echo'--';
	 echo "\\0$i";
	// var_dump("\\$i");
	 //echo'--';
	 //echo chr($c);
	// print "$c";
	 echo "<br/>";
	}
?>