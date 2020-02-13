<?php
/**
 * User: Luuk Seepma
 * Date: 11/02/2020
 * Time: 18:10
 * File: index.php
 */
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
        </header>
        <aside>
            <h2>Menu</h2>
            <ul>
                <li>Hoofdstuk 2
                    <ul>
                        <li>
                            <a href="">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
        </main>
    </body>
</html>
<?php
    //String
    $name = "Chad";

    //Boolean
    $teacher = true;

    //Integer
    $age = 19;

    //Float
    $decimal = 69.9;

    //Toon tekst
    echo "<p> Hallo mijn naam is " .     $name . " en ik ben " . $age . " oud. </p>";
?>
