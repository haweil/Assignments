<?php
$a = 100;
$b = 200;
$c = 100;
if ( $b>$a && $a===$c && $a+$c===$b )
{
    echo "Yes";
}
?>
<!--=================================================================================================================-->
<br>

<?php
// Test Case 1
$a = 100;
$b = 200;
$c = 300;
if ($b&&$c > $a)
{
    echo  "A Is Not Larger Than B Or C";
}
// A Is Not Larger Than B Or C
echo "<br>";
// Test Case 2
$a = 200;
$b = 100;
$c = 300;
if ($a>$b) echo "A Is Larger Than B" ;
// A Is Larger Than B
echo "<br>";
// Test Case 3
$a = 200;
$b = 200;
$c = 100;
 if ($a>$c) echo "A Is Larger Than c";
// A Is Larger Than c
?>
<!--=================================================================================================================-->
<br>

<?php
$admins = ["Osama", "Ahmed", "Sayed"];
if ($_SERVER["REQUEST_METHOD"] === "POST" )
{
  echo " The Request Method Is $_SERVER[REQUEST_METHOD], And Username Is $_POST[username]";
  $username = $_POST["username"];
  if (in_array($username, $admins))
  {
    echo "<h2>{$username} is an admin .</h2>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>

<body>
    <form action method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>

</html>
<!--=================================================================================================================-->
<br>

<?php 
$a = 30;
$b = 20;
$c = 10;

echo ($a+$b===$c) ? "A + B = C " :  (($a+$c===$b) ?  "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End")) ;
// Output
?>
<!--=================================================================================================================-->
<br>

<?php 
$name = "Osama";
$age = 40;
$country = "Egypt";
if ($age > 18 && gettype($name) === "string" &&$country === "Egypt" ) {
  echo "The Age Is Good To Go <br>";
  echo "The Name Is Good To Go <br>";
  echo "The Country Is Good To Go <br>";
 }
/*Needed Output
"The Age Is Good To Go"
"The Name Is Good To Go"
"The Country Is Good To Go"
*/
?>
<!--=================================================================================================================-->
<br>

<?php 
$genre = "Hack And Slash";
  switch ($genre) 
  {
    case ("RPG") :
        echo "I Recommend Ys Games";
        break ; 
    case ("Hack And Slash") :
        echo "I Recommend Castlevania Games"; 
        break ; 
    case ("FPS") :
        echo "I Recommend Uncharted Games";
        break ;         
    
    case ("Platform") :
        echo "I Recommend Megaman Games";
        break ;
    case ("Puzzle") :
        echo "I Recommend Megaman Games";
        break ;    
    default : 
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
  }
?>
<!--=================================================================================================================-->
<br>

<?php 
$num_one = 23;
$num_two = 5;
$op = "/";
  switch ($op) {
     case "+":
         echo $num_one+ $num_two;
         break;
     case "-":
        echo $num_one - $num_two;
         break;
    case "*":
        echo $num_one * $num_two;
        break;
    case "/":
       echo  (int)($num_one / $num_two);
       echo "<br>";
       echo $num_one % $num_two;
        break;
        default:
        echo "Unknown Operation";
            break;
    }
?>
<!--=================================================================================================================-->
<br>

<?php
$day = "Wed"; 
if ($day == "Sat" || $day =="Sun" || $day == "Mon")
  {
    echo "We Are Open All The Day";
  }
  else if ($day == "Tue" ||$day =="Wed")
  {
    echo "We Are Open From 08:12";
  }
  else if ($day == "Thu" || $day == "Fri")
  {
    echo "We Are Closed";
  }
  else
  {
    echo "Unknown Day";
  }
?>