<meta http-equiv="refresh" content="5;URL=index.php"/>


<body style="background-color:#e6ffff;">
<?php
//session
session_start();


// get values from form fields
$username = $_POST['username'];
$password = $_POST['password'];

// Connecting to and selecting a MySQL database named Roglan_database
// Hostname: 127.0.0.1, username: your_user, password: your_pass, db: Roglan_database
$mysqli = new mysqli('127.0.0.1', 'root', '', 'Roglan_database');

// Oh no! A connect_errno exists so the connection attempt failed!
if ($mysqli->connect_errno) {
    // The connection failed. What do you want to do? 
    // You could contact yourself (email?), log the error, show a nice page, etc.
    // You do not want to reveal sensitive information

    // Let's try this:
    echo "Sorry, this website is experiencing problems.";

    // Something you should not do on a public site, but this example will show you
    // anyways, is print out MySQL error related information -- you might log this
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    // You might want to show them something nice, but we will simply exit
    exit;
}

// Perform an SQL query
$sql = "SELECT * FROM users WHERE username = '$username'";
if (!$result = $mysqli->query($sql)) {
    // Oh no! The query failed. 
    echo "Sorry, the website is experiencing problems.";

    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}

// Phew, we made it. We know our MySQL connection and query 
// succeeded, but do we have a result?
if ($result->num_rows === 0) {
    // Oh, no rows! Sometimes that's expected and okay, sometimes
    // it is not. You decide. In this case, maybe actor_id was too
    // large? 
    echo "We could not find a match for username $username, sorry about that. Please try again.";
    exit;
}

$num = $result->num_rows;

echo "<b><center>Database Output</center></b><br><br>";

while ($row = $result->fetch_assoc()) {
    $dbusername = $row['username'];
    $dbpassword = $row['password'];

}
// check to  see if they match

//HASH PASSWORD
for ($i = 0; $i < 10000; $i++) {
    $password = hash('sha256', $password);
}

if ($username = $dbusername && $password == $dbpassword) {

    echo "youre in! Redirecting to main page in 5 sec...<br> redirect now: <a href='index.php'>Click </a> here to return to <b>main</b/> page<br> <a href='member.php'>Click </a> here to enter <b>member</b> page";
    $_SESSION['username'] = $dbusername;
    $_SESSION['loggedin'] = true;

} else {
    echo "incorrect password";
}

//close everything
$result->free();
$mysqli->close();


//echo sha1($password);
//echo "<u>".$row['id']."</u><b>, ".$row['username']."</u><b>, ".$row['password']."</b>"; //etc...
?>
</body>