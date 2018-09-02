
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
	session_start();
	//cookies
		$cookie_name = "user";
		$cookie_value = "John Doe";
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	
?>

<!-- cookies->
	<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
	<script type="text/javascript">
	    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"light-top"};
	</script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
	<!-- End Cookie Consent plugin -->



<html lang="si-SLO">
<head>
	<title>Roglan</title>

	<link type="text/css" rel="stylesheet" href="stylesheet.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


	<!-- Return to Top button-->
		<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
		<!-- ikona za gumb up -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<!--FONT-->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">



	<!--   	MAKE IT RESPONSIVE-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>

</head>
<body>



<?php /*
		//cookies
			if(!isset($_COOKIE[$cookie_name])) {
			    echo "Cookie named '" . $cookie_name . "' is not set!";
			} else {
			    echo "Cookie '" . $cookie_name . "' is set!<br>";
			    echo "Value is: '" . $_COOKIE[$cookie_name]."'<br>";
			}
		//session
			$_SESSION["favcolor"] = "green";
			$_SESSION["favanimal"] = "cat";
			//SPODNA DVA LINA DAŠ NA NASLEDN PAGE IN TM ZVEŠ STVARI K SO SE ŽE ZGODILE V TEMU SESSIONU
			// Echo session variables that were set on previous page
	*/
?>



<div id="everything">








