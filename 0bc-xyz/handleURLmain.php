<?php

$UserUrl = $_POST['UrlEntered'];
$isTypo = $_POST['Typo'];

$UserUrl = urldecode($UserUrl);
include ("shortenUrlAndStatusCode.php");
$Shorten = HandleUrl(trim($UserUrl),$isTypo === 'true'? true: false );
echo $Shorten;
?>