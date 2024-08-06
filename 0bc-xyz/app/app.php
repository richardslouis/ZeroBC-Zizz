<html lang = "en" manifest = "cache.manifest>
    <head>
			<title>0bc.xyz | URL Shortening</title>
<meta name="title" content="0bc.xyz | URL Shortening"/>
	<meta name="description" content="Best utility products from Doifoo to shorten URL, 0bc.xyz (Zero Bit Code). A Richiesoft subdivision which powers this across 12 platforms and multiple extensions."/>
	<meta property="og:title" content="0bc.xyz | URL Shortening" />
	<meta property="og:description" content="Best utility products from Doifoo to shorten URL, 0bc.xyz (Zero Bit Code). A Richiesoft subdivision which powers this across 12 platforms and multiple extensions." />
	<meta property="og:site_name" content="0bc.xyz | URL Shortening" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
	    <?php
		//if ($_COOKIE['0bcxyz2100'] != "yes") { 
        //setcookie("0bcxyz2100", "yes", time() + (86400 * 360));  
        //header("Location: update.html"); 
		//}
		?>
		
		<script>
		function getStylesheet() {
   			 	//var currentTime = new Date().getHours();
    			//if (0 <= currentTime&&currentTime < 4) {
       			 //document.write("<link rel='stylesheet' href='../assets/css/night.css' type='text/css'>");
    			//}
    			//if (4 <= currentTime&&currentTime < 21) {
        		document.write("<link rel='stylesheet' href='../assets/css/main.css' type='text/css'>");
    			//}
    			//if (21 <= currentTime&&currentTime < 24) {
        		//document.write("<link rel='stylesheet' href='../assets/css/night.css' type='text/css'>");
    			//}
				}
			getStylesheet();
		</script>

		<noscript><link rel="stylesheet" href="../assets/css/main.css" /></noscript>
		
		
        <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ie9.css" />
        <![endif]-->
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="assets/css/ie8.css" />
        <![endif]-->
        <noscript>
        <link rel="stylesheet" href="../assets/css/noscript.css" />
        </noscript>
        <script src="../js/jquery-1.11.3.min.js"></script>
		<script src="sweetalert.min.js"></script>
		<style>
		.swal-text {
		padding: 17px;
		border: 1px solid #F0E1A1;
		display: block;
		margin: 22px;
		text-align: center;
		color: #61534e;
		}
		.swal-button {
		background-color: white;
		font-size: 17px;
		border: 1px solid #3e549a;
		text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
		}</style>
		
		<?php
		//if ($_COOKIE['ccpad'] != "yes") { 
        //setcookie("ccpad", "yes", time() + (100 * 1)); //(86400 * 30) 86400 = 1 day 
        //header("Location: ad.php"); 
		//}
		?>
		
    </head>
    <body> <!-- class="is-loading" onload="updateIndicator()" ononline="updateIndicator()" onoffline="updateIndicator()" -->
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Main -->
            <section id="main">
			<p><span id="indicator"></span></p>
                <header>
                    <span class="avatar"><img src="../images/avatar.png" alt="" /></span>
					<h1>Zero-BC</h1>
                    <h6>Link Shortening & Analytics<!-- | <font color="#E51288"><i><a href="http://l2.paperbooklet.com/app/app.php">Clipboard</a></i></font>--></h6><br>
			
                </header>

                <footer>
                    <form method="post" >
                        <input type="text" name="UrlEntered" id="UrlEntered" onpaste="pastetext()" placeholder="Paste URL here" />
						<p id="textp"></p><br>
						<h6>Generated URL is<br>case sensitive | <a href="https://0bc.xyz/0bcTnC.htm">T&C</a></h6>
                    </form>
                    
					<div id="button">
                    <ul class="icons"><br/>
                        <li style="cursor: pointer; cursor: hand; "><img src="../images/ok.png" title='Shorten' onclick="shortenUrl()" />	</li>
                        <li style="cursor: pointer; cursor: hand; "><img src="../images/copy.png" title='help' onclick="help()"  />	</li>
                        <!--<li><a href="#" class="fa-twitter">Twitter</a></li>-->
                        <!--	<li><a href="#" class="fa-instagram">Instagram</a></li>-->
                        <!--	<li><a href="#" class="fa-facebook">Facebook</a></li>-->
                        <li style="cursor: pointer; cursor: hand; "><img src="../images/reset.png" title='Reset' onclick="resetAll()" /></li>
						
                    </ul></div>
					<div id="result" style="display:none;">	
					</div>	
									
					<div id="copy" style="display:none"><br>
					<ul class="icons">
					<li><button onclick="copy('UrlEntered')"><b>Copy above link</b></button></li>
					<li><button onclick="javascript:location.href='app.php'">Try Another</button></li>
					</ul>
					<h6><a href="#" class='showContent'><u>Share via QR Code</u></a></h6>
					</div>
					
					<!-- <font size='1'>Shorten to 0bcxyz.com | API &amp; Pro Stats</font> -->
                    <div id="loading" style="display:none" ><img src="../images/loader.gif" alt="" /></div>
                </footer>
            </section>
            <!-- Footer -->
            <footer id="footer">
                <!--<font color="white">
                <ul class="copyright">
					<li>Made with <span style="font-size:200%;color:red;">&hearts;</span> by Doifoo</li>
                    
                    <li><a href="0bcTnC.htm" target="_blank">T&C</a></li>
                </ul>
                </font>-->
            </footer>
        </div>
        <!-- Scripts -->
        <!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
		
		
		
        <script>
			function updateIndicator() {
				document.getElementById('indicator').textContent = navigator.onLine ? '' : 'Uh-Oh ! Connect to Internet :(';
			}
            if ('addEventListener' in window) {
                window.addEventListener('load', function () {
                    document.body.className = document.body.className.replace(/\bis-loading\b/, '');
                });
                document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');

            }


            /*Function getCode() is used for copying the shortened Url generated once the user clicks on the "Copy" button, 
             Also used to copy it on to the social networking sites like Facebook, twitter, google plus, dribble, pinterest, instagram */
            function getCode(title)
            {
                var code = document.getElementById("UrlEntered").value;
                if (code != "")
                {


                    s = prompt(title, code);
                }
                else
                {
                    swal("Invalid!", "Please enter a valid url to shorten!", "error");
                }
            }

		</script>
		<script type="text/javascript" src="encodeURIComponent.js"></script>
		<script>
			
		//BEGIN COPY
			
			var copy = function(elementId) {

	var input = document.getElementById(elementId);
	var isiOSDevice = navigator.userAgent.match(/ipad|iphone/i);

	if (isiOSDevice) {
	  
		var editable = input.contentEditable;
		var readOnly = input.readOnly;

		input.contentEditable = true;
		input.readOnly = false;

		var range = document.createRange();
		range.selectNodeContents(input);

		var selection = window.getSelection();
		selection.removeAllRanges();
		selection.addRange(range);

		input.setSelectionRange(0, 999999);
		input.contentEditable = editable;
		input.readOnly = readOnly;

	} else {
	 	input.select();
	}

	document.execCommand('copy');
	swal("Copied!", "Congrats, Your shortened link is safe in clipboard. Now share to your friends.", "success")

}

