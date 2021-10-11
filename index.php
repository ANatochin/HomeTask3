<?php

echo "----------------------1------------------------". "<br>";

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// посчитать длину массива
$arrayLength = count($arr); // длина массива
var_dump($arrayLength);

// переместить первые 4 элемента массива в конец массива

for ($i = 0; $i<=3; $i++){
    array_push($arr,$arr[$i]);
    unset($arr[$i]);
}
$arr = array_values($arr);
echo '<pre>';
var_dump($arr);
echo '</pre>';

// получить сумму 4,5,6 элемента

$sum = 0;
$arrSum = [];
for ($j = 3; $j<=5; $j++){
    $sum += $arr[$j];  // с помощью переменной
    array_push($arrSum, $arr[$j]); // с помощью нового массива
}
echo '<pre>';
var_dump($sum);
var_dump(array_sum($arrSum));
echo '</pre>';

echo "----------------------2------------------------". "<br>";

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$differences = array_diff_assoc($secondArr,$firstArr);
echo '<pre>';
var_dump($differences);
echo '</pre>';

//найти все элементы которые присутствую в первом и отсутствуют во втором
$differences2 = array_diff_assoc($firstArr,$secondArr);
echo '<pre>';
var_dump($differences2);
echo '</pre>';

//найти все элементы значения которых совпадают
$similarValues = array_intersect($firstArr,$secondArr);
echo '<pre>';
var_dump($similarValues);
echo '</pre>';

//найти все элементы значения которых отличается
$diffValues1 = array_diff($firstArr,$secondArr);
$diffValues2 = array_diff($secondArr, $firstArr);

echo '<pre>';
var_dump($diffValues1);
var_dump($diffValues2);
echo '</pre>';

echo "----------------------3------------------------". "<br>";
$firstArr1 = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];

//получить все вторые элементы вложенных массивов

foreach ($firstArr1 as $value){
    if (is_array($value)){
        $internalKeys = array_keys($value);
        if (array_key_exists(2, $internalKeys)){
            echo '<pre>';
            var_dump($value[$internalKeys[1]]);
            echo '</pre>';
        }
    }
}

//получить общее количество элементов в массиве
$totalCount = 0;
foreach($firstArr1 as $value){
    if (is_array($value)){
        $totalCount += count($value);
    }else{
        $totalCount++;
    }
}
echo '<pre>';
var_dump ($totalCount);
echo '</pre>';

//получить сумму всех значений в массиве
$totalSum = 0;
foreach($firstArr1 as $value){
    if (is_array($value)){
        $totalSum += array_sum($value);
    }else{
        $totalSum+=$value;
    }
}
echo '<pre>';
var_dump ($totalSum);
echo '</pre>';
