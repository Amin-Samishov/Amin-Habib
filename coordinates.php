<?php

$longitude = readline('Please write a longitude');
echo '<br>';
$latitude = readline('Please write a latitude');

function coordinates($latitude, $longitude){


function checkType($type_of_longitude, $type_of_latitude, $longitude, $latitude){   
    $type_of_longitude = gettype($longitude);
    $type_of_latitude = gettype($latitude);
    
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

function coordinatesCounts($count_of_longitude, $count_of_latitude, $longitude, $latitude ){
    $count_of_longitude = count($longitude); 
    $count_of_latitude = count($latitude);
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

function checkLocation($coordinates_max, $coordinates_min , $longitude, $latitude ){

    $coordinates_min=20.45684;
    $coordinates_max=30.45235;
//находится ли в моем квадарате заданные координаты?
if ($longitude < $coordinates_min) { 
   return "error 422 coordinates are outside my square";
}else{
    return "Ok. longtitude coordinates in my square!";
}

if ($latitude > $coordinates_max ) {
    return "error 422 coordinates are outside my square";
}else {
    return "Ok. latitude coordinates in my square!";
}
}


} return "ok!";


