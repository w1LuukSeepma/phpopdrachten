<!doctype html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="/../../../phpopdrachten/Includes/footer/footer.css">
</head>
<div id="footer">
<?php
        date_default_timezone_set("Europe/Amsterdam");
        $uur = date("H");
        $year = date('Y');
        $name = "Luuk Seepma";

        if ($uur >= 0 && $uur <= 5)
        {
            $hour = "Goedennacht";
        }
        elseif ($uur >= 6 && $uur <= 12)
        {
            $hour = "Goedenmorgen";
        }
        elseif ($uur >= 13 && $uur <= 17)
        {
            $hour = "Goedenmiddag";
        }
        elseif ($uur >= 18 && $uur <= 24)
        {
            $hour = "Goedenavond";
        }

    if (isset($_SESSION['username']))
    {
        $bezoeker = $_SESSION['username']. "&nbsp;<a class='footer'
        href='/../../../phpopdrachten/Periode%204/Hoofdstuk%206/Opdracht%206.1/loguit.php'>Loguit</a>";
    }
    else
    {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a class='footer'
        href='/../../../phpopdrachten/Periode%204/Hoofdstuk%206/Opdracht%206.1/opdracht61.php'>Login</a>";
    }

    echo "<p>" . $hour . " " . $bezoeker . " " . "&copy;" . " " . $year .  "<p/>";

    ?>
</div>
</body>
</html>