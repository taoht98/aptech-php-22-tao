<?php
echo "<a href=\"./\">BACK</a>";
/* 7. --- OPERATOR ---
 *
 * Operators are used to perform operation on variables and values.
 *
 * Group of operators:
 * Arithmetic operators
 * Assignment operators
 * Comparison operators
 * Increment/Decrement operatos
 * Logical operators
 * String operators
 * Array operatos
 *
 */
echo "<h1>7. OPERATORS</h1>";
/*
 * EXERCISE 1 : Using each of operators at least once.
 */
/*
 * SUGGESTION :
 * Can be watch more at : https://www.w3schools.com/php/php_operators.asp
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
// Arithmetic Operators
/*
$x = 4;
$y = 2;
echo $x + $y; // Addition
echo $x - $y; // Subtraction
echo $x * $y; // Multiplication
echo $x / $y; // Division
echo $x % $y; // Modulus
echo $x ** $y; // Exponentiation
*/
//Assignment Operators
/*
$x = 10;
$x += 2; // Addition, x = x + 2;
echo x;
*/
//Comparation Operators
/*
$x = 5;
$y = "5";
var_dump($x === $y); // Identical, returns false because types are not equal
$x = 5;
$y = "5";
var_dump($x !== $y); // Not identical, return true because types are not  equal
*/
/* Spaceship
$x = 5;
$y = 10;
echo ($x <=> $y); // return -1 because $x < $y
$x = 10;
$y = 10;
echo ($x <=> $y); // return 0 because $x = $y
$x = 10;
$y = 5;
echo ($x <=> $y); // return 1 because $x = $y
*/
// Increment/Decrement Operators
/*
$x = 5;
echo ++$x; // = 6, Pre-increment, Increment $ by one, then return $x
echo $x++; // = 5, Post-increment, Return $x, then increment $x by one
*/
// Logical 
/* 
$x = 5;
$y = 10;
if ($x = 5 and $y = 10){ // (&&), True
    echo "Hello World"; 
} 
if ($x = 5 or $y = 2){   // (||), True
    echo "Hello World";
}
if ($x = 5 xor $y = 2){  // True because either $x or $y is true, but not both
    echo "Hello World";
}
$if ($x !=3){            // True
    echo "Hello World";
}
*/
// String Operators
/*
$x = "Xin";
$y = "chào!";
echo $x . $y; // Concatenation
$x .= $y;     // Concatenation assignment
echo $x;
*/
// Array Operators
/*
$x = array("a" => "ga", "b" => "cho");
$y = array("c" => "vit", "d" => "heo");
print_r($x + $y);   // Union
var_dump($x == $y); // Equality, false
var_dump($x === $y);// Identity, false
var_dump($x != $y); // Inequality, true
var_dump($x <> $y); // Inequality, true
var_dump($x !== $y);// Non-idetity, true

