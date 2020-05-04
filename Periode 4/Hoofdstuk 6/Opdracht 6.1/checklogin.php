<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);


if ($_POST['username'] == 'Abu' && $_POST['password'] == 'bekend')
{
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: welkom.php');
}


    foreach ($authUsers as $gebruikersnaam => $password)
    {
        $wachtwoord = $_POST["password"];
        $username = $_POST["username"];

        if($gebruikersnaam === $username && $wachtwoord === $password)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');

        }
        elseif(empty($username) || empty($password))
        {
            header('location: opdracht61.php');
            echo "<p id='grijs'>" . "Wachtwoord of gebruikersnaam is leeg" . "<p/>";
            break;
            //Ik heb geprobeerd om foutmeldingen te maken maar ik kreeg dit op een of andere manier niet voor elkaar.
        }
        else
        {
            header('location: opdracht61.php');
            echo "<p id='red'>" . "Wachtwoord of gebruikersnaam is onjuist" . "<p/>";
            break;
            //Ik heb geprobeerd om foutmeldingen te maken maar ik kreeg dit op een of andere manier niet voor elkaar.
        }
    }


?>
