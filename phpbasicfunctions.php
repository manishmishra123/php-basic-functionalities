<?php
/*
 *
 * Created by Manish Mishra
 * User: manishmishra123
 * Date: 16/04/18
 * Time: 6:00 PM
 *
 * These are basic functions which can be implemented through any language.
 * I have used PHP for same.
 *
 * This involves following functions type
 *
 * calculator
 * fibonacciSeries
 * factorial
 * sortingArr
 * palindrome
 *
 *
 * Select the type from switch case and enjoy coding.
 *
 * Happy Coding.
 */


$type = 'checkPrimenumber';

/*parameters provided in different kind of functions*/

/*parameters for sorting array*/
$array=array(1,87,32,98765,11,323);

/*parameters for fibonacci series*/
$fibonacciCount =10;
$fibonacciFirstNumber =0;
$fibonacciSecondNumber =1;

/*parameters for palindrome*/
$string = 'testingpalindrome';

/*parameters for factorial*/
$factorialnumber = 5;

/*parameters for calculator
 *
 * $functionCheck can be add,substract,divide,multiply
 *
 */
$functionProvided = 'divide';
$functionFirstNumber = 10;
$functionSecondNumber = 20;

/*parameters for primenumber*/
$checkPrimenumber = 17;


//getting Fibonacci Series in php
function fibonacciSeries($paramcount,$paramone,$paramtwo)
{

    $finaloutcome = array();

    $finaloutcome[0] = $paramone;
    $finaloutcome[1] = $paramtwo;

    for($i = 2; $i < $paramcount; $i++){

        $paramthird = $paramone + $paramtwo;

        $finaloutcome[$i] = $paramthird;

        $paramone = $paramtwo;
        $paramtwo = $paramthird;
    }

   return implode(' ',$finaloutcome);
}

//getting factorial in php
function factorial($n){
    if($n>2) {
        return $n* factorial($n-1);
    }
    return 2;
}

//sorting of array in php
function sortingArr($array){

    for($i=0;$i<sizeof($array);$i++){
        for($j=$i;$j<sizeof($array);$j++){

            if($array[$i]>$array[$j]){
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }

        }
    }
    return implode(' ',$array);
}

//calculation of functions in php
function calculator($paramone,$paramtwo,$functioncase)
{
    switch($functioncase) {

        case add:
            return 'Addition of two numbers('.$paramone.','.$paramtwo.') :-'.($paramone + $paramtwo);
            break;

        case substract:
            return 'substraction of two numbers('.$paramone.','.$paramtwo.') :-'.($paramone - $paramtwo);
            break;

        case divide:
            return 'Division of two numbers('.$paramone.','.$paramtwo.') :-'.($paramone / $paramtwo);
            break;

        case multiply:
            return 'Multiplication of two numbers('.$paramone.','.$paramtwo.') :-'.($paramone * $paramtwo);
            break;

        default:
            return $message = 'method not found.';
            break;
    }
}

//palindrome in php
function palindrome($palindromestring){

    //find string length
    $length = strlen($palindromestring);

    for ( $counter = $length - 1; $counter >=0;$counter-- )
    {
        echo $palindromestring[$counter];
    }
}

function checkPrimenumber($number)
{
    for($counter=2; $counter<$number; $counter++)
    {
        if($number %$counter ==0)
        {
            return $number.' is not a prime number.';
        }
    }
    return $number.' is a prime number.';
}

switch ($type) {

    case 'fibonacciSeries':
        echo 'Fibonacci Series:- '.fibonacciSeries($fibonacciCount,$fibonacciFirstNumber,$fibonacciSecondNumber);
        break;

    case 'factorial':
        echo 'Factorial of '.$factorialnumber.' '.factorial($factorialnumber);
        break;

    case 'sortingArr':
        echo 'Sorting of Array is'. sortingArr($array);
        break;

    case 'calculator':
        echo calculator($functionFirstNumber,$functionSecondNumber,$functionProvided);
        break;

    case 'palindrome':
        echo 'Palindrome of a number is'. palindrome($string);
        break;

    case 'checkPrimenumber':
        echo checkPrimenumber($checkPrimenumber);
        break;

    default:
        echo $message = 'Info is available.';
        break;
    }