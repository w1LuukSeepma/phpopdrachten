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
<?php
echo  $_POST["nameExercise"];
?>
<table>
    <tr>
        <td class="bold">Bedrijfsnaam</td>
        <td>
            <?php
            echo $_POST["bedrijf"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Voornaam</td>
        <td>
            <?php
            echo $_POST["naam"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Achternaam</td>
        <td>
            <?php
            echo $_POST["achter"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Telefoon</td>
        <td>
            <?php
            echo $_POST["telefoon"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">E-mail</td>
        <td>
            <?php
            echo $_POST["email"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Bericht</td>
        <td>
            <?php
            echo $_POST["bericht"]
            ?>
        </td>
    </tr>
</table>
<?php
include "../../../Includes/footer/footer.php";
?>
