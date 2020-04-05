<?php
/**
 * User: Luuk Seepma
 * Date: 11/02/2020
 * Time: 18:10
 * File: index.php
 */
include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="./style.css">
</head>
<h1 id="titel">Wat is de situatie en wat moet ik doen?</h1>
<div id="main">
<?php

$stoplicht = $_POST["radio2"];
$ambulance = $_POST["radio"];

if(empty($stoplicht) || empty($ambulance))
{
    echo "<span style='color: white;font-weight:900'>" . "Je hebt geen of maar 1 waarde ingevuld, probeer het nog een keer." . "</span>";
    ?>
    <br>
    <?php
}
elseif($_POST["radio2"] == "rood" || $_POST["radio2"] == "oranje" || $_POST["radio"] == "een ambulance aan")
{
    echo "<span>Stoplicht staat op " . $stoplicht . " en er komt " . $ambulance . ":";
?>
    <br>
<?php

    echo "<span style='color: red;font-weight:900'>" . "U mag niet doorrijden" . "</span>";
}
elseif($_POST["radio2"] == "groen" || $_POST["radio"] == "geen ambulance aan")
{
    echo "Stoplicht staat op " . $stoplicht . " en er komt " . $ambulance . ":";
    ?>
    <br>
    <?php
    echo "<span style='color: green;font-weight:900'>" . "U mag doorrijden" . "</span>";
}


?>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>