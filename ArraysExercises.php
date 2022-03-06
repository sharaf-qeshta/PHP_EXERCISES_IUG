<?php
// question 1

/**
 * Create the following 2-D array using nested loop. (from 1 to 100)
 * @param $bound
 * @return array
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function get2DArray($bound)
{
    $data = array();
    $rowIndex = 0; $columnIndex = 0;
    for ($i = 1; $i < $bound+1; $i++)
    {
        if ($i % 10 == 0){
            $rowIndex++; $columnIndex = 0;
        }
        $data[$rowIndex][$columnIndex] = $i;
        $columnIndex++;
    }
    return $data;
}

// echo get2DArray(100); // PHP Warning:  Array to string conversion (we can solve this by looping through the array a prints items one by one)


// question 2
/**
 * Write a PHP script that inserts a new item in an array in any position.
 * Expected Output :
 * Original array :
 * 1 2 3 4 5
 * After inserting '$' the array is :
 * 1 2 3 $ 4 5
 * @param $position
 * @param $value
 * @param $array
 * @return mixed
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function replaceItem($position, $value, $array)
{
    $temp = $array[$position];
    $array[$position] = $value;
    $arraySize = sizeof($array); // since the size is volatile we cannot use it directly in the loop
    for ($i = $position+1; $i < $arraySize; $i++)
    {
        $temp2 = $array[$i];
        $array[$i] = $temp;
        $temp = $temp2;
    }
    $array[$arraySize] = $temp;
    return $array;

}

$array = array(1, 2, 3, 4, 5);
$array = replaceItem(3, '$', $array); // 1 2 3 $ 4 5

foreach ($array as $item){
    echo $item . " ";
}


// question 3
/**
Write a PHP script to sort the following associative array :
    array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
        a) ascending order sort by value
        b) ascending order sort by Key
        c) descending order sorting by Value
        d) descending order sorting by Key
    (without using any pre-defined php function)
*/

/** a) ascending order sort by value
 * @Algorithm Selection Sort
 * @param $array
 * @return array
 * @author Sharaf Qeshta
 */
function sortAscValue($array)
{
    $keys = array_keys($array);
    for ($i = 0; $i < sizeof($keys)-1; $i++)
    {
        $min = $i;
        for ($j = $i+1; $j < sizeof($keys); $j++){
            if (strcmp($array[$keys[$min]], $array[$keys[$j]]) > 0)
                $min = $j;
        }
        $temp = $keys[$min];
        $keys[$min] = $keys[$i];
        $keys[$i] = $temp;
    }
    return $keys;
}


/**
 * b) ascending order sort by Key
 * @Algorithm Selection Sort
 * @param $array
 * @return array
 * @author Sharaf Qeshta
 * @ID 120190644
 */

function sortAscKey($array)
{
    $keys = array_keys($array);
    for ($i = 0; $i < sizeof($keys)-1; $i++)
    {
        $min = $i;
        for ($j = $i+1; $j < sizeof($keys); $j++){
            if (strcmp($keys[$min], $keys[$j]) > 0)
                $min = $j;
        }
        $temp = $keys[$min];
        $keys[$min] = $keys[$i];
        $keys[$i] = $temp;
    }
    return $keys;
}

/**
 * c) descending order sorting by Value
 * @Algorithm Selection Sort
 * @param $array
 * @return array
 * @author Sharaf Qeshta
 * @ID 120190644
 */
function sortDscValue($array)
{
    $keys = array_keys($array);
    for ($i = 0; $i < sizeof($keys)-1; $i++)
    {
        $min = $i;
        for ($j = $i+1; $j < sizeof($keys); $j++){
            if (strcmp($array[$keys[$min]], $array[$keys[$j]]) < 0)
                $min = $j;
        }
        $temp = $keys[$min];
        $keys[$min] = $keys[$i];
        $keys[$i] = $temp;
    }
    return $keys;
}

/**
 * d) descending order sorting by Key
 * @Algorithm Selection Sort
 * @param $array
 * @return array
 * @author Sharaf Qeshta
 * @ID 120190644
 */
function sortDscKey($array)
{
    $keys = array_keys($array);
    for ($i = 0; $i < sizeof($keys)-1; $i++)
    {
        $min = $i;
        for ($j = $i+1; $j < sizeof($keys); $j++){
            if (strcmp($keys[$min], $keys[$j]) < 0)
                $min = $j;
        }
        $temp = $keys[$min];
        $keys[$min] = $keys[$i];
        $keys[$i] = $temp;
    }
    return $keys;
}

$array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

$array1 = sortAscValue($array);

echo "\n";
foreach ($array1 as $key){
    echo $key . "=>" . $array[$key]. "\n";
}
/**
Sophia=>31
William=>39
Ramesh=>40
Jacob=>41*/

$array2 = sortAscKey($array);

echo "\n";
foreach ($array2 as $key){
    echo $key . "=>" . $array[$key]. "\n";
}
/**
Jacob=>41
Ramesh=>40
Sophia=>31
William=>39
*/

$array3 = sortDscValue($array);

echo "\n";
foreach ($array3 as $key){
    echo $key . "=>" . $array[$key]. "\n";
}
/**
Jacob=>41
Ramesh=>40
Sophia=>31
William=>39
 */


$array4 = sortDscKey($array);

echo "\n";
foreach ($array4 as $key){
    echo $key . "=>" . $array[$key]. "\n";
}
/**
Jacob=>41
Ramesh=>40
Sophia=>31
William=>39
 */