<div class="headercontainer">
  <div class="container" style="margin-left:10%; margin-right:10%; width:80%;padding:0; background-color: #f0fff0;">

	<!--LOGO AND LOGIN-->
	  <div class="header-logo">
	  	<div style="float:left;">
			<a href="index.php"><img src="logo.png" alt="Roglan" character alt="Logo" newline character width="100px" /></a>
		</div>



		<!--SEARCH BAR-->
		<div style="float:left; width:50%;margin-left:20%;">
			<form id="frmSearch" class="search2" method="get" action="default.html">	<!-- http://www.w3schools.com/w3css/w3css_icons.asp -->
				<input class="search2" id="txtSearch" type="text" name="search" placeholder="Search.." size="31" maxlength="255"
				value="" />
				<input class="dropbtn" type="submit" name="submition" value="Search"/>
				<input class="search2" type="hidden" name="sitesearch" value="default.html" />
			</form>
		</div>

		<div class="login">
			<div class="dropdown">
			  <button class="dropbtn" id="loginButton" onclick="mydropdownFunction('loginDropdown')" style="padding: 10px;background-color:#4d4d4d;">Prijavite se</button>
			  <div class="dropdown-content" id="loginDropdown">
			  	<div class="login">
					<form style="margin: 0; padding: 0;" onsubmit="return validateForm()" name="myForm" action="login.php" method='POST'>
						Uporabniško ime:<input type="text" name="username" placeholder="Vpišite uporabniško ime"/><br>
					    <mark class="geslo">Geslo:</mark><input type="password" name="password" placeholder="Vpišite geslo"/><br>
					    <input class="dropbtn" type="submit" value="Prijavi">
					</form>
					<br>
					<button class="dropbtn" onclick="location.href='register.php'" href="register.php">Registrirajte se</button>

				</div>
			  </div>
			</div>

				<div style="display:inline-block">
					<a class="dropbtn" id="profileButton" onclick="mydropdownFunction('profilQuickShow')" style="padding: 10px;background-color:#4d4d4d">Obišči svoj profil <span class="caret"></span></a>
					<div class="dropdown-content" id="profilQuickShow">
					  	<div >
						  	<ul id="navDrop">
						  		Jernej Habjan<br>
						  		neki<br>
						  		<a href="member.php" class="dropbtn" id="profileButton" style="padding: 10px;background-color:white" >Obišči svoj profil</a>
						  		<a href="logout.php" class="dropbtn" id="profileButton" style="padding: 10px;background-color:grey" >logout</a>
							</ul>
						</div>
					</div>
				</div>

				<a href="cart.html" id="cart"><div style="display:inline-block;background-color:#4d4d4d;" class="container minicart"></div></a>

		</div>

	  </div>
	<!--END LOGO AND LOGIN-->
  </div>


  <div class="navbar" style="width:100%; padding:0;border:0;">
	<div id="navBarID" style="margin-left:10%;margin-right:10%;">
	    <ul class="topnav" id="myTopnav">
		  <li style="float:left;"><a class="active" href="index.php">Home</a></li>
		  <li style="float:left;"><a class="dropbtn" onclick="mydropdownFunction('izdelkiDropdown')" >Izdelki <span class="caret"></span></a>
		  	<div class="dropdown-content" id="izdelkiDropdown" style="left:0;margin-left:10%;margin-right:10%;width:80%;">
			  	<div style="display:inline-flex;">
				  	<ul id="navDrop">
				  		<li style="margin-bottom:20px"><a href="izdelki.php"><b>Vsi izdelki</b></a></li>
					    <li><a href="izdelki.php#alkoholnePijace"><b>Alkoholne pijače</b></a></li>
					    <li><a href="izdelki.php#sadjevec">Sadjevec</a></li>
					    <li><a href="izdelki.php#brinjevec">Brinjevec</a></li>
					    <li><a href="izdelki.php#viljamovka">Viljamovka</a></li>
					    <li><a href="izdelki.php#slivovka">Slivovka</a></li>
				    </ul>
			    </div>
			    <div style="display:inline-flex;">
				    <ul id="navDrop">
				    	<li style="margin-bottom:20px"><a href="izdelki.php#likerji"><b>Likerji</b></a></li>
				    	<li><a href="izdelki.php#pomarancniLiker">Pomarančni liker</a></li>
				    	<li><a href="izdelki.php#borovnicevLiker">Borovničev liker</a></li>
				    	<li><a href="izdelki.php#malinovLiker">Malinov liker</a></li>
				    	<li><a href="izdelki.php#robidovLiker">Robidov liker</a></li>
				    	<li><a href="izdelki.php#limoninLiker">Limonin liker</a></li>
				    	<li><a href="izdelki.php#medeniLiker">Medeni liker</a></li>
				    </ul>
			    </div>
		  	</div>
		  </li>
		  <li style="float:left;"><a class="dropbtn" onclick="mydropdownFunction('domaciIzdelkiDropdown')" >Domači izdelki <span class="caret"></span></a>
			  <div class="dropdown-content" id="domaciIzdelkiDropdown" style="left:0;margin-left:10%;margin-right:10%;width:80%;">
			  	<div style="display:inline-flex;">

			  		<ul id="navDrop">
				  		<li style="margin-bottom:20px"><a href="domaciIzdelki.php"><b>Vsi izdelki</b></a></li>
					    <li><a href="domaciIzdelki.php#marmelade">Marmelade</a></li>
					    <li><a href="domaciIzdelki.php#BrinjeveJagode">Brinjeve jagode</a></li>
					    <li><a href="domaciIzdelki.php#brinjevoOlje">Brinjevo olje</a></li>
					    <li><a href="domaciIzdelki.php#timijanovLiker">Timijanov liker*</a></li>
					    <li><a href="domaciIzdelki.php#caji">Čaji</a></li>
				    </ul>

				</div>
			  </div>
		  </li>
		  <li style="float:left;"><a href="zgodovina.php" class="dropbtn">Zgodovina žganjekuhe</a></li>
		  <li style="float:left;"><a href="#kontakt" class="dropbtn">Kontakt</a></li>
		  <li style="float:right"><a href="oNas.html" class="dropbtn" >O nas</a></li>
		  <li class="icon">
		    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
		  </li>
		</ul>
 	</div>








  <div class="selector" style="position:relative;" >
  	<button id="buttonleft" class="button5" style="left:0;"><i style="font-size:24px" class="fa">&#xf053;</i></button>
	<button id="buttonright" class="button5" style="right:0;"><i style="font-size:24px" class="fa">&#xf054;</i></button>

		<div id="leftRightMover">
		<div class="container" style="padding:0;margin-left:10%;margin-right:10%;">
		  <div id="divContainer">
			<div id="krogec" class="round">
	            <a href="sadjevec.php"><img src="slike/smallsadjevec1l.jpg" height="200px" /></a>
	        </div>
	        <div id="krogec" class="round">
	            <a href="izdelki.php#brinjevec"><img src="slike/smallbrinjevec1l.jpg" height="200px" /></a>
	        </div>
	        <div id="krogec" class="round">
	            <a href="izdelki.php#viljamovka"><img src="slike/smallviljamovka1l.jpg" height="200px" /></a>
	        </div>
	        <div id="krogec" class="round">
	            <a href="izdelki.php#slivovka"><img src="slike/smallslivovka1l.jpg" height="200px" /></a>
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallpomarancniLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallborovnicevLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallmalinovLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallrobidovLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smalllimoninLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallmedeniLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallmedeniLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallmedeniLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallmedeniLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallmedeniLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallmedeniLiker1l.jpg" height="200px" />
	        </div>
	        <div id="krogec" class="round">
	            <img src="slike/smallmedeniLiker1l.jpg" height="200px" />
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
  </div>
</div>





