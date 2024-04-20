<?php

// data types
$var = "helloeveyone"."<br>";
var_dump($var);

$var = 123;
var_dump($var);

$var = 1.2345 ;
var_dump($var);

$var = "ab";
var_dump($var);

$var = true;
var_dump($var);



// loops
for ($i=1; $i<=10; $i++)
{
    echo "the number is $i"."<br>";
}


$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 10);

$num = 1; while ($num<=10){
    echo "$num";
    $num++;
}

//if else
$var = 20000;
if ($var == 50000){
    echo "your salary is 50000"."<br>";
}
else if ($var == 40000){
    echo "your salary is 40000"."<br>";
}
else {
    echo "nothing" ."<br>";
}

//function
function myfunc(){
    echo "kal sunday funday hay"."<br>";
}
myfunc();

//foreacharray
$arr = array(
    "name" => "laiba",
    "city" => "karachi",
    "profession" => "teacher"
);
foreach ($arr as $a => $b){
    echo $a, " " , $b."<br>";
}


// associativearray
$ar = array(
    "name" => "laiba",
    "city" => "karachi",
    "profession" => "teacher"
);
echo $ar ["city"]."<br>";


//multidimensional array
$arra = [
    ["ayan",10,"karachi"],
    ["hasan",33,"multan"],
    ["ali",24,"lahore"]
];
echo ($arra[0][1])."<br>";


$emp =  20000;
if ($emp == 50000){
    echo "your salry is 50000"."<br>";
}

else if ($emp == 40000){
    echo "your salry is 40000"."<br>";
}
else {
    echo "your salry doesn't exist"."<br>";
}
?>