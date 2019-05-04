<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title>Izdelki</title>


    <link type="text/css" rel="stylesheet" href="stylesheet.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Return to Top button-->
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    <!-- ikona za gumb up -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

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
                <a href="izdelki.php">Vsi izdelki</a>
                <a href="izdelki.php#sadjevec">Sadjevec</a>
                <a href="izdelki.php#brinjevec">Brinjevec</a>
                <a href="izdelki.php#medica">Medica</a>
                <a href="izdelki.php#borovnicke">Borovničke</a>
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
</div>


<div class="main">

    <h1>Izdelki</h1>


    <ul class="enlarge">
        <h2>Sadjevec</h2>
        <p><a name="sadjevec">neki neki</a></p>
        <li><img src="brin.png" width="100px" height="200px"/></li>
        <h2>brinjevec</h2>
        <p><a name="brinjevec">neki neki</a></p>
        <li><img src="medica.png" width="100px" height="200px"/></li>
        <h2>medica</h2>
        <p><a name="medica">neki neki</a></p>
        <li><img src="sadj.png" width="100px" height="200px" alt="sadj"/></li>
        <h2>borovnicke</h2>
        <p><a name="borovnicke">neki neki</a></p>
        <
        <li><img src="bor.png" width="100px" height="200px"/></li>

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

</body>
</html>