<?php
/**
 * User: Luuk Seepma
 * Date: 11/02/2020
 * Time: 18:10
 * File: index.php
 */

include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";

$race = "Elfstedentocht";
$raceFries = "Alvestêdetocht";
$kilometer = 200;
$sport = "Schaatstocht";
$ijs = "Natuurijs";
$organisatie = "Koninklijke Vereniging De Friesche Elf Steden";
$organisatieplaats = "Leeuwarden";
$provincie = "Friesland";
$aantalkeer = 15;
$eerstekeer = 1909;
$maxaantal = 1;
$verhaal = "<p>" . "De " . $race . " (Fries: " . $raceFries . ")" . " is een " . $kilometer . " kilometer lange " . $sport . " over " . $ijs . " die wordt georganiseerd door de " . $organisatie . ". " . $organisatieplaats . ", " . "de hoofdstad van " .  $provincie . ", " . "is start- en aankomstplaats. De " . $race . " is inmiddels " . $aantalkeer . " maal verreden en werd voor het eerst in " . $eerstekeer . " gereden en wordt maximaal " . $maxaantal . " keer per winter. gehouden." . "</p>";

echo $verhaal;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 id="titel">Opdracht 3.1</h1>
    <div id="tachtergrond">

    </div>
    <a href="../../Hoofdstuk%201/Opdracht%201/index.php"> <img id="homebutton" src="../Images/homebutton.png" alt="Homebutton"></a>
</body>
</html>

