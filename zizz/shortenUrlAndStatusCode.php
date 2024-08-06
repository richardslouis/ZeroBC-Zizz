<?php

function HandleUrl($UserURL, $isTypo, $DesiredUrl, $cryptotype) {


    $d = "x" . $UserURL;
    // if ((strpos($d, 'http://')) != 1 && ((strpos($d, 'https://') != 1)) && (strpos($d, 'ftp://') != 1)) {

    //     $UserURL = "http://" . $UserURL;
    // }

    $DomainNameOfUserUrl;
    $Url2;
    $Url3;
    $Url4;
    if (strpos($UserURL, 'zizz.cloud') != 7) {
        return fetchShortenUrl($UserURL, $DesiredUrl, $cryptotype);
    } else {
        return $UserURL;
    }
}

function fetchShortenUrl($UserURL, $DesiredUrl, $cryptotype) {
    include("database_connect.php"); // connect with the database
    include("getShortenAndUrlId.php");
    // $UserUrlSplit = explode("/", $UserURL);

    // $DomainNameOfUserUrl = trim($UserUrlSplit[2]);
    $DomainNameOfUserUrl = $UserURL;
    $query=mysqli_query($con, "SELECT ShortendUrl from userdetails where ShortendUrl='$DesiredUrl' and DomainName != '$DomainNameOfUserUrl'");
    $result=mysqli_fetch_array($query);
    if(empty($result)){
        $checkQuery = mysqli_query($con, "SELECT ShortendUrl,UrlId, cryptotype FROM userdetails WHERE (CAST(Url as BINARY)) = '$UserURL' AND DomainName = '$DomainNameOfUserUrl' AND CanAdvertise ='N' AND cryptotype = 'cryptotype' AND ShortendUrl='$DesiredUrl'");
        $checkResult = mysqli_fetch_array($checkQuery);
        $shortUrl = $checkResult['ShortendUrl'];
        $UrlIdFetched = $checkResult['UrlId'];

        if (!empty($checkResult)) {
            $updateAttemptQuery = mysqli_query($con, "UPDATE userdetails SET ShortenAttempts = ShortenAttempts + 1 where UrlId = '$UrlIdFetched';");
            return trim($DomainNameOfHost . $shortUrl );
        } else {

            $selectID = "SELECT MAX(UrlId)AS max FROM userdetails";
            $resultIDrow = mysqli_query($con, $selectID);
            $resultID = mysqli_fetch_array($resultIDrow);

            if (empty($resultID))
                $newURLID = 10001;
            else
                $newURLID = $resultID['max'] + 1;




            // $Shorten = getShortenedUrl($newURLID);
            $Shorten = $DesiredUrl;

            $shortUrl = $DomainNameOfHost . $Shorten;
            $modifiedUserURL="https://zizz.cloud/display.php?id=".$newURLID;
            $sqlinsert = "INSERT INTO userdetails VALUES ('$newURLID',  '$Shorten', '$cryptotype','$modifiedUserURL','$DomainNameOfUserUrl',DEFAULT,DEFAULT,DEFAULT,DEFAULT,DEFAULT,DEFAULT)";

            mysqli_query($con, $sqlinsert);
            mysqli_close($con);
            return trim($shortUrl);
        }
    }
    else{
        return("The name is already taken");
    }

    mysqli_close($con);
}

//function to get Url status
function getStatusCode($Url) {
    try {
        $headers = @get_headers($Url);

        $statusCode = $headers[0];
        return $statusCode;
    } catch (Exception $e) {
        return null;
    }
}

function isUrlExist($Url) {
    try {
        $headers = @get_headers($Url);

        $statusCode = $headers[0];
        if ((strpos($statusCode, "20") >= 1) || (strpos($statusCode, "30") >= 1))
            return true;
        else
            return false;
    } catch (Exception $e) {
        return false;
    }
}

function FindAndReplaceFirstOccur($inputString, $findSubString, $replacementString, $limit) {
    $pos = strpos($inputString, $findSubString);
    if ($pos !== false && $pos < $limit) {
        $replacedString = substr_replace($inputString, $replacementString, $pos, strlen($findSubString));
    }
    return $replacedString;
}
?>

