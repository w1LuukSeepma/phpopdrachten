<?php


//print_r($_GET);

echo $_POST["firstname"] . " " . $_POST["lastname"] . ", ";

$subject = $_POST["subject"];

if ($subject == "Javascript")
{
    echo "Dit is een uitleg over het vak Javascript";
}
elseif ($subject == "PHP")
{
    echo "Dit is een uitleg over het vak PHP";
}

//POST kun je niet zien.
//GET kun je wel zien.
