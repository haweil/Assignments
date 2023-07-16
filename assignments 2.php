<?php
echo  (int)15.2 + (int)14.7 + (10.5 + 10.5);// 50
echo "<br>";
echo gettype((int)(15.2 + 14.7) + (int)(10.5 + 10.5)); // Integer
?>
<br>
<!--=========================================================================-->

<?php 
var_dump(100);
echo "<br>";
echo gettype (100);
echo"<br>";
echo get_debug_type(100);
echo "<br>";
// Method One var_dump(100) // int (100)
// Method Two ;gettype(100); //integer
// Method Three => Optional echo get_debug_type(100) // int
?>
<!--======================================-->

<?php 
echo "Hello \"Elzero\" \\\\ \"\"\" we love \"$\$php\"" ;
// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
?>
<!--=======================================-->

<?php 
//nl2br
echo nl2br("
We
Love  
Elzero 
Web 
School");
echo "<br>";
/* Needed Output
We
Love
Elzero
Web
School
*/
?>
<!--=======================================-->

<?php 
// now doc and nl2br 
echo nl2br (<<< 'ehere'
"Hello "'Elzero'" 
We Love $Programming$
Languages Specially "PHP" 
ehere);
?>
<!--=======================================-->

<?php 
echo "<br>";
$something = "Programming";
echo <<< code
Hello \PHP\
We Love $something
code;
/* Needed Output
 Hello \PHP\ We Love Programming 
*/
?>
<!--=======================================-->

<?php
echo "<br>";
echo (bool) "Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");
/* Needed Output
1
integer
*/
?>
<!--=======================================-->

<?php 
echo '<br>';
echo '<br>';
echo '<pre>';
print_r ([
 "Front end" => [
    "HTML",
     "Css",
    "JS" => [
        "VUE JS" => [
            2 =>"V2",
            3 => "V3",
        ],
            0=> "Reactjs",
            1=> "Svelte",  
        ]
  ],
    "Back -End" => [
     "PHP",
     "MYSQL",
     "Security"
    ],
    0 =>"Git",
    1 =>"Github",
    "Teasting" => [
    "Unit Testing",
    "End To End",
    "Integration"
    ]
 ]);
echo '</pre>';
?>