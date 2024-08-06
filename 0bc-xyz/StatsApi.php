<?php

$ShortenUrl = $_POST['UrlEntered'];
header('Content-Type: text/xml');
include ("database_connect.php");
include("getShortenAndUrlId.php");

$UrlId = getUrlId($ShortenUrl);
$checkQuery = mysqli_query($con, "SELECT COUNT(*) as cnt,OS AS OSName FROM statistics WHERE UrlId = '$UrlId' group by OS");
$checkQueryClicks = mysqli_query($con, "SELECT TotalClicks,ShortenAttempts FROM userdetails WHERE UrlId = '$UrlId'");
$checkQueryClicksResult = mysqli_fetch_array($checkQueryClicks);
$TotalClicks = $checkQueryClicksResult['TotalClicks'];
$ShortenAttempts = $checkQueryClicksResult['ShortenAttempts'];
echo "<statistics>";

echo "<totalclicks>" . $TotalClicks . "</totalclicks>";
echo "<shortenattempts>" . $ShortenAttempts . "</shortenattempts>";

while ($checkResult = mysqli_fetch_array($checkQuery)) {
    $OSCounts[] = $checkResult['cnt'];
    $OS[] = $checkResult['OSName'];
}
for ($i = 0; $i < count($OS); $i++) {
    echo "<os>";
    echo "<name>" . $OS[$i] . "</name>";
    echo "<count>" . $OSCounts[$i] . "</count>";
    echo "</os>";
}

$checkQueryBrowser = mysqli_query($con, "SELECT COUNT(*) as cntBrowser,Browser AS BrowserName FROM statistics WHERE UrlId = '$UrlId' group by Browser");

$solutions = array();

while ($row = mysqli_fetch_array($checkQueryBrowser)) {
    $solutions[] = $row['BrowserName'];
    $countBrowser[] = $row['cntBrowser'];
}
for ($i = 0; $i < count($solutions); $i++) {

    echo "<browser>";
    echo "<name>" . $solutions[$i] . "</name>";
    echo "<count>" . $countBrowser[$i] . "</count>";
    echo "</browser>";
}

$checkLocation = mysqli_query($con, "SELECT COUNT(*) as cntCountry,Country AS CountryName,COUNT(State) as cntState, State,COUNT(City) as cntCity,City FROM statistics WHERE UrlId = '$UrlId' group by Country");

while ($row = mysqli_fetch_array($checkLocation)) {
    $country[] = $row['CountryName'];
    $countCountry[] = $row['cntCountry'];
    $state[] = $row['State'];
    $countState[] = $row['cntState'];
    $city[] = $row['City'];
    $countCity[] = $row['cntCity'];
}
for ($i = 0; $i < count($country); $i++) {
    echo "<country>";
    echo "<name>" . $country[$i] . "</name>";
    echo "<count>" . $countCountry[$i] . "</count>";
    /*echo "<state>";
    echo "<name>" . $state[$i] . "</name>";
    echo "<count>" . $countState[$i] . "</count>";
    echo "<city>";
    echo "<name>" . $city[$i] . "</name>";
    echo "<count>" . $countCity[$i] . "</count>";
    echo "</city>";

    echo "</state>";*/

    echo "</country>";
}

echo "</statistics>";
?>