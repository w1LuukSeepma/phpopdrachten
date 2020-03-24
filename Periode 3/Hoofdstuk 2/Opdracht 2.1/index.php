<?php

include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";
include "../../../Includes/footer/footer.php";

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
        <div id="generated">
            <h1>
                PHP gegenereerde text
            </h1>
            <?php
            echo '<p>'."Hello World!".'</p>';
            ?>
        </div>
        <a href="../../Hoofdstuk%201/Opdracht%201/index.php"> <img id="homebutton" src="./Images/homebutton.png" alt="Homebutton"></a>
    </body>
</html>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>