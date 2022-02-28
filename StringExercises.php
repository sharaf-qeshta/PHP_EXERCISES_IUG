<?php
/** Write a PHP code that reverse a string without using strrev() function.
 * @param $string
 * @return string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function customReverse($string)
{
    $reversedString = "";
    for ($i = strlen($string) - 1; $i > -1; $i--)
        $reversedString .= substr($string, $i, 1);
    return $reversedString;
}

echo customReverse("Hello") . "\n"; // olleH


/** Write a PHP code to count words in a string, without using str_word_count() function.
 * @param $phrase
 * @return int
 * @author Sharaf Qeshta
 * @ID 120190644
 */
function customCountWords($phrase)
{
    return sizeof(explode(" ", $phrase));
}

echo customCountWords("Hello World Again") . "\n"; // 3


/** Write a PHP script to split the following string. Go to the editor
 * Sample string : '082307'
 * Expected Output : 08:23:07
 * @param $string
 * @return string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function getFormattedTime($string)
{
    $formattedTime = substr($string, 0, 2) . ":";
    $formattedTime .= substr($string, 2, 2) . ":";
    $formattedTime .= substr($string, 4, 2);
    return $formattedTime;
}

echo getFormattedTime("082307") . "\n"; // 08:23:07


/** Write a PHP script to extract the file name from the following string. Go to the editor
 * Sample String : 'www.example.com/public_html/index.php'
 * Expected Output : 'index.php'
 * @param $path
 * @return false|string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function getFileName($path)
{
    return substr($path, strrpos($path, "/")+1, strlen($path));
}

echo getFileName("www.example.com/public_html/index.php") . "\n"; // index.php


/**
 * Write a PHP script to extract the user name from the following email ID. Go to the editor
 * Sample String : 'rayy@example.com'
 * Expected Output : 'rayy'
 * @param $email
 * @return false|string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function getUsername($email)
{
    return substr($email, 0, strpos($email, "@"));
}

echo getUsername("rayy@example.com") . "\n"; // rayy


/** Write a PHP script to generate simple random password [do not use rand() function] from a given string.
 * Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
 * Note : Password length may be 6, 7, 8 etc.
 * @param $characters
 * @param $passwordLength
 * @return string
 * @author Sharaf Qeshta
 * @ID 120190644
 */


function getRandomPassword($characters, $passwordLength)
{
    $password = "";
    $characters = str_shuffle($characters); // if we want more abstract solution we can implement a function to
                                            // shuffle a string
    for ($i = 0; $i < $passwordLength; $i++)
        $password .= substr($characters, $i % strlen($characters), 1);
    return $password;
}


echo getRandomPassword("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz",
    8) . "\n";

// first run: p9WktOUT
// second run: FR0WUgyl
// third run: 1WNrweO8
// fourth run: lipzKv1y and so on


/** Write a PHP script to print the next character of a specific character.
 * Sample character : 'a'
 * Expected Output : 'b'
 * Sample character : 'z'
 * Expected Output : 'a'
 * @param $letter
 * @return string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function getNextLetter($letter)
{
    $charASCII = ord($letter);
    if ($charASCII >= 122)
        return chr(97);
    return chr($charASCII+1);

}

echo getNextLetter("a") . "\n"; // b
echo getNextLetter("z") . "\n"; // a


/** Write a PHP script to remove all leading zeroes from a string. Go to the editor
 * Original String : '000547023.24'
 * Expected Output : '547023.24'
 * @param $string
 * @return false|string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function removeLeadingZeros($string)
{
    $index = 0;
    $currentChar = substr($string, $index, 1);
    while ($currentChar == 0)
        $currentChar = substr($string, ++$index, 1);
    // index represent the last occurrence of a leading zero
    return substr($string, $index);
}

echo removeLeadingZeros("000547023.24"); // 547023.24


/** What the output of this code:
 * $var = "false";

    if ($var){
        echo  "yes";
    }else{
        echo "No";
    }
 * output = yes
 * as in python if you pass a string in the place of boolean value
 * it will check if the string is empty or not
  */

/**
What the output of this code:
 * $str = "This is an exam";

    if (strpos($str, "b")){
        echo "yes";
    }else{
        echo "no";
    }
 * output = no ?
 * if you look to the documentation of the strpos() you will find
 * that it returns "@return int|false"
 * so whether true or false since b is not in the string it will return false
 */


/** What the output of this code:
    $str = "Hello World";
    if (strlen($str) == strpos($str, "d")){
        echo "yes";
    }else{
        echo "no";
    }
  * output = no
  * because strlen($str) == 11 and strpos($str, "d") == strlen($str) - 1*/


/** What the output of this code:
 * $str1 = "eat";
   $str2 = "aet";

   if (strpos($str1, "ea") == strpos($str2, "ae")){
       echo "yes";
   }else{
       echo "no";
   }
 * output = "yes"
 * since strpos($str1, "ea") is 0 and strpos($str2, "ae") is 0
 * 0 == 0 -> yes : no
 */


/** What the output of this code:
    $a = "1254";
    $b = 1;

    $sum = intval(str_replace("1", "", $a)) + $b;

    echo $sum;

    * $sum = 255 ??
    * str_replace("1", "", $a) will replace all occurrences of 1 by "" empty
    * so it will return "254"
    * intval("254") will return 254 of type integer
    * 254 + $b(1) == 255
 */


/** What the output of this code:
    $email = "mohammed@gmail.com";

    $string = str_replace("mohammed", $email, $email);

    echo $string;
    * $string = mohammed@gmail.com@gmail.com ?
    * we replacing mohammed by "mohammed@gmail.com" in "mohammed@gmail.com"
    * so the output will be mohammed@gmail.com(mohammed)@gmail.com
 */


/** What the output of this code:
 * $string1 = "feetball";
   $string2 = "feetboll";

   if (strpos($string1, 'a') == strpos($string2, 'o')){
       echo "yes";
   }else{
       echo "no";
   }
 * output = yes ?
 * since strpos($string1, 'a') == 5 and strpos($string2, 'o') = 5
 * 5 == 5 -> yes : no
 */




