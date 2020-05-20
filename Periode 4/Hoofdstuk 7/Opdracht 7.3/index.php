<?php


// Inladen functies bestand
include("functions.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "SELECT * FROM joke";

if(isset($_GET["search"]))
{
    if(!empty($_GET["search"]))
    {
        $search = $_GET["search"];

        $query = "SELECT * FROM joke WHERE joketext LIKE '%$search%'";
    }
}


$jokes = executeQuery($query);
echo "<p> $query </p>";
?>

<form method="get">
    <label for="search">Zoekterm</label><input id="search" type="text" name="search">
    <button type="submit">Zoeken</button><br/>
    <hr>
</form>
<table>
    <thead>
    <tr>
        <td>
            JokeID
        </td>
        <td>
            JokeText
        </td>
        <td>
            JokeClou
        </td>
        <td>
            JokeDate
        </td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($jokes as $grap)
    {
        echo "<tr>" . "<td>" . $grap['id'] . "</td>" . "<td>" . $grap['joketext'] . "</td>" . "<td>" . $grap['jokeclou'] . "</td>" . "<td>" . $grap['jokedate'] . "</td>" . "</tr>";
    }
    ?>
    </tbody>
</table>