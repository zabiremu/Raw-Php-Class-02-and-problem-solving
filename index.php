<?php 
// statement
var_dump("Jhon Doe <br>");
echo "<br>";
var_dump(24,"<br>");
echo "<br>";
// statement
$fname = "Robart";
$lname = "bruce";
$age = 34;
printf("My name is %s %s . I am %d years old.", strtoupper($fname), ucwords($lname), $age);

//Arithmetic operator
/**
 * 1. +
 * 2. -
 * 3. /
 * 4. *
 * 5. %
 * 5.**
 */
/**
 * operation $num1 + num2
 * operands  $num
 * operator +,-,*,/,%,**
 */
echo "<br>";
echo "<br>";
$num1 = 4;
$num2 = 2;

echo $num1 + $num2;
echo "<br>";
echo "<br>";
echo $num1 - $num2;
echo "<br>";
echo "<br>";
echo $num1 * $num2;
echo "<br>";
echo "<br>";
echo $num1 / $num2;
echo "<br>";
echo "<br>";
echo $num1 % $num2;
echo "<br>";
echo "<br>";
echo $num1 ** $num2;
echo "<br>";
echo "<br>";

// Assignment operator
$x = 10;
$x += 1;
echo $x;
echo "<br>";
echo "<br>";
$y = 20;
$y -= 1;
echo $y;
echo "<br>";
echo "<br>";
$z = 16;
$z *= 2;
echo $z;
echo "<br>";
echo "<br>";
$e = 16;
$e /= 2;
echo $e;
echo "<br>";
echo "<br>";
$f = 16;
$f %= 2;
echo $f;
echo "<br>";
echo "<br>";
$d = 16;
$d **= 2;
echo $d, "<br><br>";
// const
define("PI","Zabir Raihan <br> <br>");
echo PI;
printf("My name is %s", PI);

?>