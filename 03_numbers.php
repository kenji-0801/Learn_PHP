<?php

// 1. Declaring numbers
// 1. 数字を宣言する
$a = 5;
$b = 4;
$c = 1.2;

// 2. Arithmetic operations
// 2. 算術演算について
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>'; // 3. Several arithmetic operations - (* $c + 6)
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// 4. Assignment with math operators
// 4. 演算の省略形
//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1

// 5. Increment operator
// 5. 加算の省略形
echo $a++ . '<br>';
echo ++$a . '<br>';

// 6. Decrement operator
// 6. 減算の省略形
echo $a-- . '<br>';
echo --$a . '<br>';

// 7. Number checking functions
// 7. 値の型への関数
is_float(1.25); // true
is_integer(3.4); // false
is_numeric("3.45"); // true
is_numeric("3g.45"); // true

// 7. Conversion
$strNumber = '12.34';
$number = (float)$strNumber; // 8. Use floatval(), (int), intval()
var_dump($number);
echo '<br>';

// 9. Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

// 10. Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';
