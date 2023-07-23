<?php
//1
// int to covert 2.5 to 2 
//$str[(int)$num_two] = $let_two; = $str [2] ='z'
$num_one = -1;
$num_two = 2.5;
$let_one = "o";
$let_two = "z";
$str = "El%er0";
// Write Your Code Here
$str[(int)$num_two] = $let_two;
$str[$num_one] = $let_one;
echo $str; // Elzero
?>

<!--================================================================================================-->
<br>

<?php
//2
// uc first => frist letter is capital
// strtolower => all letter is small
// strrev => revers the word
$str = "Orezle";
echo ucfirst(strtolower(strrev($str)));
// Elzero
?>

<!--================================================================================================-->
<br>

<?php
//3
// str_repeat and chunk_split
 $str = 'aAa';
 $num = 3;
 $char = "_";
 $str=chunk_split($str,$num,$char);
echo strtolower(str_repeat($str,$num));
?>

<!--================================================================================================-->
<br>

<?php
//4
$str = "<div><b>Elzero</b></div>";
// Replace the opening and closing <di>v tags with an empty string
$str = str_replace(array("<div>", "</div>"), "", $str);
echo ($str);
?>

<!--================================================================================================-->
<br>

<?php
//5
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str,$e,$four);
echo"<br>";
echo substr_count($str,$e);
// 1
// 2
?>

<!--================================================================================================-->
<br>

<?php
// 6
// built in function = implode
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode ("",$chars);
/* Output
"Elzero"
*/
?>

<!--================================================================================================-->
<br>

<?php
//7
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$output="";
foreach ($chars as $char) :
      if (!is_int($char))
      $output.= $char;
endforeach;
        echo ucfirst(strtolower($output));
/* Output
 Elzero
*/
?>