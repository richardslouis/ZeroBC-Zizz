<?php

$UserUrl = $_POST['UrlEntered'];
$isTypo = $_POST['Typo'];
$DesiredUrl = $_POST['DesiredUrlEntered'];
$cryptotype = $_POST['cryptotype'];

$UserUrl = urldecode($UserUrl);
include ("shortenUrlAndStatusCode.php");
$Shorten = HandleUrl(trim($UserUrl),$isTypo === 'true'? true: false,$DesiredUrl,$cryptotype);
echo $Shorten;
?>