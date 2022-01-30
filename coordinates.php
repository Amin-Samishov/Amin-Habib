<?php
$longitude = readline('Please write a longitude');
$latitude = readline('Please write a latitude');
$min_longitude_latitude_value=20.45684;
$max_longitude_latitude_value=30.45235;
$type_of_longitude = gettype($longitude);
$type_of_latitude = gettype($latitude);


function coordinates($latitude, $longitude){

   if ($type_of_longitude !== "float") { //проверяем тип долготы 
       return "invalid longitude, is not a float!";
   }
   else{
       return $longitude;
   }

echo'<br>';

   if ($type_of_latitude !== "float") { //проверяем тип широты
       return "invalid latitude, is not a float!";
   }
   else{
       return $latitude;
   }

   //количество  символов долготы
$count_of_longitude = count($longitude); 
return 'количество  символов долготы : ' . $count_of_longitude;


   //количество  символов широты
$count_of_latitude = count($latitude);
return 'количество  символов широты : ' . $count_of_longitude;

//находится ли в моем квадарате заданные координаты?
if ($longitude < $min_longitude_latitude_value) { 
   return "error 422 coordinates are outside my square";
}

if ($latitude > $max_longitude_latitude_value ) {
    return "error 422 coordinates are outside my square";
}

return "Ok!";

}


