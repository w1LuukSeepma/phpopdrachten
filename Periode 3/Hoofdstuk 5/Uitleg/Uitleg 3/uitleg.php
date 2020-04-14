<?php
// Associatieve =Array and foreach
$fruit = array("apple" => "red", "orange" => "orange", "banana" => "yellow");

print_r($fruit);
echo $fruit["banana"];


foreach ($fruit as $key => $value)
{
    echo $key . ": ". $value . "<br>";
}



