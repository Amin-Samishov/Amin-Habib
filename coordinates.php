<?php

function coordinates($latitude, $longitude){

    $longitude = readline('Please write a longitude');
    echo '<br>';
    $latitude = readline('Please write a latitude');
    echo coordinates( $latitude,  $longitude);
    
} return "ok!";

function validationCount($count_of_longitude, $count_of_latitude, $longitude, $latitude ){
    //количество  символов долготы
    $count_of_longitude = count($longitude); 
    $count_of_latitude = count($latitude);
if ($count_of_longitude <= 1) {
    return "Error, longitude too short!";
}
    return 'количество  символов долготы : ' . $count_of_longitude;


echo '<br>';

if ($count_of_latitude <= 1) {
    return "Error, latitude too short!";
}
    return 'количество  символов широты : ' . $count_of_longitude;
}   //количество  символов широты
    

echo '<br>';

function validateType ($type_of_longitude, $type_of_latitude, $longitude, $latitude){   
    $type_of_longitude = gettype($longitude);
    $type_of_latitude = gettype($latitude);    

    if (!is_float($type_of_longitude)) { //проверяем тип долготы 
        return "invalid longitude, is not a float!";
    }
        return $longitude;
    
 
 echo'<br>';
 
    if (!is_float($type_of_latitude)) { //проверяем тип широты
        return "invalid latitude, is not a float!";
    }
        return $latitude;
    }

echo '<br>';

function checkLocation($coordinates_max, $coordinates_min , $longitude, $latitude ){
//находится ли в моем квадарате заданные координаты?
$coordinates_min=20.45684;
$coordinates_max=30.45235;

if ($longitude <= $coordinates_min) { 
   return "error 422 coordinates are outside my square";
}
    return "Ok. longtitude coordinates in my square!";


if ($latitude >= $coordinates_max ) {
    return "error 422 coordinates are outside my square";
}
    return "Ok. latitude coordinates in my square!";
}




