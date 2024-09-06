<?php
#Array

$array1 = [1, 3, 'vvvv'];

$array2 = ['name' => 'aaaaaa'];

#Условные операторы

$temp = 36.6;

if ($temp < 37) {
    echo "Температура ниже 37."; // Действие, если условие истинно
};

#Виды циклов
# for
for ($i = 0; $i < 5; $i++) {
    echo "Число: $i<br>";
}
 # while
$i = 0;
while ($i < 5) {
    echo "Число: $i<br>";
    $i++;
}

# do while
$i = 0;
do {
    echo "Число: $i<br>";
    $i++;
} while ($i < 5);

# foreach
$fruits = ["apple", "banana", "cherry"];
foreach ($fruits as $fruit) {
    echo "Фрукт: $fruit<br>";
}
# foreach для ассоциативных массивов
$person = ["name" => "John", "age" => 30, "city" => "New York"];
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

