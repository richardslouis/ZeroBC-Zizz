<!DOCTYPE HTML>
<html>
	<head>
		<title>Adpotbox</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="adpotbox/assets/css/main.css" />
		<link rel="stylesheet" href="adpotbox/bg/css/style.css">
		<link rel="stylesheet" href="adpotbox/bg/css/style_app.css" type="text/css" />
		<meta http-equiv="refresh" content="7; url=windows.php" />

		
		<SCRIPT language="JavaScript">
		<!-- Begin
		var g_iCount = new Number();

		var g_iCount = 8;

		function startCountdown(){
			if((g_iCount - 1) >= 0){
               g_iCount = g_iCount - 1;
               numberCountdown.innerText = '00:00.0' + g_iCount;
               setTimeout('startCountdown()',1000);
					}
				}
		//  End -->
		</script>
		
		
		<?php
		if ($_COOKIE['ccpad'] != "yes") { 
        setcookie("ccpad", "yes", time() + (100 * 1)); //(86400 * 30) 86400 = 1 day  
		}
		?>
		

	</head>
	<body onLoad="startCountdown()">
	
	
		<!-- Wrapper -->
			<div id="wrapper" class="divided">
			
			
			<section class="main">
			<ul id="scene" class="scene">
				<!-- Layer With Background-Image -->
				<li class="layer" data-depth="0.20">
					<div class="hero-background"></div>
				</li>

				<!-- Layer With Level-1 Objects -->
				<li class="layer" data-depth="0.40">
					<div class="level-1 object-1">
						<img src="adpotbox/bg/images/app/level-1/ellipse_fill_1.png" alt="">
					</div>
					<div class="level-1 object-2">
						<img src="adpotbox/bg/images/app/level-1/ellipse_fill_3.png" alt="">
					</div>
					<div class="level-1 object-3">
						<img src="adpotbox/bg/images/app/level-1/ellipse_fill_4.png" alt="">
					</div>
					<div class="level-1 object-4">
						<img src="adpotbox/bg/images/app/level-1/line.png" alt="">
					</div>
				</li>

				<!-- Layer With Level-2 Objects -->
				<li class="layer" data-depth="0.60">
					<div class="level-2 object-1">
						<img src="adpotbox/bg/images/app/level-2/ellipse_2.png" alt="">
					</div>
					<div class="level-2 object-2">
						<img src="adpotbox/bg/images/app/level-2/ellipse_3.png" alt="">
					</div>
					<div class="level-2 object-3">
						<img src="adpotbox/bg/images/app/level-2/ellipse_fill_2.png" alt="">
					</div>
				</li>

				<!-- Layer With Level-3 Objects -->
				<li class="layer" data-depth="0.80">
					<div class="level-3 object-1">
						<img src="adpotbox/bg/images/app/level-3/ellipse.png" alt="">
					</div>
					<div class="level-3 object-2">
						<img src="adpotbox/bg/images/app/level-3/ellipse_4.png" alt="">
					</div>
					<div class="level-3 object-3">
						<img src="adpotbox/bg/images/app/level-3/line_2.png" alt="">
					</div>
				</li>

				<!-- Layer With Content -->
				<li class="layer" data-depth="0.60">
					<div class="content"><br>
						<p style="text-align:center;color:white"><button class="btn btn-light btn-rounded main-font" disabled><font style="color:white;">Sponsored</font></button> | <button class="btn btn-light btn-rounded main-font"><a href="windows.php"><font style="color:#ffd433;">Skip>></font></a></button></p>
							<b><font style="color:white;text-align:center;"><div align="center" id="numberCountdown"></div></font></b>
							  <div style="align:center">
								<script type="text/javascript">
									<!--
									var imlocation = "images/";
									var currentdate = 0;
									var image_number = 0;
									function ImageArray (n) {
									this.length = n;
									for (var i =1; i <= n; i++) {
									this[i] = ' '
									}
								}
								image = new ImageArray(6)
								image[0] = '1.jpg'
								image[1] = '2.jpg'
								image[2] = '3.jpg'
								image[3] = '4.jpg'
								image[4] = '5.jpg'
								image[5] = '6.jpg'
								var rand = 60/image.length
								function randomimage() {
								currentdate = new Date()
								image_number = currentdate.getSeconds()
								image_number = Math.floor(image_number/rand)
								return(image[image_number])
								}
								document.write("<img style='display:block;margin:0 auto;height:70vh;' src='" + imlocation + randomimage()+ "'>");
									//-->
								</script>
							</div>
								<font style="color:white;text-align:center;"><p class="major" style="text-align:center;">
								<!--[-->Powered by Adpotbox™<!--]--></p></font><br>
					</div>
				</li>

			</ul>
		    </section>
		
		    </div>
		<!-- Scripts -->
			<script src="adpotbox/assets/js/jquery.min.js"></script>
			<script src="adpotbox/assets/js/jquery.scrollex.min.js"></script>
			<script src="adpotbox/assets/js/jquery.scrolly.min.js"></script>
			<script src="adpotbox/assets/js/skel.min.js"></script>
			<script src="adpotbox/assets/js/util.js"></script>
			<script src="adpotbox/assets/js/main.js"></script>
			
				<!--background-->

		<!-- jQuery -->
		<script type="text/javascript" src="adpotbox/bg/js/jquery.min.js"></script>
		<!-- Custom JS -->
		<script type="text/javascript" src="adpotbox/bg/js/script.js"></script>

	</body>
</html>