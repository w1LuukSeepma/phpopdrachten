    <?php

    ////////////////////////////////////////////////////////////////////////////////Taak 2

    $task2 = "Lancering in: ";
    $counter1 = 19;

    while($counter1 >= 1 )
    {

        if($counter1 < 19)
        {
            $task2 .= ", ";
        };

        $task2 .= $counter1;

        $counter1--;
    }

    $message1 = $task2 . $counter1;

    //////////////////////////////////////////////////////////////////////////////// Taak 3

    $task3 = "Lancering in: ";


    for($counter1 = 19; $counter1 >= 1; $counter1--)
    {
      if($counter1 < 19)
      {
          $task3 .= ", ";
      }

      $task3 .= $counter1;
    }

    $message2 = $task3 . $counter1;

    //////////////////////////////////////////////////////////////////////////////// Taak 4

    $task4 = "";
    $counter1 = 1;

    while($counter1 <= 6)
    {
            $task4 .= "<h$counter1 class='same'>" .  " Dit is de " .  $counter1 . "e " . "itteratie </h$counter1> <br>";
            $counter1++;
    }

    $message3 = $task4;

    //////////////////////////////////////////////////////////////////////////////// Taak 5


    $task5 = "";


    for($counter1 = 1; $counter1 <= 10; $counter1++)
    {
        $task5 .= "<tr>" . "<td>" . "Dit is de " .  $counter1 . "e " . "itteratie" . "</td>" . "</tr>";
    }
    $message4 = "<table>" . $task5 . "</table>";


    //////////////////////////////////////////////////////////////////////////////// Taak 6

    $task6 = "";
    $date = 2020;
    while($date >= 2000)
    {
        $age = $date - 2000;
        if($date == 2020)
        {
            $task6 .= "<p>" . "In " . $date . " ben/word ik " . $age . " jaar oud </p>";
        }
        elseif($date == 2000)
        {
            $task6 .= "<p>" . "In " . $date . " ben ik geboren " . "</p>";
        }
        else
        {
            $task6 .= "<p>" . "In " . $date .  " was ik " . $age . " jaar oud" . "</p>";
        }
        $date = $date - 1;
    }

    $message5 = $task6;

    //////////////////////////////////////////////////////////////////////////////// Taak 7

    $task7 = "";
    $date = 2020;
    while($date >= 2000)
    {
        $age = $date - 2000;
        if($date == 2020)
        {
            $task7 .= "<p>" . "In " . $date . " ben/word ik " . $age . " jaar oud en ben ik volwassen" ."</p>";
        }
        elseif($date == 2018)
        {
            $task7 .= "<p>" . "In " . $date . " was " . $age . " jaar oud en werd ik een adolecent" ."</p>";
        }
        elseif($date == 2012)
        {
            $task7 .= "<p>" . "In " . $date . " was " . $age . " jaar oud en werd ik een puber" ."</p>";
        }
        elseif($date == 2008)
        {
            $task7 .= "<p>" . "In " . $date . " was " . $age . " jaar oud en werd ik een tiener" ."</p>";
        }
        elseif($date == 2004)
        {
            $task7 .= "<p>" . "In " . $date . " was " . $age . " jaar oud en werd ik een kleuter" ."</p>";
        }
        elseif($date == 2002)
        {
            $task7 .= "<p>" . "In " . $date . " was " . $age . " jaar oud en werd ik een peuter" ."</p>";
        }
        elseif($date == 2000)
        {
            $task7 .= "<p>" . "In " . $date . " ben ik geboren  en was ik een baby" . "</p>";
        }
        else
        {
            $task7 .= "<p>" . "In " . $date . " was ik " . $age . " jaar oud" ."</p>";
        }
        $date = $date - 1;
    }

    $message6 = $task7;

    ?>

