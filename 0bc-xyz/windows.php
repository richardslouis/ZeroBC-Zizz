<html>
    <head>
        <title>0bc.xyz | Ultrafast URL Shortening</title>
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
        //header("Location: updatew.html"); 
		//}
		?>
		
		<script>
		function getStylesheet() {
   			 var currentTime = new Date().getHours();
    			if (0 <= currentTime&&currentTime < 4) {
       			 document.write("<link rel='stylesheet' href='assets/css/night.css' type='text/css'>");
    			}
    			if (4 <= currentTime&&currentTime < 21) {
        		document.write("<link rel='stylesheet' href='assets/css/main.css' type='text/css'>");
    			}
    			if (21 <= currentTime&&currentTime < 24) {
        		document.write("<link rel='stylesheet' href='assets/css/night.css' type='text/css'>");
    			}
				}
			getStylesheet();
		</script>

		<noscript><link rel="stylesheet" href="assets/css/main.css" /></noscript>
		
		
        <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ie9.css" />
        <![endif]-->
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="assets/css/ie8.css" />
        <![endif]-->
        <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
        </noscript>
        <script src="js/jquery-1.11.3.min.js"></script>
		
		<?php
		if ($_COOKIE['ccpad'] != "yes") { 
        setcookie("ccpad", "yes", time() + (100 * 1)); //(86400 * 30) 86400 = 1 day 
        header("Location: wad.php"); 
		}
		?>
		
    </head>
    <body> <!-- class="is-loading" onload="updateIndicator()" ononline="updateIndicator()" onoffline="updateIndicator()" -->
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Main -->
            <section id="main">
			<p><span id="indicator"></span></p>
                <header>
                    <span class="avatar"><img src="images/avatar.png" alt="" /></span>
					<h1>0bc.xyz</h1>
                    <h6>Shorten URL | <font color="#E51288"><i><a href="http://l2.paperbooklet.com/app/app.php">Clipboard</a></i></font></h6><br>
			<!-- Chrome and Mozilla | Safari -->
		  	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
  			<script>
    		var OneSignal = OneSignal || [];
				OneSignal.LOGGING = true;
    		OneSignal.push(["init", {
     		 appId: "6a0719d3-7333-4bd9-8972-9c1df5eae3e0",
     		 subdomainName: 'http://0bcxyz.onesignal.com',
				safari_web_id: 'web.onesignal.auto.3b385de2-9d64-4c4d-bcc9-f67f460e32ab',
      			notifyButton: {
        	 enable: true // Set to false to hide
      		}
    		}]);
  			</script>	
                </header>

                <footer>
                    <form method="post" >
                        <input type="text" name="UrlEntered" id="UrlEntered" placeholder="Paste URL here" /><br>
						<h6>Generated URL is<br>case sensitive | <a href="0bcTnC.htm" target="_blank">T&C</a></h6>
                    </form>
                    <br/>
                    <ul class="icons">
                        <li style="cursor: pointer; cursor: hand; "><img src="images/ok.png" title='Go' onclick="shortenUrl()" />	</li>
                        <!-- <li style="cursor: pointer; cursor: hand; "><img src="images/copy.png" title='Copy' onclick="getCode('Shorten Link:');"  />	</li> -->
                        <!--<li><a href="#" class="fa-twitter">Twitter</a></li>-->
                        <!--	<li><a href="#" class="fa-instagram">Instagram</a></li>-->
                        <!--	<li><a href="#" class="fa-facebook">Facebook</a></li>-->
                        <li style="cursor: pointer; cursor: hand; "><img src="images/reset.png" title='Reset' onclick="resetAll()"  />	</li>
                    </ul>
					<!-- <font size='1'>Shorten to 0bcxyz.com | API &amp; Pro Stats</font> -->
                    <div id="loading" style="display:none" ><img src="images/loader.gif" alt="" /></div>
                </footer>
            </section>
            <!-- Footer -->
            <footer id="footer"><!--
                <font color="white">
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
                    alert("Please enter a valid url to shorten!");
                }
            }

            //Function shortenUrl() sends the Full length Url including Username and Category to the server using xmlhttp
            function shortenUrl()
            {
				
				if(document.getElementById("UrlEntered").value.indexOf("0bc") == 7){
					document.getElementById("UrlEntered").value = document.getElementById("UrlEntered").value.replace("https://", "").trim();
					//alert("This is already a shortened link");
					return;
				}
				
				if(document.getElementById("UrlEntered").value.indexOf("0bc") == 0){
					alert("This is already a shortened link");
					return;
				}
				
				var urlregex =/^(?:(?:https?|ftp):\/\/)?(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
				
				if(!urlregex.test(document.getElementById("UrlEntered").value)){
					alert("Please enter a valid URL");
					return;
				}
                var UrlEnteredByUser = encodeURIComponent(document.getElementById("UrlEntered").value);
                $("#loading").show();
                var isTypo =   false;

                $.post("handleURLmain.php", {XDEBUG_PROFILE:1,UrlEntered: UrlEnteredByUser,Typo: isTypo })
                        .done(function (data) {
                            if (data.indexOf("No such host is known") == -1)
                            {

                                //document.getElementById("UrlEntered").value = data.replace("http://", "").trim();
								document.getElementById("UrlEntered").value = data.trim();

                            }
                            else
                            {
                                alert("Url doesn't exist..");
                            }
                            $("#loading").hide();

                        });


            }

            //Function resetAll() clears the text elements and reset everything
            function resetAll()
            {

                document.getElementById('UrlEntered').value = "";


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
    </body>
</html>