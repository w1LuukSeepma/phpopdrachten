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

for($counter = 0; $counter <= 7; $counter++)
{
    $count = strtotime("$counter days");
    echo "<br>";
    echo "Dag ";
    echo date('w', $count);
    echo " is ";
    echo date("l Y-m-d", $count);
}

?>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>
