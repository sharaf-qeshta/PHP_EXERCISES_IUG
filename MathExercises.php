<?php

// this is my first time writing php codes
// i`am not sure that is the proper solutions
// to the given problems
// the problem solved in order from top to bottom
// every problem could have 1, 2 or more functions to represent it

/** Write a PHP code make like ROUND function, without using round(), ceil() or floor() functions.
 * @param $value
 * @return int
 * @author Sharaf Qeshta
 * @id 120190644
 */
function customRound($value)
{
     $decimalPart = $value - intval($value);
     if ($decimalPart >= 0.5)
        return intval($value) + 1;
     return intval($value);
}

echo customRound(9.49) . "\n"; // 9


/**
 * Write a PHP code, take a double number and keep only one digit after floating point.
 * Samples:
 * Input = 6.142 , output = 6.1
 * Input = 88.45 , output = 88.4
 * Input = 7.4 , output = 7.4
 * @param $decimalPlaces
 * @param $value
 * @return float
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function customFormat($decimalPlaces, $value)
{
    $stringValue = $value . "";
    return doubleval(substr($stringValue, 0, strpos($stringValue, ".") + $decimalPlaces+1));
}

echo customFormat(1, 6.142) . "\n"; // 6.1
echo customFormat(1, 88.45) . "\n"; // 88.4
echo customFormat(1, 7.4) . "\n"; // 7.4


/**
 * Write a PHP code convert MB to KB
 * @param $mb
 * @return float|int
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function toKB($mb){
    return $mb * 1024;
}

echo toKB(2) ."\n"; // 2048


/**
    What the output of this code:
 *  $v1 = 2;
    $v2 = 3;

    $r = ($v1 + $v2) * $v1 * $v2 / $v1 % $v2 + 1;
 * r = 1?
 * (2  + 3) = 5
 * since the all the operation have the same degree we start from left to right
 * 5 * 2 = 10
 * 10 * 3 = 30
 * 30 / 2 = 15
 * 15 % 3 = 0
 * 0 + 1 = 1
*/

/**
    What the output of this code:
    $v1 = 2;
    $v2 = 3;

    $r = ($v1 + ($v2 * ($v2 - $v1))) / 2 * ($v2) * ($v1 + ($v2 - 1 / ($v1 / 2)));

 * ($v1 + ($v2 * ($v2 - $v1))) = 5 // do it first
 * ($v1 + ($v2 - 1 / ($v1 / 2))) =  4
 *
 * 5 / 2 * 3 * 4 = 30 (2.5 * 12)  = (12 + 12 + 6)
 * so r = 30 */


/** Write a PHP function that detect if an integer number is from multiplies of 100.
 * @param $number
 * @return bool
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function divisibleByHundred($number){
    return $number % 100 == 0;
}

/**Write a PHP program to check whether a number is an Armstrong number or not.
 * Return true if the number is Armstrong otherwise return false.
 * Note: An Armstrong number of three digits is an integer so that the
 * sum of the cubes of its digits is equal to the number itself.
 * For example, 153 is an Armstrong number since 1**3 + 5**3 + 3**3 = 153.
 * @param $number
 * @return bool
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function isArmstrongNumber($number)
{
    $stringNumber = $number . "";
    $digitsCubed = 0;
    for ($i = 0; $i < strlen($stringNumber); $i++)
        $digitsCubed += intval(substr($stringNumber, $i, 1)) ** 3;
    return $number == $digitsCubed;
}


echo var_dump(isArmstrongNumber(153)) . "\n"; // bool(true)


/**
 * Write a PHP program to convert word to digit.
 * Input: zero;three;five;six;eight;one
 * Output: 035681
 * @param $string
 * @return string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function stringToDigits($string)
{
    $value = "";
    $words = explode(";", $string);
    for ($i = 0; $i < sizeof($words); $i++)
        $value .= getValue($words[$i]);
    return $value; // since integer values will omit zeros that occurs in the first i use string
                   // to represent the value
}

function getValue($word)
{
    $word = strtolower($word);
    switch ($word){
        case "zero": return 0;
        case "one": return 1;
        case "two": return 2;
        case "three": return 3;
        case "four": return 4;
        case "five": return 5;
        case "six": return 6;
        case "seven": return 7;
        case "eight": return 8;
        case "nine": return 9;
        default: return -1;
    }
}

echo stringToDigits("zero;three;five;six;eight;one") . "\n"; // 035681


/**
 *   Write a PHP program to compute the sum of the prime numbers less than 100.
 *   Note: There are 25 prime numbers are there in less than 100.
 *   2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71,
 *  73, 79, 83, 89, 97 and sum of all these numbers is 1060
 * @param $lessThan
 * @return int
 * @author Sharaf Qeshta
 * @ID 120190644
 */


function sumAllPrimes($lessThan)
{
    $total = 0;
    for ($i = 2; $i < $lessThan; $i++){
        if (isPrime($i))
            $total += $i;
    }
    return $total;
}

function isPrime($number)
{
    if ($number <= 1)
        return false;
    if ($number == 2)
        return true;
    for ($i = 2; $i < sqrt($number)+1; $i++){
        if ($number % $i == 0)
            return false;
    }
    return true;
}

echo sumAllPrimes(100) . "\n"; // 1060


/**
Write a PHP code that compute (integer * number of digits of integer).
    Samples:
        Input = 433 , output = 433 * 3
        Input = 14 , output = 14 * 2
        Input = 4771 , output = 4771 * 4
 * @param $integer
*/

function getIntegerMultipliedByItsLength($integer)
{
    return $integer * (strlen($integer . ""));
}

echo getIntegerMultipliedByItsLength(433) . "\n"; // 1299
echo getIntegerMultipliedByItsLength(14) . "\n"; // 28
echo getIntegerMultipliedByItsLength(4771) . "\n"; // 19084

/**
 * Write a PHP code convert color to RGP to HEX.
 * Sample:
 * input = “229,111,85” , output = “#E56F55”
 * @param $rgpString
 * @return string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function rgpToHex($rgpString)
{
    $rgbValues = explode(",", $rgpString);
    $hexValue = "#";
    for ($i = 0; $i < sizeof($rgbValues); $i++)
        $hexValue .= decToHex(intval($rgbValues[$i]));
    return $hexValue;
}


/** recursive implementation is more simple to the programmer
 * but more hard to computer (if the number is large it could cause stackoverflow error)
 * @param $decimal
 * @return string
 */
function decToHex($decimal)
{
    if ($decimal == 0)
        return "";
    else
        return decToHex(intval($decimal / 16)) . getHexValue($decimal % 16);
}

function getHexValue($intValue)
{
    if ($intValue < 10)
        return $intValue . "";
    else
        return chr($intValue + 55) . "";
}


echo rgpToHex("229,111,85"); // #E56F55


