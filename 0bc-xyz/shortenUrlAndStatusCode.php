<?php

function HandleUrl($UserURL, $isTypo) {


    $d = "x" . $UserURL;
    if ((strpos($d, 'http://')) != 1 && ((strpos($d, 'https://') != 1)) && (strpos($d, 'ftp://') != 1)) {

        $UserURL = "http://" . $UserURL;
    }

    $DomainNameOfUserUrl;
    $Url2;
    $Url3;
    $Url4;
    if (strpos($UserURL, '0bc.xyz') != 7) {

        /*  if (strpos('a'.strrev($UserURL), "/") == 1) {
          $UserURL = substr($UserURL,0,strlen($UserURL) - 1) ;
          } */
        if ($isTypo) {
            $Url1 = $UserURL;
            if (strpos($UserURL, 'www') == false) {
                $Url3 = $UserURL;
                $pos = strpos($UserURL, "://");
                if ($pos !== false && $pos < 8) {
                    $Url1 = substr_replace($UserURL, "://www.", $pos, 3);
                }
            } else {
                $Url1 = $UserURL;
                $pos = strpos($UserURL, "://www.");
                if ($pos !== false && $pos < 8) {
                    $Url3 = substr_replace($UserURL, "://", $pos, 7);
                }
            }
            if (strpos('a' . strrev($Url1), "/") == 1) {
                $Url2 = substr($Url1, 0, strlen($Url1) - 1);
            } else {
                $Url2 = $Url1;
                $Url1 = $Url2 . "/";
            }

            if (strpos('a' . strrev($Url3), "/") == 1) {
                $Url4 = substr($Url3, 0, strlen($Url3) - 1);
            } else {
                $Url4 = $Url3;
                $Url3 = $Url4 . "/";
            }


            $urlExistence1 = isUrlExist($Url1);
            $urlExistence2 = isUrlExist($Url2);
            $urlExistence3 = isUrlExist($Url3);
            $urlExistence4 = isUrlExist($Url4);

            if (!($urlExistence1) && !($urlExistence2) && !($urlExistence3) && !($urlExistence4)) {
                return "No such host is known";
            } else {

                if ($urlExistence1) {
                    $UserURL = $Url1;
                } else if ($urlExistence2) {
                    $UserURL = $Url2;
                } else if ($urlExistence3) {
                    $UserURL = $Url3;
                } else {
                    $UserURL = $Url4;
                }
            }
            return fetchShortenUrl($UserURL);

        } else {
            return fetchShortenUrl($UserURL);
        }
    } else {
        return $UserURL;
    }
}

function fetchShortenUrl($UserURL) {
    include("database_connect.php"); // connect with the database
    include("getShortenAndUrlId.php");
    $UserUrlSplit = explode("/", $UserURL);

    $DomainNameOfUserUrl = trim($UserUrlSplit[2]);


    $checkQuery = mysqli_query($con, "SELECT ShortendUrl,UrlId FROM userdetails WHERE (CAST(Url as BINARY)) = '$UserURL' AND DomainName = '$DomainNameOfUserUrl' AND CanAdvertise ='N';");
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




        $Shorten = getShortenedUrl($newURLID);


        $shortUrl = $DomainNameOfHost . $Shorten;

        $sqlinsert = "INSERT INTO userdetails VALUES ('$newURLID',  '$Shorten','$UserURL','$DomainNameOfUserUrl',DEFAULT,DEFAULT,DEFAULT,DEFAULT,DEFAULT,DEFAULT)";

        mysqli_query($con, $sqlinsert);
        mysqli_close($con);
        return trim($shortUrl);
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

