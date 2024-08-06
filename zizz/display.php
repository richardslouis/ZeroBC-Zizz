<?php
	$id=$_GET['id'];;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Update</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="update/assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Zizz.Cloud</h1>
							<?php
								include("database_connect.php");
								$checkQuery = mysqli_query($con, "SELECT ShortendUrl, cryptotype, DomainName FROM userdetails WHERE UrlId='$id'");
								    $checkResult = mysqli_fetch_array($checkQuery);
								    $urlname = $checkResult['ShortendUrl'];
								    $cryptotype = $checkResult['cryptotype'];
								    $address = $checkResult['DomainName'];
								    $generateQr = "http://api.qrserver.com/v1/create-qr-code/?data=".$address;
							?>
							<p class="major"><!--[--><b>URL Name:</b><b><?php echo $urlname; ?></b><br><b>Crypto type:</b><b><?php echo $cryptotype; ?></b><br><b>Address:</b><b><?php echo $address; ?></b><br><u><a href="#" class='showContent'>Generate QR</a></u><br><div id="result" style="display:none;">
<img src="<?php echo $generateQr; ?>"></div><br><br>Kindly check <b>address</b> before using it for transfers. <b>Zizz does not take responsibility</b> for any information mistakes in above data.<!--]--></p>
							<ul class="actions vertical">
								<li><a href="https://zizz.cloud" class="button big wide smooth-scroll-middle">Create/Share using Zizz</a></li>
							</ul>
							<p class="major">App powered by <a href="https://doifoo.cloud">Doifoo</a></p>
						</div>
						
					</section>




		<!-- Scripts -->
			<script src="update/assets/js/jquery.min.js"></script>
			<script src="update/assets/js/jquery.scrollex.min.js"></script>
			<script src="update/assets/js/jquery.scrolly.min.js"></script>
			<script src="update/assets/js/skel.min.js"></script>
			<script src="update/assets/js/util.js"></script>
			<script src="update/assets/js/main.js"></script>
			<script>
				$('a.showContent').on('click',function(e){
					document.getElementById("result").style.display='block';
					});
			</script>
	</body>
</html>