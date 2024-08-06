// MAIN

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
			
			
// QR

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