// question 4
/**
    Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
 * Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    Expected Output :
    Average Temperature is : 70.6
    List of seven lowest temperatures : 60, 62, 63, 63, 64,
    List of seven highest temperatures : 76, 78, 79, 81, 85,
 */

/** sort an array
 * @param $array
 * @return mixed
 * @author Sharaf Qeshta
 * @ID 120190644
 * @Algorithm Selection Sort
 */
function selectionSort($array)
{
    for ($i = 0; $i < sizeof($array)-1; $i++){
        $min = $i;
        for ($j = $i+1; $j < sizeof($array); $j++){
            if ($array[$min] > $array[$j])
                $min = $j;
        }
        $temp = $array[$min];
        $array[$min] = $array[$i];
        $array[$i] = $temp;
    }
    return $array;
}

$data = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$data = selectionSort($data);

// lowest seven
echo "List of seven lowest temperatures : ";
for ($i = 0; $i < 7; $i++){
    echo $data[$i] . ", ";
}
echo "\n"; // List of seven lowest temperatures : 60, 62, 62, 62, 62, 63, 64,

// highest seven
echo "List of seven highest temperatures : ";
for ($i = sizeof($data)-1; $i > (sizeof($data) - 7); $i--){
    echo $data[$i] . ", ";
}
echo "\n"; // List of seven highest temperatures : 85, 79, 78, 76, 76, 75,


// question 5
/**
 * Write a PHP program to merge (by index) the following two arrays, without using any pre-defined php function
 * @param $array1
 * @param $array2
 * @return array
 * @author Sharaf Qeshta
 * @id 120190644
 */

function merge($array1, $array2)
{
    $bound = sizeof($array1) + sizeof($array2);
    $arr1Size = sizeof($array1);
    for ($i = $arr1Size; $i < $bound; $i++)
        $array1[$i] = $array2[$i-$arr1Size];
    return $array1;
}


$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$array = merge($array1, $array2);
foreach ($array as $element){ echo $element . " ";} // 1 2 3 4 5 6
echo "\n";


// question 6
/**
 * Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
 * @param $n
 * @param $start
 * @param $end
 * @author Sharaf Qeshta
 * @id 120190644
 */

function displayDivisibleOf($n, $start, $end)
{
    for ($i = $start; $i < $end+1; $i++){
        if ($i % $n == 0)
            echo $i . " ";
    }
    echo "\n";
}

displayDivisibleOf(4, 200, 250); // 200 204 208 212 216 220 224 228 232 236 240 244 248


// question 7
/**
 * Write a PHP script to get the shortest/longest string length from an array.
 * Sample arrays : ("abcd","abc","de","hjjj","g","wer")
 * Expected Output : The shortest array length is 1. The longest array length is 4.
 * @param $array
 * @author Sharaf Qeshta
 * @id 120190644
 */

function displayLongestAndShortest($array)
{
    $maxSize = strlen($array[0]); $minSize = strlen($array[0]);
    for ($i = 0; $i < sizeof($array); $i++)
    {
        $strLen = strlen($array[$i]);
        if ($strLen > $maxSize)
            $maxSize = $strLen;
        if ($strLen < $minSize)
            $minSize = $strLen;
    }
    echo "The shortest array length is " . $minSize . "\n";
    echo "The longest array length is " . $maxSize . "\n";
}

$array = array("abcd","abc","de","hjjj","g","wer");
displayLongestAndShortest($array);
// The shortest array length is 1
// The longest array length is 4


// question 8
/**
 * Write a PHP script to generate unique random numbers within a range.
 * Sample Range : (11, 20)
 * Sample Output : 17 16 13 20 14 19 18 15 11 12
 * @param $size
 * @param $min
 * @param $max
 * @return array
 * @author Sharaf Qeshta
 * @id 120190644
 */

function generateRandom($size, $min, $max)
{
    $array = array();
    for ($i = 0; $i < $size; $i++)
        $array[$i] = rand($min, $max);
    return $array;
}

$array = generateRandom(10, 11, 20);
foreach ($array as $value){ echo $value. ", "; } // 13, 18, 18, 17, 19, 14, 16, 18, 11, 12,
echo "\n";


// question 9

/**
 * Write a PHP function to search a specified value within the values of an associative array.
 * @param $array
 * @param $value
 * @return mixed|null
 * @author Sharaf Qeshta
 * @id 120190644
 */

function search($array, $value)
{
    for ($i = 0; $i < sizeof($array); $i++)
    {
        if (equal($array[$i], $value))
            return $array[$i];
    }
    return null;
}

function equal($val1, $val2)
{
    return strcmp($val1."", $val2."") == 0;
}


$array1 = array(1, 2, 3);
$array2 = array("abc", "cbd", "Hello");
echo search($array1, 1) . "\n"; // 1
echo search($array1, 5) . "\n"; // nothing
echo search($array2, "Hello") . "\n"; // Hello


// question 10
/**
 * Write a PHP program to remove duplicate values from an array which contains only strings or only integers
 * @param $array
 * @return array
 * @author Sharaf Qeshta
 * @id 120190644
 */

function removeDuplicate($array)
{
    $output = array();
    $index = 0;
    for ($i = 0; $i < sizeof($array); $i++)
    {
        if (search($output, $array[$i]) == null)
            $output[$index++] = $array[$i];
    }
    return $output;
}

$array = array(1, 1, 4, 5, 9, 5, 1);
$array = removeDuplicate($array);
foreach ($array as $element){ echo $element .", "; } // 1, 4, 5, 9,






