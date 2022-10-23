<?php
session_start();
require 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin prihlasenie</title>
    <link rel="stylesheet" type="text/css" href="index2.css">
</head>
<body>

<form action="prihlasovaciHandler.php" method="post"></form>
    <input  name="meno" placeholder="meno" class="box"><br><br>
    <input  type="password"  name="heslo" placeholder="heslo" class="box"><br><br>
    <button type="submit"  class="btn" name="prihlasovaciButton">Prihlasit</button>
</form>
</body>
</html>
