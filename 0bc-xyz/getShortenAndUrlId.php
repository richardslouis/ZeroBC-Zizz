<?php

// Function Returns the Shortened Url for the NewUrlId
function getShortenedUrl($NewUrlId) {
    $alphabets = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $base = 62;
    $domainID = $NewUrlId;
    $ShortenT = "";
    while ($domainID >= $base) {
        $rem = $domainID % $base;
        $charA1 = substr($alphabets, $rem, 1);
        $ShortenT = $ShortenT . $charA1;
        $domainID = intval($domainID / $base);
    }
    $charA2 = substr($alphabets, $domainID, 1);
    $ShortenT = $ShortenT . $charA2;
    $Shorten = strrev($ShortenT);
    return $Shorten;
}

//Function returns the UrlId
function getUrlId($ShortenUrl) {
    $alphabets = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $base = 62;
    $Sum = 0;

    for ($i = 0; $i < strlen($ShortenUrl); $i++) {
        $pos = strpos($alphabets, $ShortenUrl{$i});
        $Sum = ($Sum * $base) + $pos;
    }
    return $Sum;
}

?>
