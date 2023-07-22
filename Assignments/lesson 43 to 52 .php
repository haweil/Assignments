<?php
// 1 
// check by if 
function say_hello ($something,$Gender)
{
  if ($Gender=="Male")
  echo "Hello mr $something <br>";
  else if ($Gender =="Female")
  echo "Hello Miss $something <br>";
  else 
  echo "Hello $something";
}
say_hello("mohamed","Male");
say_hello("Aya","Female");
say_hello("osama","");
?>

<!--================================================================================================-->
<br>

<?php
//2
function get_arguments() {
  // Get all the function arguments as an array
  $args = func_get_args();
  // Concatenate the elements of the array into a single string
  $all = implode(" ", $args);
  return $all;
}
// Test the function
echo get_arguments("Hello", "Elzero", "Web", "School"); // Output: Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // Output: I Love PHP
?>

<!--================================================================================================-->
<br>

<?php
//3
 function sum_all(...$nums)
 {
  $result =0 ;
  foreach ($nums as $num)
  {
   if ($num !=5 && $num!=10)
   {
    $result+=$num;
   }
   else if ($num==5)
   {
    $result =$result ;
   }
   else
   {
    $num =$num +10;
    $result+=$num;
   }
  }
  echo "<br>";
  return $result ;
 }
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
?>

<!--================================================================================================-->
<br>

<?php 
//4 
// is_int to check if the arg is integer
// is_float to check if the arg is float and convert to int before multiply 
function multiply(...$nums)
{
  $result =1;
  foreach ($nums as $num)
  {
   
   if (is_int($num))
    {
        $result*=$num;
    }
    else if(is_float($num))
    {
      $num=(int)$num;
      $result*=$num;
    }
  }
 echo "<br>";
 return  $result ; 
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
?>

<!--================================================================================================-->
<br>

<?php 
//5
function check_status($a, $b, $c) {
  // Find the age from the given arguments
  $age = is_numeric($a) ? $a : (is_numeric($b) ? $b : $c);
  // Find the name from the given arguments
  $name = is_string($a) ? $a : (is_string($b) ? $b : $c ) ;
  // Find the hire status from the given arguments
  $hire = ($a===true ||$b===true ||$c===true) ? true : false;
  // Create the message based on the hire status
  $message = "Hello " . $name . ", Your Age Is " . $age . ", You Are ";
  $message .= $hire ? "Available For Hire" : "Not Available For Hire";
  /*if ($hire)
  {
    $message ="Hello".$name. "Your Age Is".$age. "You Are Available For Hire";
  }
  else
  {
    $message ="Hello".$name."Your Age Is".$age."You Are Not  Available For Hire";
  }
  */
  return $message;
}
// Test the function
echo check_status("Osama", 38, true) . "<br>";
echo check_status(38, "Osama", true) . "<br>";
echo check_status(true, 38, "Osama") . "<br>";
echo check_status(false, "Osama", 38) . "<br>";
?>

<!--================================================================================================-->
<br>

<?php 
//6
function calculate ($a ,$b , $c ="a") // c = default variable 
{
  if ($c =="a" || $c=="add")
  {
    $result = $a+$b;
    echo "<br>";
    return $result;
  }
  else if ($c =="s" || $c=="subtract")
  {
    $result = $a-$b;
    echo "<br>";
    return $result;
  }
  else if ($c =="m" || $c=="multiply")
  {
    $result = $a *$b;
    echo "<br>";
    return $result;
  }
  else 
  {
    echo'<br>';
    echo "Error The operation is not found";
  }
}
// Needed Output
echo calculate(10, 20); // 30 // default variable
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
?>

<!--================================================================================================-->
<br>

<?php 
// 7 
function calculate(int $num_one, int $num_two) : float {
  return $num_one + $num_two;
}

echo calculate(20, 10); // 30
echo "<br>";
echo gettype(calculate(20, 10)); // Double
?>

<!--================================================================================================-->
<br>

<?php 
// 8 
// ${$message} = $Hello 
 $message = "Hello"; 
${$message} = function ($name) use ($message)
{
return "$message $name";
};
echo $Hello("Osama"); // Hello Osama
// Another solution
$message = "Hello"; 
${$message} = fn($name)=>"$message $name";
echo $Hello("Osama"); // Hello Osama
?>

<!--================================================================================================-->
<br>

<?php 
// Write Function Content Here
$greet =function ()
{
  return "Greetings";
};
$greet = fn ($name) => "Greating ";
// Needed Output
echo $greet("Osama"); // Greetings

?>