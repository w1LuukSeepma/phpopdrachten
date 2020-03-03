<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title><?php print "Index"; ?></title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 id="header">Inleveropdrachten PHP</h1>
        <div id="menu">
            <h1>Opdrachten:</h1>
            <ul>
                <li>
                    <h3>Hoofdstuk 2</h3>
                    <ul>
                        <li>
                            <a href="../../Hoofdstuk%202/Opdracht%202.1/index.php">Opdracht 2.1</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="../../Hoofdstuk%202/Opdracht%202.2/index.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h3>Hoofdstuk 3</h3>
                    <ul>
                        <li>
                            <a href="">Opdracht 2</a>
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