//END

function pastetext() {
    document.getElementById("textp").innerHTML = "Pasted! Next, click green tick.";
}

		function help()
		{swal("Help", "STEP 1 | Paste your long copied URL. (In mobile app, Tap the text field and long press, click 'paste')\n\nSTEP 2 | Click the green tick.\n\n Step 3 | Your unique link is generated which can be copied to clipboard.", "info")}


            //Function resetAll() clears the text elements and reset everything
            function resetAll()
            {

                document.getElementById('UrlEntered').value = "";
				document.getElementById("textp").style.display='none';


            }

            //On enter Url textbox call shortenUrl() function
            $('#UrlEntered').keypress(function (e) {
                var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13)
                {

                    shortenUrl();
                    return false;
                }
            });
			

        </script>
		<script>
				$('a.showContent').on('click',function(e){
					//alert("yes");
					document.getElementById("result").style.display='block';
					var sliderimg = "https://api.qrserver.com/v1/create-qr-code/?data="+document.getElementById("UrlEntered").value;
					//alert(sliderimg);
					//document.getElementById("result").innerhtml("<img src='"+sliderimg+"' />");
					var elem = document.createElement("img");
					elem.setAttribute("src", sliderimg);
					document.getElementById("result").appendChild(elem);
					});
			</script>
    </body>
</html>