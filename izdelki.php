
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Return to Top button-->
		<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
		<!-- ikona za gumb up -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<!--<META HTTP-EQUIV="refresh" CONTENT="5"> --> <!--autorefresh -->  
</head>
<body>

<div class="headercontainer">
  <div class="container" >
	
	<!--LOGO AND LOGIN-->
	  <div class="header-logo" style="background-color: #f0fff0; width:100%">
		<a href="index.php"><img src="logo.png"newline character alt="Logo" newline character width="150px" /></a>
		<div class="login">
			<div class="dropdown">
			  <button class="dropbtn" id="loginButton" style="padding: 10px; font-size: 14px;; background-color:green">prijavite se</button>
			  <div id="myDropdown" class="dropdown-content" >
			  	<div class="login">
					<form style="margin: 0; padding: 0;" onsubmit="return validateForm()" name="myForm" action="login.php" method='POST'>
						Uporabniško ime:<input type="text" name="username" placeholder="Vpišite uporabniško ime"/><br>
					    <mark class="geslo">Geslo:</mark><input type="password" name="password" placeholder="Vpišite geslo"/><br>
					    <input class="dropbtn" type="submit" value="Prijavi">    
					</form>
					<a href="register.php">registriraj se</a>
				</div>
			  </div>
			</div>
				<!-- pazi d ga pokaže sam šele ko si prjavlen-->
				<a href="member.php" class="dropbtn" id="profileButton" style="padding: 10px; font-size: 14px;; background-color:blue" > obišči svoj profil</a>
					
				<a href="cart.html" class="dropbtn" id="cart" style="padding: 10px; font-size: 14px;; background-color:green" > SHOPPING CART</a>
		</div>

	  </div>
	<!--END LOGO AND LOGIN-->
			



			
  </div>
  <div class="navbar" style="width:100%">
	<div class="buttonsNavBar" style="margin-left:10%; margin-right:10%;">
	    <div class="dropdown">
		  <button class="dropbtn"><a href="izdelki.php" class="dropbtn">Izdelki</a></button>
		  <div id="myDropdown" class="dropdown-content">

		  	<div >
			  	<ul id="navDrop">
			  		<li style="margin-bottom:20px"><a href="izdelki.php"><b>Vsi izdelki</b></a></li>
				    <li><a href="izdelki.php#alkoholnePijace"><b>Alkoholne pijače</b></a></li>
				    <li><a href="izdelki.php#sadjevec">Sadjevec</a></li>
				    <li><a href="izdelki.php#brinjevec">Brinjevec</a></li>
				    <li><a href="izdelki.php#viljamovka">Viljamovka</a></li>
				    <li><a href="izdelki.php#slivovka">Slivovka</a></li>
			    </ul>
		    </div>
		    <div>
			    <ul id="navDrop">
			    	<li><a href="izdelki.php#likerji"><b>Likerji</b></a></li>
			    	<li><a href="izdelki.php#pomarancniLiker">Pomarančni liker</a></li>
			    	<li><a href="izdelki.php#borovnicevLiker">Borovničev liker</a></li>
			    	<li><a href="izdelki.php#malinovLiker">Malinov liker</a></li>
			    	<li><a href="izdelki.php#robidovLiker">Robidov liker</a></li>
			    	<li><a href="izdelki.php#limoninLiker">Limonin liker</a></li>
			    	<li><a href="izdelki.php#medeniLiker">>Limonin liker</a></li>
			    </ul>
		    </div>
		  </div>
		
		</div>


		<div class="dropdown">
		  <button class="dropbtn"><a href="domaciIzdelki.php" class="dropbtn">Domači izdelki</a></button>
		  <div id="myDropdown" class="dropdown-content">
		  	<div>
			  	<a href="domaciIzdelki.php" style="margin-bottom:10px"><b>Vsi izdelki</b></a>
			    <a href="domaciIzdelki.php#marmelade">Marmelade</a>
			    <a href="domaciIzdelki.php#BrinjeveJagode">Brinjeve jagode</a>
			    <a href="domaciIzdelki.php#brinjevoOlje">Brinjevo olje</a>
			    <a href="domaciIzdelki.php#timijanovLiker">Timijanov liker*</a>
			    <a href="domaciIzdelki.php#caji">Čaji</a>
			</div>
		  </div>
		</div>


		<div class="dropdown">
		  <button class="dropbtn"><a href="zgodovina.php" class="dropbtn">Zgodovina žganjekuhe</a></button>
		</div>
		<div class="dropdown">
		  <button class="dropbtn"><a href="#kontakt" class="dropbtn">Kontakt</a></button>
		</div>

		<div class="dropdown"  style="float:right">
		  <button class="dropbtn"><a href="#O nas" class="dropbtn">O nas</a></button>
	  </div>
  </div>
  <div class="selector" style="position:relative;" >
		<a class="w3-btn-floating" id="buttonleft"  style="position:absolute;left:0">❮</a>
		<a class="w3-btn-floating" id="buttonright" style="position:absolute;right:0">❯</a>
		<div class="container" id="divContainer">
			<div  style="width:50px"> <!-- PRAZEN-->
	        	Žganja  
	        </div>
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
	        <div style="width:50px"> <!-- PRAZEN-->
	        	Likerji
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
	    </div>
	</div>
  </div>
