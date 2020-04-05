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
<div id="main">
    <form action="form.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="naam">Wat is je naam:</label>
                </td>
                <td>
                    <input type="text" name="naam" id="naam"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="age">Wat is je leeftijd:</label>
                </td>
                <td>
                    <input type="number" name="age" id="age">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gemeente">Gemeente:</label>
                </td>
                <td>
                    <select name="gemeente" id="gemeente">
                        <option value="Den Bosch">Den Bosch</option>
                        <option value="Zaltbommel">Zaltbommel</option>
                        <option value="Amsterdam">Amsterdam</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="inwoners">Aantal inwoners per gemeente:</label>
                </td>
                <td>
                    <input type="number" id="inwoners" name="citizens">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="radio">Ken je mensen die besmet zijn in je woonplaats?</label>
                </td>
                <td>
                    <label for="ja">Ja</label>
                    <input type="radio" id="ja" name="radio1" value="Ja">

                    <label for="nee">Nee</label>
                    <input type="radio" id="nee" name="radio1" value="Nee">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="besmet">Aantal mensen besmet in je gemeente?</label>
                </td>
                <td>
                    <input type="text" id="besmet" name="infected">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="sub" id="sub" value="Verzend">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>

