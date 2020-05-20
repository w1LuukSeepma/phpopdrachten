<?php

//include "../../../Includes/header/header.php";
//include "../../../Includes/menu/menu.php";

//phpinfo();
// Open de database connectie en ODBC driver

try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}

try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

?>
<table>
    <thead>
        <tr>
            <td>
                <b>ID</b>
            </td>
            <td>
                <b>Joketext</b>
            </td>
            <td>
                <b>Jokeclou</b>
            </td>
            <td>
                <b>Jokedate</b>
            </td>
        </tr>
    </thead>
<?php
foreach($aJokes as $grap)
{
    echo "<tr>" . "<td>" . $grap['id'] . "</td>" . "<td>" . $grap['joketext'] . "</td>" . "<td>" . $grap['jokeclou'] . "</td>" . "<td>" . $grap['jokedate'] . "</td>" . "</tr>";
}

//include "../../../Includes/footer/footer.php";
?>
</table>