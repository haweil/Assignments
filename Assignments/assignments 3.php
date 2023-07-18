<?php $username = "Elzero Courses"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?=$username?></title>
</head>

<body>
    <h1><?= $username ?></h1>
    <p>Here In <?= $username ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?= $username ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?= $username ?></footer>
</body>

</html>
<!--=============================================================================================================-->

<?php
$name = "elzero";
$$name = "Web"; 
echo $$name; //1
echo "<br>" ;
echo "${$name}"; //2
echo "<br>"; 
echo $elzero ; //3
echo "<br>";
echo "Web"; //4
echo "<br>";
echo ${$name} ;//5
?>
<!--=============================================================================================================-->
<br>

<?php
$a = 200;
$b = &$a; // Assign by Reference
$a = 100; //b= 100 
echo $b; // 100
?>
<!--=============================================================================================================-->
<br>

<?php
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SYSTEM_ROOT'];
echo "<br>";
echo $_SERVER['Open_SSL_Configuration'];
?>
<!--=============================================================================================================-->

<?php
// List of Reserved Words 
/*
break -  die() -  clone
abstract - global - continue
case
*/
?>
<!--=============================================================================================================-->
<br>
<?php 
echo __LINE__; // 71
echo "<br>";
echo __FILE__ ;
echo "<br>";
echo __DIR__;
?>