<?php
$bg = array('http://www.servergorich.com/adpotbox/nowlink/d/1.jpg', 'http://www.servergorich.com/adpotbox/nowlink/d/2.jpg', 'http://www.servergorich.com/adpotbox/nowlink/d/3.jpg', 'http://www.servergorich.com/adpotbox/nowlink/d/4.jpg', 'http://www.servergorich.com/adpotbox/nowlink/d/5.jpg', 'http://www.servergorich.com/adpotbox/nowlink/d/6.jpg', 'http://www.servergorich.com/adpotbox/nowlink/d/7.jpg'); // array of filenames

$i = rand(0, count($bg) - 1); // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<style type="text/css">
    body{
        background: url(<?php echo $selectedBg; ?>) no-repeat;
        background-size: 100%;
        background-color: black;
    }
</style>
<body>
</body>