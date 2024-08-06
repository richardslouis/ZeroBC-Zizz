<?php

try {
    $arrayLocation = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']));
    $city = $arrayLocation["geoplugin_city"];
    $state = $arrayLocation["geoplugin_region"];
    $country = $arrayLocation["geoplugin_countryName"];
} catch (Exception $ex) {
    $city = "Unknown";
    $state = "Unknown";
    $country = "Unknown";
}
?>

