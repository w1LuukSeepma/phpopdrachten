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
    <form action="form_data.php" method="post">
        <label for="bNaam">Bedrijfsnaam</label><br>
        <input type="text" id="bNaam" name="bedrijf">
        <br>
        <br>
        <label for="vNaam">Voornaam</label><br>
        <input type="text" id="vNaam" name="naam">
        <br>
        <br>
        <label for="aNaam">Achternaam</label><br>
        <input type="text" id="aNaam" name="achter">
        <br>
        <br>
        <label for="tNummer">Telefoon</label><br>
        <input type="tel" id="tNummer" name="telefoon">
        <br>
        <br>
        <label for="eMail">E-mail</label><br>
        <input type="email" id="eMail" name="email">
        <br>
        <br>
        <label for="tBox">Bericht</label><br>
        <textarea name="bericht" id="tBox" cols="30" rows="10"></textarea>
        <br>
        <br>
        <input type="submit" id="submit">
    </form>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>

