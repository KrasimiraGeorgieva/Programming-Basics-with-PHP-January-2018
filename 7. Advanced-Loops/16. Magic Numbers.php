<?php
// Variant 1
$num = intval(readline());
for($i = 100000; $i <= 999999; $i++){
    $d1 = $i%10;
    $d2 = floor($i/10)%10;
    $d3 = floor($i/100)%10;
    $d4 = floor($i/1000)%10;
    $d5 = floor($i/10000)%10;
    $d6 = floor($i/100000)%10;
    if($d1*$d2*$d3*$d4*$d5*$d6 == $num){
        echo $i.' ';
    }
}

// Variant 2
//$n = intval(readline());
//
//$x1 = 0;
//for ($x1 = 0; $x1 <= 9; $x1++)
//{
//    for ($x2 = 0; $x2 <= 9; $x2++)
//    {
//        for ($x3 = 0; $x3 <= 9; $x3++)
//        {
//            for ($x4 = 0; $x4 <= 9; $x4++)
//            {
//                for ($x5 = 0; $x5 <= 9; $x5++)
//                {
//                    for ($x6 = 0; $x6 <= 9; $x6++)
//                    {
//                        if ($x1 * $x2 * $x3 * $x4 * $x5 * $x6 == $n)
//                        {
//                            echo "$x1$x2$x3$x4$x5$x6 ";
//                        }
//                    }
//                }
//            }
//        }
//    }
//}


// Variant 3
//$magicNum = intval(readline());
//
//for ($number = 100000; $number <= 999999; $number++){
//    $digits = $number;
//    $product = 1;
//
//    while ($digits != 0){
//        $lastDigits = $digits % 10;
//        $product *= $lastDigits;
//        $digits = floor($digits / 10);
//    }
//    if ($product == $magicNum){
//        echo($number . " ");
//    }
//}
//echo "\n";