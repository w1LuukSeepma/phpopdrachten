<?php
?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/../phpopdrachten/Includes/footer/footer.css">
</head>
<body>
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
        echo "Goedemiddag bezoeker, " . "©" . " " .  $year . " " . $name;
    }
    ?>
</div>
</html>