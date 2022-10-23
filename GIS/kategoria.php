<?php
session_start();
require 'connection.php';

if(isset($_GET['message'])){
    $message = $_GET['message'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kategoria</title>
    <link rel="stylesheet" type="text/css" href="index2.css">
</head>
<body>
<li >
    <a href="adminPrihlasenie.php">
        <span  class="lins_name">Admin Prihlasenie</span>
    </a>
</li>
<li >
    <a href="kategoria.php">
        <span  class="lins_name">Kategoria</span>
    </a>
</li>

<form id="kategoriaForm" action="kategoriaHandler.php" method="post" name="kategoriaForm">
    <input type="text" id="kategoria" name="kategoria" placeholder="Zadajte kategoriu" class="box"><br><br>
    <button type="submit" class="kategoria_btn" id="kategoriaButton" name="kategoriaButton">Pridať kategoriu</button>
</form><br><br>
</body>
</html>