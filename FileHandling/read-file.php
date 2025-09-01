<?php

// $file = readfile("employees.csv");

// echo "<br>";

// $csvFile = fopen("employees.csv", "r");

// $employees = fread($csvFile, filesize("employees.csv"));

// var_dump($employees);

// fclose($csvFile);

// die();

$users = [
    ['name' => 'John Doe', 'age' => 30],
    ['name' => 'Jane Doe', 'age' => 20],
    ['name' => 'James Doe', 'age' => 25],
    ['name' => 'Jenny Doe', 'age' => 35],
];

$file = fopen('./uploads/attendances.csv', 'w');

$txt = 'Name,Age' . "\n";
fwrite($file, $txt);

foreach ($users as $key => $value) {
    $txt = $value['name'] . ',' . $value['age'] . "\n";
    fwrite($file, $txt);
}

fclose($file);
