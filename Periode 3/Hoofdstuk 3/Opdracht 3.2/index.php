<?php
/**
 * User: Luuk Seepma
 * Date: 11/02/2020
 * Time: 18:10
 * File: index.php
 */
include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";

//Deel 1

$trafficLightColor = "Groen";
$ambulanceComing = true;
$driveOn = true;

if ($ambulanceComing == true || $trafficLightColor == "Oranje" || $trafficLightColor == "Rood")
{
    $driveOn = false;
}
elseif ($ambulanceComing == false || $trafficLightColor == "Groen")
{
    $driveOn = true;
}

if ($driveOn == false)
{
    echo "<p class='age'>U mag niet doorrijden</p>";
}
elseif ($driveOn == true)
{
    echo "<p class='age'>U mag doorrijden</p>";
}

//Deel 2

$countryName = "Nederland";
$currentAge = "20";

//If else voor België

if($countryName == "België" && $currentAge <= "16")
{
    echo "<p class='drink'>Je woont in " . $countryName . " en je bent " . $currentAge . "<br>" . "Je mag hier zwakke alcohol drinken.</p>";
}
elseif($countryName == "België" && $currentAge >= "18")
{
    echo "<p class='drink'>Je woont in " . $countryName . " en je bent " . $currentAge . "<br>" . "Je mag hier sterke alcohol drinken.</p>";
}

//If else voor Bulgarije

if($countryName == "Bulgarije" && $currentAge >= "18")
{
    echo "<p class='drink'>Je woont in " . $countryName . " en je bent " . $currentAge . "<br>" . "Je mag hier zwakke en sterke alcohol drinken.</p>";
}
elseif($countryName == "Bulgarije" && $currentAge <= "18")
{
    echo "<p class='drink'>Je mag nog geen alcohol drinken.";
}

//If else voor Cyprus

if($countryName == "Cyprus" && $currentAge >= "17")
{
    echo "<p class='drink'>Je woont in " . $countryName . " en je bent " . $currentAge . "<br>" . "Je mag hier zwakke en sterke alcohol drinken.</p>";
}
elseif($countryName == "Cyprus" && $currentAge <= "17")
{
    echo "<p class='drink'>Je mag nog geen alcohol drinken.";
}

//If else voor Nederland

if($countryName == "Nederland" && $currentAge >= "18")
{
    echo "<p class='drink'>Je woont in " . $countryName . " en je bent " . $currentAge . "<br>" . "Je mag hier zwakke en sterke alcohol drinken.</p>";
}
elseif($countryName == "Nederland" && $currentAge <= "18")
{
    echo "<p class='drink'>Je mag nog geen alcohol drinken.";
}

//If else voor Zweden

if($countryName == "Zweden" && $currentAge <= "18")
{
    echo "<p class='drink'>Je woont in " . $countryName . " en je bent " . $currentAge . "<br>" . "Je mag hier zwakke alcohol drinken.</p>";
}
elseif ($countryName == "Zweden" && $currentAge >= "20")
{
    echo "<p class='drink'>Je woont in " . $countryName . " en je bent " . $currentAge . "<br>" . "Je mag hier sterke alcohol drinken.</p>";
}

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
        <h1 id="titel">Opdracht 3.2</h1>
        <a href="../../Hoofdstuk%201/Opdracht%201/index.php"><img id="homebutton" src="../Opdracht%203.2/Images/homebutton.png" alt="Homebutton"></a>
    <div id="box">

    </div>
    <h1 id="age">Leeftijd</h1>
    <h1 id="drank">Drank</h1>
    </body>
</html>
