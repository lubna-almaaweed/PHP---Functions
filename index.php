<?php
//Q1:
echo "QUESTION (1) " . "<br>" . " -1. Write a function to calculate the factorial of a number (a non-negative integer).
The function accepts the number as an argument" . "<br>" . "*The answer is :" . "<br>";
function fac($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * fac($n-1);
    }
	}
print_r(fac(4)."\n"). "<br>" ;
///////////////////////////////////////////////////////////////////////
//Q2:
echo "QUESTION (2) " . "<br>" . " -Write a function to check whether a number is prime or not.
Note: A prime number (or a prime) is a natural number greater than 1 that has no
positive divisors other than 1 and itself" . "<br>" . "*The answer is :" . "<br>";
function isPrime($num) {
    if(1 >= $num || (2 != $num && 0 == $num % 2)) {
    return false;
    }
    if(2 == $num) {
    return true;
    }
    $intLimit = ceil(sqrt($num));
    for($i = 3; $i <= $intLimit; $i+=2) {
    if(0 == $num % $i) {
    return false;
    }
    }
    return true;
    }
    print_r(isprime(7)."\n"). "<br>" ;
///////////////////////////////////////////////////////////////////////
//Q1:
echo "QUESTION (3) " . "<br>" . " -Write a function to reverse a string." . "<br>" . "*The answer is :" . "<br>";
function rev($string){
    $length = strlen($string); 
    for ($i=($length-1) ; $i >= 0 ; $i--)   
    {  
      echo $string[$i];  
    } 
} 
 print_r(rev("lubna")). "\n" ;

///////////////////////////////////////////////////////////////////////
//Q1:
echo "QUESTION (4) " . "<br>" . " -Write a function to sort an string array depending on the alphabetical order ." . "<br>" . "*The answer is :" . "<br>";
function printArray ($arr) 
{ 
    foreach ($arr as $value) { 
        echo "$value "; 
    } 
} 
  
  
$arr = array ("lubna", "amjed", "yousef", "maaweed", "class A"); 
  $standard_result = $arr; 
sort($standard_result); 
echo "Array after Standard sorting: "; 
printArray($standard_result); 
  $natural_result = $arr; 
natcasesort($natural_result); 
echo "\nArray after Natural sorting: "; 
printArray($natural_result); 
///////////////////////////////////////////////////////////////////////
//Q1:
echo "QUESTION (5) " . "<br>" . " - Write a PHP function that checks whether a string is all lowercase.
" . "<br>" . "*The answer is :" . "<br>";
function isLower($str1)
   {
    for ($n = 0; $n < strlen($str1); $n++) {
	      if (ord($str1[$n]) >= ord('A') &&
          ord($str1[$n]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(isLower('lubna amjed'));
var_dump(isLower('lubna Amjed'));
///////////////////////////////////////////////////////////////////////
//Q1:
echo "QUESTION (6) " . "<br>" . " -Write a PHP function that checks whether a passed string is a palindrome or
not?
A palindrome is a word, phrase, or sequence that reads the same backward as
forward, e.g., madam or nurses run" . "<br>" . "*The answer is :" . "<br>";
function isPlindrome($string) 
{
  if ($string == strrev($string))
      return true;
  else
	  return false;
}
var_dump(isPlindrome('php'))."\n";
var_dump(isPlindrome('phph'))."\n";

///////////////////////////////////////////////////////////////////////
//Q1:
echo "QUESTION (7) " . "<br>" . " -Write a PHP program to find three numbers from an array such that the sum of
three consecutive numbers equal to a given number.
Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))" . "<br>" . "*The answer is :" . "<br>";
function Sum3($arr, $target)
{
$count = count($arr) - 2;
$result=[];
for ($x = 0; $x < $count; $x++) {
    if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $target) {
        array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $target");
    }
}
return $result;
}
$array1 = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
print_r(Sum3($array1, 10));
print_r(Sum3($array1, 11));
print_r(Sum3($array1, 12));
///////////////////////////////////////////////////////////////////////

?>