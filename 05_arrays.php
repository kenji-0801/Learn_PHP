<?php

// Create array
// 配列の作成
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
// 配列を表示
echo '<pre>';
var_dump($fruits); // print_r でもOK!
echo '</pre>';

// Get element by index
// 配列の中の値を"[1]"で取得する
echo $fruits[1].'<br>';

// Set element by index
// 配列の中の値を"[1]"で代入する
$fruits[0] = "Peach";

// Check if array has element at index 2
// 配列に[2]の値があるか確認する
echo '<pre>';
var_dump(isset($fruits[2]));  // Change age into 5
echo '</pre>';

// Append element
// 値の末尾に追加する
$fruits[] = 'Peach';
echo $fruits[3].'<br>';

// Print the length of the array
// 配列の値を数え、表示する
echo count($fruits).'<br>';

// Add element at the end of the array
// 配列の末尾に値を追加する
array_push($fruits, 'Foo');

// Remove element from the end of the array
// 配列の末尾に値を削除する
array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
// 配列の先頭に値を追加する
array_unshift($fruits, 'Apple');

// 配列の先頭に値を削除する
// Remove element from the beginning of the array
array_shift($fruits);

// 配列の中にある文字を分割する
// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($fruits);

// 文字を配列の中に結合する
// Combine array elements into string
echo implode(",", $fruits).'<br>';

// 配列の中に値があるか確認する
// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

// 配列にあるインデックスの値を検索する
// Search element index in the array
echo '<pre>';
var_dump(array_search("Peach", $fruits));
echo '</pre>';

// 複数の配列をマージする
// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([$fruits, $vegetables]); // Since PHP 7.4
echo '</pre>';

// 配列のソート
// Sorting of array (Reverse order also)
sort($fruits); //sort, rsort, usort
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// フィルター、マップ、リディースの配列
// Filter, map, reduce of array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($numbers, function($n){ // fn($n) => $n % 2 === 0
    return $n % 2 === 0;
});
echo '<pre>';
var_dump($evens);
echo '</pre>';


$squares = array_map(fn($n) => $n + 1, $numbers);
echo '<pre>';
var_dump($squares);
echo '</pre>';

$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item);
echo $sum.'<br>';
