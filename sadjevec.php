<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
//cookies
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>

<!-- cookies->
	<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {
        "message": "This website uses cookies to ensure you get the best experience on our website",
        "dismiss": "Got it!",
        "learnMore": "More info",
        "link": null,
        "theme": "light-top"
    };
</script>

<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->


<html lang="si-SLO">
<head>
    <title>Roglan</title>

    <link type="text/css" rel="stylesheet" href="stylesheet.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Return to Top button-->
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    <!-- ikona za gumb up -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <!--<META HTTP-EQUIV="refresh" CONTENT="5"> --> <!--autorefresh -->
</head>
<body>

<div class="container">

    <div class="row">

        <div class="header-logo" style="background-color: #f0fff0; width:100%">
            <a href="index.php"><img src="logo.png" newline character alt="Logo" newline character width="150px"
                                     height="90px"/></a>

            <div class="login">
                <div class="dropdown">
                    <button class="dropbtn" style="padding: 4px; font-size: 14px;; background-color:green">prijavite
                        se
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <div class="login">
                            <form style="margin: 0; padding: 0;" onsubmit="return validateForm()" name="myForm"
                                  action="login.php" method='POST'>
                                Uporabniško ime:<input type="text" name="username"
                                                       placeholder="Vpišite uporabniško ime"/><br>
                                <mark class="geslo">Geslo:</mark>
                                <input type="password" name="password" placeholder="Vpišite geslo"/><br>
                                <input class="dropbtn" type="submit" value="Prijavi">

                            </form>
                            <a href="register.php">registriraj se</a>
                        </div>
                    </div>
                </div>
                <!-- pazi d ga pokaže sam šele ko si prjavlen-->
                <a href="member.php" class="dropbtn" style="padding: 4px; font-size: 14px;; background-color:blue">
                    obišči svoj profil</a>
            </div>
        </div>

    </div>


    <div class="navbar" style="width:100%">
        <div class="dropdown">
            <button class="dropbtn"><a href="izdelki.php" class="dropbtn">Izdelki</a></button>
            <div id="myDropdown" class="dropdown-content">

                <div>
                    <ul id="navDrop">
                        <li><a href="izdelki.php">Vsi izdelki</a></li>
                        <li><a href="izdelki.php#alkoholnePijace">Alkoholne pijače</a></li>
                        <li><a href="izdelki.php#sadjevec">Sadjevec</a></li>
                        <li><a href="izdelki.php#brinjevec">Brinjevec</a></li>
                        <li><a href="izdelki.php#viljamovka">Viljamovka</a></li>
                        <li><a href="izdelki.php#slivovka">Slivovka</a></li>
                    </ul>
                </div>
                <div>
                    <ul id="navDrop">
                        <li><a href="izdelki.php#likerji">Likerji</a></li>
                        <li><a href="izdelki.php#pomarancniLiker">pomarancniLiker</a></li>
                        <li><a href="izdelki.php#borovnicevLiker">borovnicevLiker</a></li>
                        <li><a href="izdelki.php#malinovLiker">malinovLiker</a></li>
                        <li><a href="izdelki.php#robidovLiker">robidovLiker</a></li>
                        <li><a href="izdelki.php#limoninLiker">limoninLiker</a></li>
                        <li><a href="izdelki.php#medeniLiker">limoninLiker</a></li>
                    </ul>
                </div>
            </div>

        </div>


        <div class="dropdown">
            <button class="dropbtn"><a href="domaciIzdelki.php" class="dropbtn">Domači izdelki</a></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="domaciIzdelki.php">Vsi izdelki</a>
                <a href="domaciIzdelki.php#sadjevec">Marmelade</a>
                <a href="domaciIzdelki.php#brinjevec">Brinjevec</a>
                <a href="domaciIzdelki.php#medica">Medica</a>
                <a href="domaciIzdelki.php#borovnicke">Borovničke</a>
            </div>
        </div>


        <div class="dropdown">
            <button class="dropbtn"><a href="zgodovina.php" class="dropbtn">Zgodovina</a></button>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="#kontakt" class="dropbtn">Kontakt</a></button>
        </div>

        <div class="dropdown" style="float:right">
            <button class="dropbtn"><a href="#O nas" class="dropbtn">O nas</a></button>
        </div>

    </div>
</div>


<div>

    <div class="selector" style="position:relative;">
        <a class="w3-btn-floating" id="buttonleft" style="position:absolute;left:0">❮</a>
        <a class="w3-btn-floating" id="buttonright" style="position:absolute;right:0">❯</a>
        <div class="container" id="divContainer">
            <div style="width:50px"> <!-- PRAZEN-->
                Žganja
            </div>
            <div id="krogec" class="round">
                <a href="sadjevec.php"><img src="slike/smallsadjevec1l.jpg" height="200px"/></a>
            </div>
            <div id="krogec" class="round">
                <a href="izdelki.php#brinjevec"><img src="slike/smallbrinjevec1l.jpg" height="200px"/></a>
            </div>
            <div id="krogec" class="round">
                <a href="izdelki.php#viljamovka"><img src="slike/smallviljamovka1l.jpg" height="200px"/></a>
            </div>
            <div id="krogec" class="round">
                <a href="izdelki.php#slivovka"><img src="slike/smallslivovka1l.jpg" height="200px"/></a>
            </div>
            <div style="width:50px"> <!-- PRAZEN-->
                Likerji
            </div>
            <div id="krogec" class="round">
                <img src="slike/smallpomarancniLiker1l.jpg" height="200px"/>
            </div>
            <div id="krogec" class="round">
                <img src="slike/smallborovnicevLiker1l.jpg" height="200px"/>
            </div>
            <div id="krogec" class="round">
                <img src="slike/smallmalinovLiker1l.jpg" height="200px"/>
            </div>
            <div id="krogec" class="round">
                <img src="slike/smallrobidovLiker1l.jpg" height="200px"/>
            </div>
            <div id="krogec" class="round">
                <img src="slike/smalllimoninLiker1l.jpg" height="200px"/>
            </div>
            <div id="krogec" class="round">
                <img src="slike/smallmedeniLiker1l.jpg" height="200px"/>
            </div>
        </div>


    </div>
</div>

<div class="main" id="mainContent">


    <div id="floated" style="float:left;">
        <img id="imgsadjevec" src="slike/sadjevec1l.jpg"
             style="height:1000px;max-width:700px;width: expression(this.width > 700 ? 700: true);"/>
    </div>
    <div id="content" style="background-color:grey;overflow:hidden;height: 1000px ;">
        <p>Blah blah blah</p>

    </div>

    <!--<li><img src="slike/sadjevec05l.jpg" height="200px" />Pol litra --CHANGE</li>-->
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

                    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FoGloriaLook%2F&width=150&layout=standard&action=like&show_faces=true&share=true&height=80&appId"
                            width="250" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowTransparency="true"></iframe>
                </li>

                <li>Twitter neki<br>
                    <a href="https://twitter.com/darkneess10" class="twitter-follow-button" data-show-count="false">Follow
                        @darkneess10</a>
                    <script>
                        !function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0],
                                p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');
                    </script>
                </li>
            </ul>
        </div>
    </div>
</footer>

<script src="javascript.js"></script>
</body>
</html>
