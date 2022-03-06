<?php
// question 1

/**
    What the output of this code:
 * $a = 5;
    $b = 6;

    for ($i = $a; $i <= $b; $i++){
        $a++;
        $b--;
    }

    echo $a; // $a = 6
    echo $b; // $b = 5;
 * the loop will execute once so the programme will increment $a by one and decrement $b by one
 * one time
 */


// question 2

/**
    What the output of this code:
 * $r = 2;
   $i = 1;

   while ($i < 10 && $r < 6){
        $r += $i++;
    }

   echo $r;
 * the loop will execute 3 times
 * first iteration
 * $r = 3 => 2 + 1 ($i++) ==== (1 < 10 && 2 < 6) => true
 * second iteration
 * $r = 5 => 3 + 2 ($i++) ==== (2 < 10 && 3 < 6) => true
 * third iteration
 * $r = 8 => 5 + 3 ($i++) ==== (3 < 10 && 5 < 6) => true
 * (3 < 10 && 5 < 6) => false => the loop will stop
    */


// question 3
/**
What the output of this code:
 * for ($i = 0; $i < 5; $i++){
        for ($j = $i; $j < 5; $j++){
            echo "$i | $j ";
        }
    }
 * output => 0 | 0 0 | 1 ..... 4 | 4
 * n | m where n < 5, m < 5
 */



// question 4
/**
What the output of this code:
 * $r = 0;
   $i = 0;

    do {
        $r += $i++ * $i += 2;
    }while($i++ < 30);

    echo $i; // $i = 32;
    echo $r; // $r = 2576;
 *
 * first iteration 0 += 0 * 3; $r = 0, $i = 3; condition (3 < 30) => true; $i = 4;
 * second iteration 0 += 4 * 7; $r = 28, $i = 7; condition (7 < 30) => true; $i = 8;
 * third iteration 28 += 8 * 11; $r = 116, $i = 11; condition (11 < 30) => true; $i = 12;
 * fourth iteration 116 += 12 * 15; $r = 296, $i = 15; condition (15 < 30) => true; $i = 16;
 * fifth iteration 296 += 16 * 19; $r = 600, $i = 19; condition (19 < 30) => true; $i = 20;
 * sixth iteration 600 += 20 * 23; $r = 1060, $i = 23; condition (23 < 30) => true; $i = 24;
 * seventh iteration 1060 += 24 * 27; $r = 1708, $i = 27; condition (27 < 30) => true; $i = 28;
 * eighth iteration 1708 += 28 * 31; $r = 2576, $i = 31; condition (31 < 30) => false; $i = 32;
 *
 * $r = 2576, $i = 32;
*/


// question 5
/**
    What the output of this code:
    $a = 2;
    $b = 3;
    $r = 2;

    $r += $a++ +  ++$a**2 - $b-- - --$b;
    echo $r; // $r == 16
 * $a++ return 2, $a = 3;
 * ++$a return 4; $a = 4
 * ++$a**2 return 16
 * (2 + 16) - 3($b--) - 1(--$b)
 * 18 - 4 = 14 and the initial value of $r is 2
 * it become 14 + 2 == 16
 */






