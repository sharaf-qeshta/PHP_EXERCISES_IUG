<?php

// question 1
/**
 * Create a script using a for loop to add all the integers between 0 and 30 and display the total.
 * @param $bound
 * @return int
 * @author Sharaf Qeshta
 * @ID 120190644
 */

// brute force
function sum($bound)
{
    $sum = 0;
    for ($i = 1; $i < ($bound+1); $i++){
        $sum += $i;
    }
    return $sum;
}

// or by using some mathematics laws
function enhancedSum($bound){
    return $bound * ($bound + 1) / 2;
}


echo sum(30) . "\n"; // 465
echo enhancedSum(30) . "\n"; // 465


// question 2

/**
 * Create a script to construct the following pattern, using a nested for loop.
 *
 * *
 * * *
 * * * *
 * * * * *
 * * * * *
 * * * *
 * * *
 * *
 *

 * @author Sharaf Qeshta
 * @ID 120190644
 */


function displayPattern()
{
    for ($i = 0; $i < 5; $i++)
    {
        for ($j = 0; $j < ($i+1); $j++){
            echo "*";
        }
        echo "\n";
    }

    for ($i = 0; $i < 5; $i++)
    {
        for ($j = $i; $j < 5; $j++){
            echo "*";
        }
        echo "\n";
    }
}

displayPattern(); // output the same shape



// question 3

/**
 * Write a program to calculate and print the factorial of a number using a for loop
 * @param $n
 * @return int
 * @author Sharaf Qeshta
 * @ID 120190644
 */


function factorial($n)
{
    $total = 1;
    for ($i = 2; $i < $n+1; $i++)
        $total *= $i;
    return $total;
}

// recursive solution
function recursiveFactorial($n)
{
    if ($n < 2)
        return 1;
    if ($n == 2)
        return 2;
    return $n * recursiveFactorial($n-1);
}


echo factorial(4) . "\n"; // 24
echo recursiveFactorial(4) . "\n"; // 24


// question 4
/**
 * Write a PHP script that creates the following table using for loops.(multiplication table)
 * @param $rows
 * @param $columns
 * @return string
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function getTableCode($rows, $columns)
{
    $html = "<table style='border:1px solid black;'>";
    for ($i = 1; $i < $rows+1; $i++)
    {
        $html .= "<tr style='border:1px solid black;'>";
        for ($j = 1; $j < $columns+1; $j++)
        {
            $n = $i * $j;
            $html .= "<td style='border:1px solid black;'>" . "$i * $j = $n" . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</table>";

    return $html;
}

echo getTableCode(5, 6) . "\n"; // valid html code i test it

/** <table style='border:1px solid black;'><tr style='border:1px solid black;'><td style='border:1px solid black;'>1 * 1 = 1</td><td style='border:1px solid black;'>1 * 2 = 2</td><td style='border:1px solid black;'>1 * 3 = 3</td><td style='border:1px solid black;'>1 * 4 = 4</td><td style='border:1px solid black;'>1 * 5 = 5</td><td style='border:1px solid black;'>1 * 6 = 6</td></tr><tr style='border:1px solid black;'><td style='border:1px solid black;'>2 * 1 = 2</td><td style='border:1px solid black;'>2 * 2 = 4</td><td style='border:1px solid black;'>2 * 3 = 6</td><td style='border:1px solid black;'>2 * 4 = 8</td><td style='border:1px solid black;'>2 * 5 = 10</td><td style='border:1px solid black;'>2 * 6 = 12</td></tr><tr style='border:1px solid black;'><td style='border:1px solid black;'>3 * 1 = 3</td><td style='border:1px solid black;'>3 * 2 = 6</td><td style='border:1px solid black;'>3 * 3 = 9</td><td style='border:1px solid black;'>3 * 4 = 12</td><td style='border:1px solid black;'>3 * 5 = 15</td><td style='border:1px solid black;'>3 * 6 = 18</td></tr><tr style='border:1px solid black;'><td style='border:1px solid black;'>4 * 1 = 4</td><td style='border:1px solid black;'>4 * 2 = 8</td><td style='border:1px solid black;'>4 * 3 = 12</td><td style='border:1px solid black;'>4 * 4 = 16</td><td style='border:1px solid black;'>4 * 5 = 20</td><td style='border:1px solid black;'>4 * 6 = 24</td></tr><tr style='border:1px solid black;'><td style='border:1px solid black;'>5 * 1 = 5</td><td style='border:1px solid black;'>5 * 2 = 10</td><td style='border:1px solid black;'>5 * 3 = 15</td><td style='border:1px solid black;'>5 * 4 = 20</td><td style='border:1px solid black;'>5 * 5 = 25</td><td style='border:1px solid black;'>5 * 6 = 30</td></tr></table> */
