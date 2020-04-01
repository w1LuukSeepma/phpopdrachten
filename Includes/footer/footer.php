<!doctype html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="../../../Includes/footer/footer.css">
</head>
<div id="footer">
        <?php
        date_default_timezone_set("Europe/Amsterdam");
        $uur = date("H");
        $year = date('Y');
        $name = "Luuk Seepma";

        if ($uur >= 0 && $uur <= 5)
        {
            echo "Goedennacht bezoeker, " . "©" . " " .  $year . " " . $name;
        }
        elseif ($uur >= 6 && $uur <= 12)
        {
            echo "Goedemorgen bezoeker, " . "©" . " " .  $year . " " . $name;
        }
        elseif ($uur >= 13 && $uur <= 17)
        {
            echo "Goedemiddag bezoeker, " . "©" . " " .  $year . " " . $name;
        }
        elseif ($uur >= 18 && $uur <= 24)
        {
            echo "Goedeavond bezoeker, " . "©" . " " .  $year . " " . $name;
        }
        ?>
    </div>
    </body>
</html>