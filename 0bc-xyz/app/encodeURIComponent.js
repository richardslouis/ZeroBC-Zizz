//Function shortenUrl() sends the Full length Url including Username and Category to the server using xmlhttp
            function shortenUrl()
            {
				
				if(document.getElementById("UrlEntered").value.indexOf("0bc") == 7){
					document.getElementById("UrlEntered").value = document.getElementById("UrlEntered").value.replace("http://", "").trim();
					//alert("This is already a shortened link");
					return;
				}
				
				if(document.getElementById("UrlEntered").value.indexOf("0bc") == 0)
				{
					swal("Sure?", "This is already a shortened link.", "warning");
					return;
				}
				
				//01 DISABLED URLs | UPDATE 16-04-2018
				if(
				
				/*00001*/(document.getElementById("UrlEntered").value.indexOf("bit.ly/") >= 0) ||
				/*00002*/(document.getElementById("UrlEntered").value.indexOf("ow.ly/") >= 0) ||
				/*00003*/(document.getElementById("UrlEntered").value.indexOf("x.co/") >= 0) ||
				/*00004*/(document.getElementById("UrlEntered").value.indexOf("akari.in/") >= 0) ||
				/*00005*/(document.getElementById("UrlEntered").value.indexOf("waa.ai/") >= 0) ||
				/*00006*/(document.getElementById("UrlEntered").value.indexOf("soo.gd/") >= 0) ||
				/*00007*/(document.getElementById("UrlEntered").value.indexOf("ipt.pw/") >= 0) ||
				/*00008*/(document.getElementById("UrlEntered").value.indexOf("go2l.ink/") >= 0) ||
				/*00009*/(document.getElementById("UrlEntered").value.indexOf("bit.do/") >= 0) ||
				/*00010*/(document.getElementById("UrlEntered").value.indexOf("goo.gl/") >= 0) ||
				/*00011*/(document.getElementById("UrlEntered").value.indexOf("kbit.co/") >= 0) ||
				/*00012*/(document.getElementById("UrlEntered").value.indexOf("crd.ht/") >= 0) ||
				/*00013*/(document.getElementById("UrlEntered").value.indexOf("ipt.pw/") >= 0) ||
				/*00014*/(document.getElementById("UrlEntered").value.indexOf("flyt.it/") >= 0) ||
				/*00015*/(document.getElementById("UrlEntered").value.indexOf("tinyurl.com/") >= 0) ||
				/*00016*/(document.getElementById("UrlEntered").value.indexOf("t.co/") >= 0) ||
				/*00017*/(document.getElementById("UrlEntered").value.indexOf("ukit.me/") >= 0) ||
				/*00018*/(document.getElementById("UrlEntered").value.indexOf("nurl.ng/") >= 0) ||
				/*00019*/(document.getElementById("UrlEntered").value.indexOf("a.cc/") >= 0) ||
				/*00020*/(document.getElementById("UrlEntered").value.indexOf("infomail-appxx00060418.cf/") >= 0) ||
				/*00021*/(document.getElementById("UrlEntered").value.indexOf("idapple.com/") >= 0) ||
				/*00022*/(document.getElementById("UrlEntered").value.indexOf("account-recovery") >= 0) ||
				/*00023*/(document.getElementById("UrlEntered").value.indexOf("ss.st/") >= 0) ||
				/*00024*/(document.getElementById("UrlEntered").value.indexOf("mystarted-selections.com/") >= 0) ||
				/*00025*/(document.getElementById("UrlEntered").value.indexOf("cm-trk2.com/") >= 0) ||
				/*00026*/(document.getElementById("UrlEntered").value.indexOf("twtn.ru/") >= 0) ||
				/*00027*/(document.getElementById("UrlEntered").value.indexOf("beget.tech/") >= 0) ||
				/*00028*/(document.getElementById("UrlEntered").value.indexOf("k1l4e.tk/") >= 0) ||
				/*00029*/(document.getElementById("UrlEntered").value.indexOf("ytzrr.tk/") >= 0) ||
				/*00030*/(document.getElementById("UrlEntered").value.indexOf("schoolofwaterproofing.com/") >= 0) ||
				/*00031*/(document.getElementById("UrlEntered").value.indexOf("ytzrr.tk/") >= 0)
				
				
				)
				   
				{
					swal("Blacklist", "This link cannot be shortened as per our terms. This might happen if your link contains a 'word or base URL' which is prohibited according to our terms.\n\nMistakenly blocked? Drop your mail to 0bc@doifoo.zendesk.com", "error");
					return;
				}
				
				var urlregex =/^(?:(?:https?|ftp):\/\/)?(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
				
				if(!urlregex.test(document.getElementById("UrlEntered").value)){
					swal("Invalid!", "Please enter a valid url to shorten!", "error");
					return;
				}
                var UrlEnteredByUser = encodeURIComponent(document.getElementById("UrlEntered").value);
                $("#loading").show();
                var isTypo =   false;

				//02 App-Website | UPDATE
                $.post("../handleURLmain.php", {XDEBUG_PROFILE:1,UrlEntered: UrlEnteredByUser,Typo: isTypo })
                        .done(function (data) {
                            if (data.indexOf("No such host is known") == -1)
                            {

                                //document.getElementById("UrlEntered").value = data.replace("http://", "").trim();
								document.getElementById("UrlEntered").value = data.trim();
								document.getElementById("button").style.display='none';
								document.getElementById("copy").style.display='block';
								document.getElementById("textp").style.display='none';

                            }
                            else
                            {
                                swal("Invalid!", "URL doesn't exist..", "error");
                            }
                            $("#loading").hide();

                        });


            }