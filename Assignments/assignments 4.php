<?php 
// Replace ? With Arithmetic Operators
echo (10*20) + (15%3) + (190+10) -400 ;
?>
<!--=========================================================================-->
<br>
<?php
$a = "10";
echo ($a);
echo"<br>";
echo gettype (+$a); //method 1
echo"<br>";
echo ($a);
echo"<br>";
echo gettype((int)$a); //method 2
echo"<br>";
echo ($a);
echo"<br>";
echo gettype((integer)$a);//method 3
echo"<br>";
var_dump( (int)$a); //method 4
echo"<br>";
echo ($a);
echo"<br>";
echo gettype (intval($a));//method 5
echo"<br>";
/* Needed Ouput
10
"integer"
10
"integer"
10
"integer"
*/
?>
<!--=========================================================================-->
<?php
$a = 10;
$b = 20;
echo ($b-$a )/-10
// Needed Output -1
?>
<!--=========================================================================-->
<br>

<?php
$a = 10;
$b = 20;
$c = 15;
var_dump($a<$b); // True
echo "<br>";
var_dump($c>$a); // True
echo "<br>";
var_dump($a<=$b); // True
echo "<br>";
var_dump($a !=$b); // True
echo "<br>";
var_dump($a<>$c); // True
echo "<br>";
var_dump($a != $c); // True
echo "<br>";
var_dump(gettype($a) == gettype($b)); // True
echo "<br>";
var_dump(gettype($a) === gettype($b)); // True
echo "<br>";
var_dump(gettype((float) $a) !== gettype($b)); // True
?>
<!--=========================================================================-->
<br>

<?php 
$points = 10;
$points +=3 ;
echo $points; // 13
echo "<bR>";
$points -=5 ;
echo $points; // 8;
?>
<br>
<!--=========================================================================-->
<?php 
$e = "Elzero";
$r = "Web";
$z = "School";
// Method One
$d =$e." ".$r. " ".$z;
// Method Two
$d = "{$e} {$r} {$z} ";
// Method Three
$d = "$e $r $z ";
// Method Four
$d = "$e {$r} {$z} ";

echo $d; // Elzero Web School
?>
<br>
<!--=========================================================================-->
<?php
$a = 10;
$b = 20;

echo $a + $b * $a + $b + $a * $a * $a; // 10000 
?>
<br>
<!--=========================================================================-->
<?php 
// Code 1
$g = @$k or die("Custom Error");
// Code 2
$f = @file("Not_A_File");
// Code 3
@include("Not_A_File") ;
?>