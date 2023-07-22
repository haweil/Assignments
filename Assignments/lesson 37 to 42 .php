<?php
//1
$index =10 ;
while ($index)
{
    echo $index;
    $index--;
    echo "<br>" ;
}
?>
<!--=========================================================================================-->
<br>

<?php
//2
 $index = 0 ; 
 while ($index<20) :
   $index= $index+2 ;
   echo "$index<br>";
 endwhile
?>
<?php
$index = 0 ; 
  DO {
   $index= $index+2 ;
   echo "$index<br>";
  } while ($index<20);
?>
<?php 
  for ($index=0; $index<20;)
  {
      $index=$index+2;
      echo "$index <br>" ;
  }
?>
<!--=========================================================================================-->
<br>

<?php 
//3
$num = 2;
$i=3;
while ($num < 520) {
    if ($num <3)
    {
      $num-- ;
      echo " $num <br>";
    }
    $num +=$i;
    echo "$num <br>";
    $i =$i*2 ;
    if ($num == 382)
    {
      break ;
    }
}
/* Needed Output
1 4 10 22 46 94 190 382
*/
?>
<!--=========================================================================================-->
<br>

<?php
//4
for ($a =10 ; $a>=3 ; $a--)
{
  if ($a==10)
  {
    echo "$a<br>";
    continue;
  }
  echo "0$a <br>";
}
?>
<!--=========================================================================================-->
<br>

<?php
// 5 
// ignore first index start from 1 
// is_numeric to print number only
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i=1; $i<7; $i++)
  {
  if (is_numeric ($mix[$i]))
   {
      echo "$mix[$i] <br>"; 
    }  
  } 
?>
<!--=========================================================================================-->
<br>

<?php
//6
// for each (array as key => value)
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach ($money as $name => $price)
{
echo "The Name Is $name And I Need $price Pound From Him <br>";
}
?>
<!--=========================================================================================-->
<br>

<?php
// 7
// is_string tp print string only 
$mix = [1, 2, "A", "B", "C", 3, 4];
$x =0;
$y=0;
for($i=0; $i<count($mix); $i++)
{
  if (is_numeric($mix [$i]))
  {
    echo "$mix[$i] <br>";
    $x++;
  }
  if (is_string($mix[$i]))
  {
    $y++;
  }
}
echo "$x Number printed <br>";
echo "$y Letters Ignored";
/* Output
1 2 3 4
"4 Numbers Printed"
"3 Letters Ignored"
*/
?>
<!--=========================================================================================-->
<br>

<?php
//8
// %=0 يقبل القسمه علي 2 
$start = 0;
$mix = [1, 13, 12, 20, 51, 17, 30];
 for ($i=0; $i<7; $i++)
 {
  if($mix[$i]%2==0)  
  {
    echo $mix[$i]/2 ;
    echo "<br>";
  }
 }
?>
<!--=========================================================================================-->
<br>

<?php
// 9
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for ($i = 1; $i<$help_num; $i++) 
{
  echo $names[$i]."<br>";
}
/* Output
"Sayed"
"Osama"
*/
?>
<!--=========================================================================================-->
<br>

<?php
// 9
// array_reverse to reverse the index of array
$i=0;
$nums = [2, 4, 5, 6, 10 ];
$reversedArray = array_reverse($nums);
foreach ($nums as $value)
{
   echo "$value +"; 
   echo "$reversedArray[$i] = ";
   echo "$value"+"$reversedArray[$i]"; 
   $i ++;
   echo "<br>" ;
}
/*Output
"2 + 10 = 12"
"4 + 6 = 10"
"5 + 5 = 10"
"6 + 4 = 10"
"10 + 2 = 12"
*/
?>