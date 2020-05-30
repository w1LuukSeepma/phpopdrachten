<?php
/**
 * User: Luuk Seepma
 * Date: 11/02/2020
 * Time: 18:10
 * File: index.php
 */
//include "../../../Includes/header/header.php";
//include "../../../Includes/menu/menu.php";
include "./functions.php";

startConnection();
?>
<div id="main">
    <h1>
        Nieuwe grap toevoegen
    </h1>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="joketext">Joketext</label>
                </td>
                <td>
                    <input type="text" id="joketext" name="joketext" placeholder="Joketext komt hier">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jokeclou">Jokeclou</label>
                </td>
                <td>
                    <input type="text" id="jokeclou" name="jokeclou" placeholder="Jokeclou komt hier">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Verstuur" name="button">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php

if(isset($_POST["button"]))
{
$query = "INSERT INTO dbo.joke VALUES ('". $_POST["joketext"] ."', '" . $_POST["jokeclou"] . "', GETDATE())";
executeQueryViaExec($query);

echo
"<h1>" . "Grap toegevoegd" . "</h1>" .
"<p>" . "Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:" . "</p>" .
"<p>" . "Joketext:" . $_POST["joketext"] . "</p>" .
"<p>" . "Jokeclou:" . $_POST["jokeclou"] . "</p>" .

"<a href='../Opdracht%207.3/index.php'>" . "Bekijk grappen (opdracht 7.3)" . "</a>";
}



//include "../../../Includes/footer/footer.php";
?>

