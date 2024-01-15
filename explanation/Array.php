<?php

// initialize and creating array
$fruits = ['Apple', 'Orange', 'Watermelon', 'Mango'];

// print all values
print_r($fruits); echo "<br/><br/>";

echo "<hr/>";

// print by index[0][1][2]
echo $fruits[0];echo "<br/><br/>";
echo $fruits[1];echo "<br/><br/>";
echo $fruits[2];echo "<br/><br/>";
echo $fruits[3];echo "<br/><br/>";

echo "<hr/>";

$arrayLength = count($fruits);
for ($i=0; $i < $arrayLength; $i++) { 
    echo $fruits[$i];echo "<br/><br/>";
}

echo "<hr/>";

// print with foreach
foreach ($fruits as $val) {
    echo $val;echo "<br/><br/>";
}

echo "<hr/>";

//associative arrays
$employee = [
    'name'    =>    'Rodrigo',
    'email'   =>    'rodrigo.olivia@gmail.com',
    'phone'   =>    '987-487-985-284'
];

foreach ($employee as $key => $value) {
    echo $key . ' : ' . $value;echo "<br/>";
}

echo "<hr/>";

$employee = [
    'name'     => 'Olivia',
    'email'    => 'rodrigo.olivia@gmail.com',
    'phone'    => '987-487-985-284',
    'hobbies'  => ['Badminton', 'Tennis'],
    'profiles' => ['facebook' => 'Olivia Rodrigo FB', 'instagram' => 'Olivia Rodrigo IG']
];

var_dump($employee);