<?php
function wunder(){
// Example by deerme.org

//----------------------------------------------------------Estación UniNorte---------------------------------------------------------
//$data = file_get_contents("https://www.wunderground.com/personal-weather-station/dashboard?ID=IATLNTIC4#history"); 


//WIND SPEED
//if ( preg_match('|<div id="windCompassSpeed" class="wx-data" data-station="IATLNTIC4" data-variable="wind_speed">\s+<h4><span class="wx-value">\s+(.*?)\s+</span>\s+</h4>|is' , $data , $cap ) )
//{   
//        echo $data // Va a la URL
//        $windspeed=$cap[1];
//        echo 'Wind Speed = '.$windspeed.'.'."<br>"; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
//        echo ' ';
//}   

//UV INDEX
// if ( preg_match('|<div class="small-7 medium-6 columns">UV:</div>\s+<div class="small-5 medium-6 columns">(.*?)\s+<div id="uv_dots"></div></div>|is' , $data , $cap ) )
// {   
//         //echo $data // Va a la URL
//         $uvindex=$cap[1];
//         echo 'UV Index = '.$uvindex.'.'."<br>"; 
// } 

// //SOLAR RADIATION
// if ( preg_match('|<span class="wx-data" data-station="IATLNTIC4" data-variable="solarradiation">\s+<span class="wx-value">(.*?)</span>|is' , $data , $cap ) )
// {   
//         //echo $data // Va a la URL
//         $solarradiation=$cap[1];
//         echo 'Solar radiation = '.$cap[1].'.'."<br>"; 
// } 

// //TEMPERATURE
// if ( preg_match('|<span class="wx-data" data-station="IATLNTIC4" data-variable="temperature">\s+<span class="wx-value">(.*?)</span>|is' , $data , $cap ) )
// {   
//         //echo $data // Va a la URL
//         $temperature=$cap[1];
//         if ($temperature>=50){$temperature=($temperature-32)/1.8;$temperature=round($temperature,2);}

//         echo 'Temperature = '.$temperature.' C.'."<br>"; 
// } 

// //HUMIDITY
// if ( preg_match('|<span class="wx-data" data-station="IATLNTIC4" data-variable="humidity">\s+<span class="wx-value">(.*?)</span><span class="wx-unit">%</span>|is' , $data , $cap ) )
// {   
//         //echo $data // Va a la URL
//         $humidity=$cap[1];
//         echo 'Humidity = '.$humidity.'%.'."<br>"; 
// }


// $data = file_get_contents("https://www.wunderground.com/cgi-bin/findweather/getForecast?query=10.9759642,-74.7997319");

// //WIND DIRECTION
// //if ( preg_match('|<div id="windCompass" class="wx-data" data-station="IATLNTIC4" data-variable="wind_dir_degrees" data-update-effect="wind-compass" style="transform:rotate('.'.*'.'deg);">|is', $data , $cap ) )
// if ( preg_match('|<div id="windCompass" class="wx-data" data-station="IATLNTIC4" data-variable="wind_dir_degrees" data-update-effect="wind-compass" style="transform:rotate(.*?deg)|is', $data , $cap ) )
// {       
//         //echo $data // Va a la URL
//         $waux=$cap[1];
//         $wdir=substr($waux,1,3);
//         echo 'Wind_Dir = '.$wdir.'.'; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
// }

//---------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------Estación Magdalena-------------------------------------------------------------
$data = file_get_contents("https://www.wunderground.com/personal-weather-station/dashboard?ID=IMAGDALE7"); 

//WIND SPEED
if ( preg_match('|<div id="windCompassSpeed" class="wx-data" data-station="IMAGDALE7" data-variable="wind_speed">\s+<h4><span class="wx-value">\s+(.*?)\s+</span>|is' , $data , $cap ) )
{   
        //echo $data; // Va a la URL
        $windspeed=$cap[1];
        echo 'Wind Speed = '.$windspeed.'.'."<br>"; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
        
}else{
		echo 'Wind Speed not found'."<br>";
}

//UV INDEX

if ( preg_match('|<div class="small-7 medium-6 columns">UV:</div>\s+<div class="small-5 medium-6 columns">(.*?) <div id="uv_dots"></div></div>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $uvindex=$cap[1];
        echo 'UV Index = '.$uvindex.'.'."<br>"; 
}else{
		echo 'UV Index not found'."<br>";
} 

//SOLAR RADIATION
if ( preg_match('|<span class="wx-data" data-station="IMAGDALE7" data-variable="solarradiation">\s+<span class="wx-value">(.*?)</span>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $solarradiation=$cap[1];
        echo 'Solar radiation = '.$cap[1].'.'."<br>"; 
}else{
		echo 'Solar radiation not found'."<br>";
}  

// TEMPERATURE
if ( preg_match('|<span class="wx-data" data-station="IMAGDALE7" data-variable="temperature">\s+<span class="wx-value">(.*?)</span>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $temperature=$cap[1];
        if ($temperature>=50){$temperature=($temperature-32)/1.8;$temperature=round($temperature,2);}

        echo 'Temperature = '.$temperature.' C.'."<br>"; 
}else{
		echo 'Temperature not found'."<br>";
}  

// HUMIDITY
if ( preg_match('|<span class="wx-data" data-station="IMAGDALE7" data-variable="humidity">\s+<span class="wx-value">(.*?)</span><span class="wx-unit">%</span>|is' , $data , $cap ) )
{   
        //echo $data // Va a la URL
        $humidity=$cap[1];
        echo 'Humidity = '.$humidity.'%.'."<br>"; 
}else{
		echo 'Humidity not found'."<br>";
}  


//WIND DIRECTION
if ( preg_match('|<div id="windCompass" class="wx-data" data-station="IMAGDALE7" data-variable="wind_dir_degrees" data-update-effect="wind-compass" style="transform:rotate(.*?deg)|is', $data , $cap ) )
{       
        //echo $data // Va a la URL
        $waux=$cap[1];
        $wdir=substr($waux,1,3);
        echo 'Wind_Dir = '.$wdir.'.'; //Toma la variable Wind Speed, cap es un array que solo tiene 1 posición.
}else{
		echo 'Wind_Dir not found'."<br>";
}  
//---------------------------------------------------------------------------------------------------------------------------------------

//CONECTION TO DB 
$user='mpardo';
$pssd='pardo1234';
$connect_todb = new mysqli('127.5.177.130:3306',$user,$pssd,'trackmypower');

$query = "SET  SESSION time_zone = '-5:00';";
$query .= "INSERT INTO `wundergrounddata` (`id`, `date_time`, `temperature`, `humidity`, `wind_speed`, `uv_index`, `solar_radiation`,`wind_dir`) VALUES (NULL, NOW(), '$temperature', '$humidity', '$windspeed', '$uvindex', '$solarradiation','$wdir');";

$result = mysqli_multi_query($connect_todb,$query);

}


?>