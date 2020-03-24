<?php

//Vorige lessen - Wat hebben we besproken?
//strtotime
//echo strtotime("+1 days");
//echo date("d-m-Y", strtotime("+1 days"));

/*
 * for($counter = 0; $counter < 10; $counter++)
 *  {
 *     echo $counter;
 *  }
*/
?>

<form action="form_data.php" method="post"
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" id="firstname">

    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" id="lastname">

    <select name="subject">
        <option value="PHP">PHP</option>
        <option value="Javascript">Javascript</option>
    </select>

    <input type="submit">
</form>

