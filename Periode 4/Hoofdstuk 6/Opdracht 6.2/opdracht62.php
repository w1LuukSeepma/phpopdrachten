<?php
include "../../../Includes/header/header.php";
include "../../../Includes/menu/menu.php";
?>
<div id="main">
    <form id="gameFrm" method="get" action="opdracht62.php">
         <div class="float">
             <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen" id="steen">
             <label for="steen">Steen</label>
         </div>
         <div class="float">
             <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier" id="papier">
             <label for="papier">Papier</label>
         </div>
         <div class="float">
             <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar" id="schaar">
             <label for="schaar">Schaar</label>
         </div>
    </form>
</div>
<?php
session_start();
//Spelregels
/*
* gelijke keuzes wint niemand
* schaar wint van papier
* schaar verliest van steen
* steen wint van schaar
* steen verliest van papier
* papier wint van steen steen
* papier verliest schaar
*/

?>
<div id="main">
<?php
if(!isset($_SESSION['user1']) && !isset($_SESSION['user2']))
{
    $_SESSION['user1'] = 0;
    $_SESSION['user2'] = 0;
}

if (isset($_GET['keuze']))
{
    echo "Jij koos: " . $_GET['keuze'] . "<br>";

    $opties = array("steen","papier","schaar");

    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "De computer koos: " . $computerkeuze;

    if ($_GET['keuze'] == "steen" && $computerkeuze == "schaar" || $_GET['keuze'] == "papier" && $computerkeuze == "steen" || $_GET['keuze'] == "schaar" && $computerkeuze == "papier" )
    {
        $_SESSION['user1'] += 1;
        $_SESSION['user2'] += 0;
    }
    elseif ($computerkeuze == "steen" && $_GET['keuze'] == "schaar" || $computerkeuze == "papier" && $_GET['keuze'] == "steen" || $computerkeuze == "schaar" && $_GET['keuze'] == "papier")
    {
        $_SESSION['user1'] += 0;
        $_SESSION['user2'] += 1;
    }
    elseif ($computerkeuze == "steen" && $_GET['keuze'] == "steen" || $computerkeuze == "papier" && $_GET['keuze'] == "papier" || $computerkeuze == "schaar" && $_GET['keuze'] == "schaar")
    {
        $_SESSION['user1'] += 0;
        $_SESSION['user2'] += 0;
    }

    ?>
    <div id="user">
    <?php
    echo "<p>" . $_SESSION['user1'] . "</p>";
    echo "<p>" . $_SESSION['user2'] . "</p>";


    ?>
    </div>
    <?php
    if($_SESSION['user1'] == 5)
    {
        echo "<p class='pos'>" . "Je hebt gewonnen knaap" . "</p>";
        session_destroy();
    }
    elseif($_SESSION['user2'] == 5)
    {
        echo "<p class='pos'>" . "Je bent een loser knaap" . "</p>";
        session_destroy();
    }

}

?>
</div>
<?php

include "../../../Includes/footer/footer.php";
