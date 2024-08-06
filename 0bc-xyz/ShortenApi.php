<?php

$UserUrl = $_POST['UrlEntered'];

$UserUrl = urldecode($UserUrl);
include ("shortenUrlAndStatusCode.php");
$ShortendUrl = HandleUrl($UserUrl, false);
header('Content-Type: text/xml');
echo "<data>";
if ((strpos($ShortendUrl, "No such host is known") === 0)) {
    echo "<error>URL doesnt exist</error>";
} else {
    echo "<userurl>" . urlencode($UserUrl) . "</userurl>";
    echo "<shorturl>" . $ShortendUrl . "</shorturl>";
}
echo "</data>";
?>