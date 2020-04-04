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
    <form action="uitschrijving.php" method="get">


        <label for="naam">Voor- en achternaam</label><br>
        <input type="text" name="naam" id="naam">
        <br>
        <br>

        <label for="student">Studentennummer</label><br>
        <input type="text" name="student" id="student">
        <br>
        <br>

        <label for="datum">Datum van uitschrijving</label><br>
        <input type="date" name="datum" id="datum">
        <br>
        <br>

        <label for="drop">Reden van uitschrijving</label><br>
        <select name="ddl" id="drop">
            <option value="verkeerd">Verkeerde opleiding</option>
            <option value="geenzin">Geen zin</option>
            <option value="slecht">Te slechte cijfers</option>
            <option value="tweekeer">Meer als 2 keer niet over</option>
        </select>
        <br>
        <br>

        <label for="eerste">1e jaar</label>
        <input type="radio" name="radio1" id="eerste" value="1e jaar">
        <br>

        <label for="tweede">2e jaar</label>
        <input type="radio" name="radio1" id="tweede" value="2e jaar">
        <br>

        <label for="derde">3e jaar</label>
        <input type="radio" name="radio1" id="derde" value="3e jaar">
        <br>
        <br>

        <label for="succes">Ik wil me aanmelden bij de succesklas</label>
        <input type="checkbox" name="select1" id="succes">
        <br>
        <br>

        <label for="verwijder">Verwijder mijn gegevens uit het systeem</label>
        <input type="checkbox" name="select2" id="verwijder">
        <br>
        <br>

        <label for="reden">geef hieronder de reden van je uitschrijving op</label><br>
        <br>
        <textarea name="textveld" id="reden" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" id="submit">
    </form>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>

