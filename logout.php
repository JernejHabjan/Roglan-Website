<meta http-equiv="refresh" content="3;URL=index.php"/>

<body style="background-color:#e6ffff;">

<?php
session_start();


$_SESSION['loggedin'] = false;


session_destroy();

echo "You've been successfully logged out! Redirecting to main page in 3 sec...<br> redirect now: <a href='index.php'>Click </a> here to return to main page";

?>

</body>