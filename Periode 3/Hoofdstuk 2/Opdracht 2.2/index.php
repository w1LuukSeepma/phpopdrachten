<?php
include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title><?php print "Index"; ?></title>
        <link href="./style.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="main">
            <?php

                //Taak 1
                $text1 = "Hallo";
                $text2 = "een makkelijke taal";
                $text3 = "zo'n makkelijke taal";
                $text4 = "wat is";
                $text5 = "PHP";
                $text6 = "Nooit gedacht dat";
                $text7 = "De installatie is best ingewikkeld";
                $text8 = "Fijn";
                $text9 = "?";
                $text10 = ".";
                $text11 = ",";
                $text12 = "<br>";
                $text13 = "is";
                $text14 = "Vind je niet";
                $text15 = "toch";

                //Taak 2
                echo "<p>". $text1 . $text11 . " " . $text4 . " " . $text5 . " " . $text3 . $text10 . $text12 . " " . $text7 . $text10 . " " . $text8 . " " . $text15 . $text9 . $text12 . $text6 . " " . $text5 . " " . $text3 . $text12 . $text13 . $text10 . "</p>";


                //Taak 3
                echo "<p>" . $text1 . $text11 . $text12 . $text8 . " " . $text15 . " dat " . $text5 . " " . $text3 . " " . $text13 . $text10 . $text12 . $text7 . $text10 . " " . $text14 . $text9 . "</p>"
            ?>
        </div>
    </body>
</html>
<?php
include "../../../Includes/footer/footer.php";
?>