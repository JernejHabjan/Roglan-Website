<?php


echo "<h1>Register</h1>";

$submit = strip_tags($_POST['submit']);
$fullname = strip_tags($_POST["fullname"]);
$username = $_POST["username"];
$password = strip_tags($_POST["password"]);
$repeatpassword = strip_tags($_POST["repeatpassword"]);
$date = date("Y-m-d");


if ($submit) {//će prtisne submit button
    //open database for check if username exists
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'Roglan_database');

    $namecheck = "SELECT username FROM users WHERE username = '$username'";
    echo $namecheck;
    if (!$result = $mysqli->query($namecheck)) {
        // Oh no! The query failed.
        echo "Sorry, the website is experiencing problems.";

        // Again, do not do this on a public site, but we'll show you how
        // to get the error information
        echo "Error: Our query failed to execute and here is why: \n";
        echo "Query: " . $namecheck . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
    }
    if ($result->num_rows === 0) {//će še ni usernama not je ok

        //check for existance
        if ($username && $password && $fullname && $repeatpassword) { //tukej še ni encryptan pass ker če je field prazn sha256 encrypta u random shit


            if ($password == $repeatpassword) {
                //check char lenth of username and fullname
                if (strlen($username) > 25 || strlen($username) < 3 || strlen($fullname) > 25 || strlen($fullname) < 3) {
                    echo "enter username and fullname between including 2 and 25 characters";
                } else {
                    //checkpassword
                    if (strlen($password > 25) || strlen($password) < 6) {
                        echo "password must be between 25 and 6 characters";
                    } else {


                        //encrypt password
                        for ($i = 0; $i < 10000; $i++) {
                            $password = hash('sha256', $password);
                            $repeatpassword = hash('sha256', $repeatpassword);
                        }

                        //open database
                        if ($mysqli->connect_errno) {
                            echo "Error: Failed to make a MySQL connection, here is why: \n";
                            echo "Errno: " . $mysqli->connect_errno . "\n";
                            echo "Error: " . $mysqli->connect_error . "\n";
                            exit;
                        }
                        // Perform an SQL query
                        $sql = "INSERT INTO users VALUES (NULL,'$username','$password','$fullname','$date')";
                        if ($mysqli->query($sql) === TRUE) {
                            echo "you have been registerered <a href='index.php'>return to login page</a>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $mysqli->error;
                        }
                    }
                }
            } else {
                echo "passworda se ne ujemata";
            }


        } else {
            echo "please fill in <b>all</b> fields";
        }


    } else {
        echo "username already exists";
    }

//close everything
    $mysqli->close();
}
?>

<html>
<form action='register.php' method="POST">
    <table>
        <tr>
            <td>
                your full name:
            </td>
            <td>
                <input type="text" name="fullname" value='<?php echo $fullname ?>'>
            </td>
        </tr>
        <tr>
            <td>
                choose a username:
            </td>
            <td>
                <input type="text" name="username" value='<?php echo $username ?>'>
            </td>
        </tr>
        <tr>
            <td>
                choose a password:
            </td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td>
                repeat your password:
            </td>
            <td>
                <input type="password" name="repeatpassword">
            </td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Register">
</form>