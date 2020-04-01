<?php

include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";

?>

<div id="main">
    <?php
        // Modelleren - Ralph Gijbrechts
        // Digitale vaardigheden - Larrisa Pilage
        // Computertekenen - Pieter van den Berg
        // SQL - Martijn van de Wetering
        // Javascript - Martijn van de Wetering
        // ASP - Martijn van Meer
        // PHP - Remco Evers
        // Nederlands - Jan-Chris van den Ende
        // Engels - Sandra Mitrovic-Vejzovic
        // Rekenen - Martijn van Meer
        // Burgerschap - Paula de Ruiter

        $courseName = "SQL";

        switch ($courseName)
        {
        case "HTML":
        $teacher = "Remco Evers";
        break;
        case "Modelleren":
        $teacher = "Ralph Gijbrechts";
        break;
        case "Digitale vaardigheden":
        $teacher = "Larrisa Pilage";
        break;
        case "Computertekenen":
        $teacher = "Pieter van den Berg";
        break;
        case "SQL":
        $teacher = "Martijn van de Wetering";
        break;
        case "Javascript":
        $teacher = "Martijn vd Wetering";
        break;
        case "ASP":
        $teacher = "Martijn van Meer";
        break;
        case "PHP":
        $teacher = "Remko Evers";
        break;
        case "Nederlands":
        $teacher = "Jan-Chris van den Ende";
        break;
        case "Engels":
        $teacher = "Sandra Mitrovic-Vejzovic";
        break;
        case "Rekenen":
        $teacher = "Martijn vn Meer";
        break;
        case "Burgerschap":
        $teacher = "Paula de Ruiter";
        break;
        }

        echo "<p>Voor het vak " . "<span>" . $courseName . "</span>" . " heb ik ". "<span>" .$teacher. "</span>" . " als leraar</p>";

    ?>
</div>
<?php
include "../../../Includes/footer/footer.php";
?>