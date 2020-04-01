<?php
/**
 * User: Luuk Seepma
 * Date: 11/02/2020
 * Time: 18:10
 * File: index.php
 */

include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";
?>
<div id="main">
    <?php

    $race = "Elfstedentocht";
    $raceFries = "Alvestêdetocht";
    $kilometer = 200;
    $sport = "Schaatstocht";
    $ijs = "Natuurijs";
    $organisatie = "Koninklijke Vereniging De Friesche Elf Steden";
    $organisatieplaats = "Leeuwarden";
    $provincie = "Friesland";
    $aantalkeer = 15;
    $eerstekeer = 1909;
    $maxaantal = 1;
    $verhaal = "<p>" . "De " . $race . " (Fries: " . $raceFries . ")" . " is een " . $kilometer . " kilometer lange " . $sport . " over " . $ijs . " die wordt georganiseerd door de " . $organisatie . ". " . $organisatieplaats . ", " . "de hoofdstad van " .  $provincie . ", " . "is start- en aankomstplaats. De " . $race . " is inmiddels " . $aantalkeer . " maal verreden en werd voor het eerst in " . $eerstekeer . " gereden en wordt maximaal " . $maxaantal . " keer per winter. gehouden." . "</p>";

    echo $verhaal;
    ?>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>

