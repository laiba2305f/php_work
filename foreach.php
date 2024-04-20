<?php

// foreachloop
$name = ["Ali","Amjad","wajid"];
foreach ($name as $a){
    echo $a;
}

function myMessage(){
    echo "hello world"."<br>"."<br>";
}
myMessage();


// foreacharray
// $arr = array (
//     "Name" => "wari",
//     "age" => "20",
//     "city" => "karachi"


// );
//     foreach ($arr as $a =>$b){
//         echo $a,$b."<br>";
//     }

//foreacharray

$arr = array (
    "name" => "laiba",
    "age" => 19,
    "city" => "karachi"
);
    foreach($arr as $a => $b){
        echo $a," ",$b."<br>";
    }


$lai = array (
    "name" => "ali",
    "age" => 28,
    "city" => "hyd"
) ;
    foreach ($lai as $a => $b){
        echo $a, " ", $b."<br>";
    }

?>