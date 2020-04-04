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
<table>
    <tr>
        <td class="bold">Voor- en Achternaam</td>
        <td>
            <?php
            echo $_GET["naam"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Studentnummer</td>
        <td>
            <?php
            echo $_GET["student"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Datum van uitschrijving</td>
        <td>
            <?php
            echo $_GET["datum"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Reden van uitschrijving</td>
        <td>
            <?php
            echo $_GET["ddl"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Leerjaar</td>
        <td>
            <?php
            echo $_GET["radio1"]
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Aanmelden bij succesklas</td>
        <td>
            <?php
            $check = $_GET["select1"];
            if(empty($check))
            {
                echo "NEE";
            }
            else
            {
                echo "JA";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Verwijderen gegevens</td>
        <td>
            <?php
            $check = $_GET["select2"];
            if(empty($check))
            {
                echo "NEE";
            }
            else
            {
                echo "JA";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td class="bold">Reden van uitschrijving:</td>
        <td>
            <?php
            echo $_GET["textveld"]
            ?>
        </td>
    </tr>
</table>
<?php
include "../../../Includes/footer/footer.php";
?>