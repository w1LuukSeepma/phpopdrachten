<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title><?php print "Index"; ?></title>
        <link href="./style.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 id="header">Inleveropdrachten PHP</h1>
        <div id="generated">
            <h1>
                PHP gegenereerde text
            </h1>
            <?php
            echo '<p>'."Hello World!".'</p>';
            ?>
        </div>
        <a href="../../Hoofdstuk%201/Opdracht%201/index.php"> <img id="homebutton" src="./Images/homebutton.png" alt="Homebutton"></a>
        <div id="menu">
            <h1>Opdrachten:</h1>
            <ul>
                <li>
                    <h3>Hoofdstuk 2</h3>
                    <ul>
                        <li>
                            <a href="./index.php">Opdracht 2.1</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="../Opdracht%202.2/index.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h3>Hoofdstuk 3</h3>
                    <ul>
                        <li>
                            <a href="../../Hoofdstuk%203/Opdracht%203.1/Opdracht%203.1.php">Opdracht 3.1</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/../phpopdrachten/Periode%203/Hoofdstuk%203/Opdracht%203.2/index.php">Opdracht 3.2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </body>
</html>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>