<!doctype html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">
</head>
<?php

include "./Includes/include.php";

$gegevens = array("Jaelle123"=>"Jaelle123", "Rachel123"=>"Rachel123", "Thomas123"=>"Thomas123", "Lucas123"=>"Lucas123", "Siebe123"=>"Siebe123", "Teun123"=>"Teun123", "Daniel123"=>"Daniel123", "Arend123"=>"Arend123", "Vincent123"=>"Vincent123", "Jill123"=>"Jill123");

$message = "";

$wachtwoord = $_POST["password"];

$username = $_POST["username"];

if(isset($_POST["submit"]))
{
    $check = true;
    $ingevuld = true;
    foreach ($gegevens as $gebruikersnaam => $password)
    {
        if($gebruikersnaam === $username && $wachtwoord === $password)
        {
            $login = true;
        }
        else
        {
            $login = false;
        }

        if ($login) break;
    }

    if(empty($username) || empty($wachtwoord))
    {
        echo $message = "<p id='grey'>" . "Wachtwoord of gebruikersnaam is niet ingevuld" . "</p>";
    }
    elseif ($login)
    {
        ?>
        <div id="fullscreen"></div>
        <h1 id="welkom">Welkom!</h1>
        <div id="links">
            <h1>Openingstijden</h1>
            <p>
                Donderdag: 22:00 <br>
                Vrijdag: Hele dag <br>
                Zaterdag: Hele dag <br>
                Zondag: 12:00
            </p>
        </div>
        <div id="rechts">
            <h1>Adresgegevens</h1>
            <p>
                AM Wriezener Bahnhof <br>
                10243 Berlin <br>
                Duitsland <br>
            </p>
        </div>
        <h1 id="verboden">
            Deze gegevens dien je ten alle tijden geheim te houden!
        </h1>
        <?php
    }
    else
    {
        echo $message = "<p id='red'>" . "Het wachtwoord of de gebruikersnaam is onjuist, probeer het nog een keer" . "</p>";
    }
}
?>
<img src="./images/left.png" alt="left" id="linkspijl">
<img src="./images/right.png" alt="right" id="rechtspijl">
<img src="./images/black-x-png-1.png" alt="x" id="x">
<img src="./images/home.png" alt="home" id="home">
<img src="./images/eye.png" alt="eye" id="eye">
<div id="balk"></div>
<div id="search"></div>
<div id="search2"></div>
