<html>

    <title>zizz.cloud URL</title>
    <?php
//echo "Something Incorrect<br>";
    $link1 = $_SERVER['REQUEST_URI'];
    $params = @split("/", $link1);
    $actual_link = $params[1];

	$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $actual_link;
    /* echo "$_SERVER[HTTP_HOST] <br>";
      echo "$_SERVER[REQUEST_URI]<br>";
      echo "$_SERVER[SCRIPT_NAME]";
      exit; */

    /* $link1 = $_SERVER['REQUEST_URI'];
      #remove the directory path we don't want
      //$request  = str_replace("/envato/pretty/php/", "", $_SERVER['REQUEST_URI']);

      #split the path by '/'
      $params = split("/", $link1);
      //echo $params[2]; */

    include("database_connect.php");
    include("getShortenAndUrlId.php");
    // $UrlId = getUrlId($actual_link);
    // $userquery = mysqli_query($con, "SELECT CanAdvertise,RCCode,Url FROM userdetails WHERE UrlId = '$UrlId'");
    $userquery = mysqli_query($con, "SELECT CanAdvertise,RCCode,Url FROM userdetails WHERE ShortendUrl = '$actual_link'");
    $result = mysqli_fetch_array($userquery);


    $UserUrlWithDomainName = $result['Url'];
    $CanAdvertise = $result['CanAdvertise'];
    $RCCode = $result['RCCode'];
    $userURL = $UserUrlWithDomainName;



    if (empty($userURL)) {
		//echo "<br>";
        echo '<meta http-equiv="refresh" content="0; url=404.html" />';
        //echo '<font size="20" color="#FF0080">';
        //echo "Oh uh! The requested 0bc.xyz URL does not exist!! :(";
		//echo "<br>";
		//echo "Shorten at ease by <a href='http://0bc.xyz'><font size='20' color='#FF0080'>clicking here</font></a>";
        //include("advertise.php");
        //echo "</font>";
        //echo "</center>";
    }
    if ($CanAdvertise == "Y") {
        echo "<center>";
        echo '<font size="50" color="#FF0080">';
        if ($RCCode == "1") {
            echo "Link expired";
        } elseif ($RCCode == "2") {
            echo "Link is broken";
        } else {
            echo"Something went wrong";
        }
        include("advertise.php");
        echo "</font>";
        echo "</center>";
    } else {
		include ("GetUserDetails.php");
		$userquery1 = mysqli_query($con, "insert into statistics ( `UrlId`, `OS`, `Browser`, `BrowserVersion`, `IPAddress`, `MobileIndicator`, `Country`, `City`, `State`, `Referrer`, `UserIdentification`, `Date`,`ActualLink`) VALUES ('$UrlId','$operatingSystem','$browserName','$browserVersion','$ip','$isMobile','$country','$city','$state','$referrer',DEFAULT,DEFAULT,'$actual_link1');");
        $sql = "UPDATE userdetails SET TotalClicks=TotalClicks+1 WHERE UrlId = '$UrlId'";
        $con->query($sql);
		//sleep(15);
		//echo 'You will be redirected shortly...';
       
		/* header("HTTP/1.1 302 Found");
		$z = rand(0,1);
		if($z == 0){
		$bg = array(''); // array of filenames
		
		$i = rand(0, count($bg) - 1); // generate random number size of the array
		$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
		echo '<style type="text/css">
			body{
				background: url('.$selectedBg.') center no-repeat;
				background-size: 100%;
				background-color: #FFFFFF;
			}

		</style>
		<body>
		</body>';
		echo "<script>setTimeout(\"location.href = '$userURL';\",5500);</script>";
		}
		else */
			
       header("Location: $userURL ");
    }

    mysqli_close($con);
    ?>

</html>
