<?php

$user = '';
$pass = '';

if (isset($_POST['user'])) {	
$user = $_POST['user'];
}

if (isset($_POST['pass'])) {
$pass = $_POST['pass'];
}

if(!($user == "nickjw" && $pass == "645342"))
{
    echo '<html><body><form method="POST" action="'.$_SERVER['REQUEST_URI'].'">
            Username: <input type="text" name="user"></input><br/>
            Password: <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Login"></input>
            </form></body></html>';
    exit();
}
?>

<h2>Hi</h2>
