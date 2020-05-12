<?php

include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";

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
echo "database connectie gelukt";

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
echo "<p id='jojo'>" . "database connectie gelukt" . "</p>";


include "../../../Includes/footer/footer.php";

