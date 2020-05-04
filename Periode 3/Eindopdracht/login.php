<?php
/**
 * User: Luuk Seepma
 * Date: 07/04/2020
 * Time: 18:10
 * File: index.php
 */

include "./script.php";
include "./Includes/include.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">
</head>
<?php
echo "<p>" . $message . "</p>";
?>
<div id="main">
    <?php
        if(!isset($_POST["submit"])) {
            ?>
            <form action="login.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="username">Username</label>
                        </td>
                        <td>
                            <input type="text" name="username" id="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" id="submit" name="submit">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
        }
    ?>
</div>
<img src="./images/left.png" alt="left" id="linkspijl">
<img src="./images/right.png" alt="right" id="rechtspijl">
<img src="./images/black-x-png-1.png" alt="x" id="x">
<img src="./images/home.png" alt="home" id="home">
<img src="./images/eye.png" alt="eye" id="eye">
<div id="balk"></div>
<div id="search"></div>
<div id="search2"></div>