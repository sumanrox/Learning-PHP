<?php

#PHP IS A LOOSELEY TYPED LANGUAGE SO BE CAREFULL WITH IT

#Printing can be done with Echo and Print
echo "Hello World</br>";
print "Just another Print</br>";
#Varialbles starts with $variablename
$var = "red";
echo "I Love" , $var;

#JavaScript inside Php

function test(){
    echo "Bye Bye!!";
}
test();

#Basic Arethmetic
#Notice that comma is used to seperate

$x=10;
$y=5;
echo "</br>", $x+$y;

/*The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):
    */
function test2()
{
    global $x , $y;
    echo "</br>", $x+$y;
}
test2();

#operators

function ops()
{
    # x = 10 y = 5 
    global $x, $y;
    echo "</br>",++$x;
    echo "</br>",--$y;
}
ops();
echo "</br>";
#Var_Dump returns data type and value

var_dump($x);

#Arrays

$arrays = array("Volvo", "BMW", "Toyota");
echo "</br>";
var_dump($arrays);

#Objects in  PHP

# In PHP, an object must bve explicitly declared

class Car{
    function Car(){
        $this->model="VW";
    }
}

//create an object

$herbie =new Car();

echo "</br>",$herbie->model;

# PHP String functions

# Get Length of a string

echo "</br>",strlen("Hello World");

#Count the words in a string

echo "</br>", str_word_count("Hello World");

#Reverse a String

echo "</br>", strrev("Hello World"), "</br>";

# Search for a specific  Text in a String, returns the index of start of the string 

echo strpos("Hello World", "World"), "</br>"; //Case Sensitive

# PHP Contants is an identifier for a simple value, the value cannot be changed during the script

#A Valid constant names starts with a letter or underscore (no $ sign before the constant)

#To Create a Constant PHP we use define() function

#Syntax define(name, value, case-insensitive)
#These Constants are by default Global
/*
name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
*/

define("GREETING", "Welcome to the Universe");
echo GREETING,"</br>";

# Exponation Syntax : **
$a=5;
$b=2;
echo $a**$b,"</br>"; //Will result in 25

# === Identical
/*
$x === $y	Returns true if $x is equal to $y, and they are of the same type
*/

/*
If elseif else Statement

Syntax
------------
if (condition) {
    code to be executed if this condition is true;
} elseif (condition) {
    code to be executed if this condition is true;
} else {
    code to be executed if all conditions are false;
}
*/

/* Swith Case */
$n="red";
switch ($n){
    case "red":
    echo "Hello</br>";
    break;
    case "blue":
    echo "Hello Unviverse</br>";
    break;
    case "green":
    echo "Bye World</b>";
    break;
    default:
    echo "No Match</b>";
}

?>