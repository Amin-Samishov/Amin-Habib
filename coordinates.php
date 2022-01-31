<?php

$type_of_longitude = gettype($longitude);
$type_of_latitude = gettype($latitude);

$min_longitude_latitude_value=20.45684;
$max_longitude_latitude_value=30.45235;

$count_of_longitude = count($longitude); 
$count_of_latitude = count($latitude);

function coordinates($latitude, $longitude){
    $longitude = readline('Please write a longitude');
    echo '<br>';
    $latitude = readline('Please write a latitude');


function checkCoordinatesType($type_of_longitude, $type_of_latitude, $longitude, $latitude){   
    if (!is_float($type_of_longitude)) { //проверяем тип долготы 
        return "invalid longitude, is not a float!";
    }
    else{
        return $longitude;
    }
 
 echo'<br>';
 
    if (!is_float($type_of_latitude)) { //проверяем тип широты
        return "invalid latitude, is not a float!";
    }
    else{
        return $latitude;
    }
}

echo '<br>';

function countCoordinatesNumber($count_of_longitud, $count_of_latitude, $longitude, $latitude ){
   //количество  символов долготы
if ($count_of_longitude <= 1) {
    return "Error, longitude too short!";
}else{
    return 'количество  символов долготы : ' . $count_of_longitude;
}

echo '<br>';

if ($count_of_latitude <= 1) {
    return "Error, latitude too short!";
}else{
    return 'количество  символов широты : ' . $count_of_longitude;}
   //количество  символов широты
}    

echo '<br>';

function checkCoordinatesLocation($min_longitude_latitude_value, $max_longitude_latitude_value, $longitude, $latitude ){


//находится ли в моем квадарате заданные координаты?
if ($longitude < $min_longitude_latitude_value) { 
   return "error 422 coordinates are outside my square";
}else{
    return "Ok. longtitude coordinates in my square!";
}

if ($latitude > $max_longitude_latitude_value ) {
    return "error 422 coordinates are outside my square";
}else {
    return "Ok. latitude coordinates in my square!";
}
}


} return "ok!";