<div class="main" id="mainContent" >


	<h2 style="margin-top:0;padding-top:20px;">IZDELKI:</h2>


	<div id="parent" style="width:100%;" >
		<div class="narrow" style="background-color:#1a1a1a;color:white;margin:0;min-width:150px;width:25%;display: inline-flex;">

			<ul><h3 style="color:white"><b>Alkoholne pijače</b></h3>
				<li>Sadjevec</li>
				<li>Brinjevec</li>
				<li>Viljamovka</li>
				<li>Slivovka</li>
			</ul>
		</div>
		<div class="left-box" style="margin:0;">

			<div id="parent" style="width:100%;" >
				<div class="left-box" style="margin:0;">

					<div class="pictureContainer">
						<img src="slike/pickingApples.jpg" height="100%" />
					</div>
				</div>
				<div class="left-box" style="background-color:#4d4d4d;margin:0;">
					<p style="color:#f2f2f2" >Obrano sadje iz domačih češn... neki tle napišeš kok je use zakon pa hudo itd</p>
				</div>

			</div>
		</div>
	</div>
	<br><br>
	<div id="parent" style="width:100%;" >
		<div class="narrow" style="background-color:#1a1a1a;color:white;margin:0;min-width:150px;width:25%;display: inline-flex;">

			<ul><h3 style="color:white"><b>Likerji</b></h3>
				<li>Pomaračni liker</li>
				<li>Borovničev liker</li>
				<li>Malinov liker</li>
				<li>Robidov liker</li>
				<li>Limoonin liker</li>
			</ul>

		</div>
		<div class="left-box" style="margin:0;">

			<div id="parent" style="width:100%;" >
				<div class="left-box" style="margin:0;">

					<div class="pictureContainer">
						<img src="slike/makingJuice.jpg" height="100%" />
					</div>
				</div>
				<div class="left-box" style="background-color:#4d4d4d;margin:0;">
					<p style="color:#f2f2f2">likerji izdelani iz domačih češn........ neki tle napišeš kok je use zakon pa hudo itd</p>
				</div>

			</div>
		</div>
	</div>

	<br><br>
	<div id="parent" style="width:100%;" >
		<div class="narrow" style="background-color:#1a1a1a;color:white;margin:0;min-width:150px;width:25%;display: inline-flex;">

			<h3 style="color:white"><b>Brinjevo olje</b></h3>

		</div>
		<div class="left-box" style="margin:0;">

			<div id="parent" style="width:100%;" >
				<div class="left-box" style="margin:0;">

					<div class="pictureContainer">
						<img src="slike/brinjevoOlje.jpg" height="100%" />
					</div>
				</div>
				<div class="left-box" style="background-color:#4d4d4d;margin:0;">
					<p style="color:#f2f2f2">likerji izdelani iz domačih češn........ neki tle napišeš kok je use zakon pa hudo itd</p>
				</div>

			</div>
		</div>
	</div>

	<br><br>
	<div id="parent" style="width:100%;" >
		<div class="narrow" style="background-color:#1a1a1a;color:white;margin:0;min-width:150px;width:25%;display: inline-flex;">

			<h3 style="color:white"><b>Marmelade</b></h3>

		</div>
		<div class="left-box" style="margin:0;">

			<div id="parent" style="width:100%;" >
				<div class="left-box" style="margin:0;">

					<div class="pictureContainer">
						<img src="slike/marmeladaPlaceholder.jpg" height="100%" />
					</div>
				</div>
				<div class="left-box" style="background-color:#4d4d4d;margin:0;">
					<p style="color:#f2f2f2">likerji izdelani iz domačih češn........ neki tle napišeš kok je use zakon pa hudo itd</p>
				</div>

			</div>
		</div>
	</div>


	<br><br>
	<div id="parent" style="width:100%;" >
		<div class="narrow" style="background-color:#1a1a1a;color:white;margin:0;min-width:150px;width:25%;display: inline-flex;">

			<h3 style="color:white"><b>Brinjeve jagode</b></h3>

		</div>
		<div class="left-box" style="margin:0;">

			<div id="parent" style="width:100%;" >
				<div class="left-box" style="margin:0;">

					<div class="pictureContainer">
						<img src="slike/čajiPlaceholder.jpg" height="100%" />
					</div>
				</div>
				<div class="left-box" style="background-color:#4d4d4d;margin:0;">
					<p style="color:#f2f2f2">likerji izdelani iz domačih češn........ neki tle napišeš kok je use zakon pa hudo itd</p>
				</div>

			</div>
		</div>
	</div>



	<br><br>
	<div id="parent" style="width:100%;" >
		<div class="narrow" style="background-color:#1a1a1a;color:white;margin:0;min-width:150px;width:25%;display: inline-flex;">


			<ul><h3 style="color:white"><b>Čaji</b></h3>
				<li>Ene sorte</li>
				<li>Druge sorte</li>
			</ul>

		</div>
		<div class="left-box" style="margin:0;">

			<div id="parent" style="width:100%;" >
				<div class="left-box" style="margin:0;">

					<div class="pictureContainer">
						<img src="slike/brinjeveJagodePlaceholder.jpg" height="100%" />
					</div>
				</div>
				<div class="left-box" style="background-color:#4d4d4d;margin:0;">
					<p style="color:#f2f2f2">likerji izdelani iz domačih češn........ neki tle napišeš kok je use zakon pa hudo itd</p>
				</div>

			</div>
		</div>
	</div>

	<br>





	<div style="text-align: center;">
		<div class="dropdown">
			<button id="kontaktirajte" class="dropbtn" style="top: 50%;"><h2 style="text-align:center">KONTAKTIRAJTE NAS</h2></button>
		</div>
		ali...


		<div class="dropdown">
		  <button id="narocite" class="dropbtn" style="top: 50%;"><h2 style="text-align:center">NAROČITE IZDELKE</h2></button>


		</div>



	</div>

	<div class="container1">
		    <div class="header1"><span></span>
		    </div>
		    <div class="content1" id="content1ID">

		        <div class="dropdown-content" style="display:initial;position:relative; background-color:#4d4d4d; box-shadow:none">
		        	<div style="display:inline-flex;">
					  	<ul style="list-style-type:none;">
					  		<li style="margin-bottom:20px"><a href="izdelki.php"><b>Vsi alkoholni</b></a></li>
						    <li><a href="izdelki.php#alkoholnePijace"><b>Alkoholne pijače</b></a></li>
						    <li><a href="izdelki.php#sadjevec">Sadjevec</a></li>
						    <li><a href="izdelki.php#brinjevec">Brinjevec</a></li>
						    <li><a href="izdelki.php#viljamovka">Viljamovka</a></li>
						    <li><a href="izdelki.php#slivovka">Slivovka</a></li>
					    </ul>
				    </div>
				    <div style="display:inline-flex;">
					    <ul style="list-style-type:none;">
					    	<li><a href="izdelki.php#likerji"><b>Likerji</b></a></li>
					    	<li><a href="izdelki.php#pomarancniLiker">Pomarančni liker</a></li>
					    	<li><a href="izdelki.php#borovnicevLiker">Borovničev liker</a></li>
					    	<li><a href="izdelki.php#malinovLiker">Malinov liker</a></li>
					    	<li><a href="izdelki.php#robidovLiker">Robidov liker</a></li>
					    	<li><a href="izdelki.php#limoninLiker">Limonin liker</a></li>
					    	<li><a href="izdelki.php#medeniLiker">Medeni liker</a></li>
					    </ul>
				    </div>
				    <div style="display:inline-flex;">
				    	<ul style="list-style-type:none;">
						  	<li><a href="domaciIzdelki.php" style="margin-bottom:10px"><b>Vsi domači izdelki</b></a></li>
						    <li><a href="domaciIzdelki.php#marmelade">Marmelade</a></li>
						    <li><a href="domaciIzdelki.php#BrinjeveJagode">Brinjeve jagode</a></li>
						    <li><a href="domaciIzdelki.php#brinjevoOlje">Brinjevo olje</a></li>
						    <li><a href="domaciIzdelki.php#timijanovLiker">Timijanov liker*</a></li>
						    <li><a href="domaciIzdelki.php#caji">Čaji</a></li>
					    </ul>
					</div>
				</div>

		    </div>
		</div>

	<div class="container1" >
		<div class="header1"><span></span>
		</div>
		<div class="content1" id="content2ID">

	        Kmetija Roglan<br>
			Na Logu 16<br>
			4220 Škofja Loka

		</div>
	</div>






<footer id="footer">

	<div id="parent" style="height: 300px;">
		<div class="left-box" style="background: lightgreen;margin-left:0px;min-width:200px;">


			<ul class="footerspan">
		      <li>Kmetija Roglan</li>
		      <li>Na Logu 16</li>
		      <li>4220 Škofja Loka</li>
		   </ul>

		   


		</div>
  		<div class="narrow" style="background: lightblue;margin-right:0px;">
  			<ul class="footerspan"><strong>follow us on:</strong><br>
  			  <li>Facebook GLORIALOOK PAZI<br>
  			  	
  				<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FoGloriaLook%2F&width=150&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="200" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
  			  </li>

		      <li>Twitter  neki<br>
				<a href="https://twitter.com/darkneess10" class="twitter-follow-button" data-show-count="false">Follow @darkneess10</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
				</script>
		      </li>
		   </ul>
		</div>
	</div> 
</footer>

<!--   <p id="sessionOrigin" style="display:none"><?=$_SESSION['username'];?></p> <!-- store username da ga lahko uporabim z jquery-->

<script src="javascript.js"></script>
</div>
</body>
</html>
