<?php 

$city=$_GET['city'];
$city=str_replace(" ","", $city);
 if( $contents= @file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest")){


preg_match('/<p class="b-forecast__table-description-content"><span class="phrase">(.*?)</s', $contents,$matches);
if (!is_null($matches))
	{echo $matches[1];}
}
 ?>