</div>


<div class="main" id="mainContent" >






	<h1 style="margin:0">Izdelki</h1>


		
		
<p>MOGOČE TO 18+???</p>
		
	

	<ul class="enlarge" style="display: inline-block; width:100%;">
		<div class="zamik">
			<a name="alkoholnePijace"><h2><b>Alkoholne pijače</b></h2></a>
			<div>
				<a name="sadjevec" ><h2>Sadjevec</h2></a>
				<div id="parent" style="width:100%;" >
					<div class="narrow" style="background-color:brown;margin:0;min-width:500px;width:30%;display: inline-flex;">
						<div style="height:200px;margin:0;">
							<li><img src="slike/smallsadjevec1l.jpg" height="200px" />Liter</li>
							<button class="dropbtn" style="margin-left:10px"><a href="zgodovina.php" class="dropbtn">Dodaj 1 litra</a></button>
						</div>
						<div style="height:200px;margin:0;">
							<li><img src="slike/sadjevec05l.jpg" height="200px" />Pol litra</li>
							<button class="dropbtn" style="margin-left:10px"><a href="zgodovina.php" class="dropbtn">Dodaj pol litra</a></button>
						</div>
					</div>
					<div class="left-box" style="background-color:green;margin:0;margin-right:140px">
						<p>neki neki bla bla</p>
					</div>

				</div>
			</div>
		
		</div>

		<div class="zamik">
			<a name="likerji"><h2><b>Likerji</b></h2></a>
			<div>
				<a name="pomarancniLiker"><h2>Pomarančni liker</h2></a>
					<p>neki neki</p>
						<li><img src="slike/smallpomarancniLiker1l.jpg" height="200px" />Liter</li>
						<li><img src="slike/pomarancniLiker05l.jpg" height="200px" />Pol litra</li>
			</div>
			<div>
				<a name="borovnicevLiker"><h2>Borovničev liker</h2></a>
					<p>neki neki</p>
						<li><img src="slike/smallborovnicevLiker1l.jpg" height="200px" />Liter</li>
						<li><img src="slike/borovnicevLiker05l.jpg" height="200px" />Pol litra</li>
			</div>
		</div>
	</ul>

</div>

<footer id="footer">

	<div id="parent">
		<div class="left-box">


			<ul class="footerspan">
		      <li>Kmetija Roglan</li>
		      <li>Na Logu 16</li>
		      <li>4220 Škofja Loka</li>
		   </ul>

		   


		</div>
  		<div class="narrow">
  			<ul class="footerspan"><strong>follow us on:</strong><br>
  			  <li>Facebook neki<br>
  			  	
  				<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FoGloriaLook%2F&width=150&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="250" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
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

<p id="sessionOrigin" style="display:none"><?=$_SESSION['username'];?></p> <!-- store username da ga lahko uporabim z jquery-->

<script src="javascript.js"></script>

</body>
</html>
