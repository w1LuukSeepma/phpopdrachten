<?php
// Uitvoeren van een query via exec()
function executeQueryViaExec($sql)
{
    global $pdo;
    try
    {
        $pdo->exec($sql);
    }
    catch (PDOException $e)
    {
        echo 'ER is een probleem met uitvoeren van exec():' / $e->getMessage();
        exit();
    }
}

function startConnection()
{
    global $pdo;
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
}

//// Uitvoeren van een query
//function executeQuery($sql)
//{
//    global $pdo;
//    // Uitvoeren van een SQl query
//    try
//    {
//        // Query uitvoeren
//        $result = $pdo->query($sql);
//
//        return $result;
//    }
//    catch (PDOException $e)
//    {
//        echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
//        exit();
//    }
//}