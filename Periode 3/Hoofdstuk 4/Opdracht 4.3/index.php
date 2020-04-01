<?php
/**
 * User: Luuk Seepma
 * Date: 11/02/2020
 * Time: 18:10
 * File: index.php
 */
include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";
include "../../../Includes/footer/footer.php";
include "./script.php";
?>
<div id="main">
    <?php
    echo "<h3>" . "Taak 2" . "</h3>";
    echo "<p id='text1'>" . substr($message1, 0, -1) . "</p>";

    echo "<h3>" . "Taak 3" . "</h3>";
    echo "<p id='text2'>" . substr($message2, 0, -1) . "</p>";

    echo "<h3>" . "Taak 4" . "</h3>";
    echo $message3;

    echo "<h3>" . "Taak 5" . "</h3>";
    echo $message4;

    echo "<h3>" . "Taak 6" . "</h3>";
    echo $message5;

    echo "<h3>" . "Taak 7" . "</h3>";
    echo $message6;
    ?>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>
