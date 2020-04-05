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
<div id="main2">
    <form action="output.php" method="post">
        <table>
            <tr>
                <td>
                    <p>Komt er een ambulance aan?</p>
                </td>
                <td>
                    <input type="radio" value="een ambulance aan" name="radio" id="Ja">
                    <label for="Ja">Ja</label>

                    <input type="radio" value="geen ambulance aan" name="radio" id="Nee">
                    <label for="Nee">Nee</label>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Stoplicht kleur?</p>
                </td>
                <td>
                    <input type="radio" value="rood" name="radio2" id="Rood">
                    <label for="Rood">Rood</label>

                    <input type="radio" value="groen" name="radio2" id="Groen">
                    <label for="Groen">Groen</label>

                    <input type="radio" value="oranje" name="radio2" id="Oranje">
                    <label for="Oranje">Oranje</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>

