<?php
session_start();
require_once ("Database/Database.php");
?>


<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Прсото обычный сайт</title>
<table>
    <form method='post'>
    <tr>
        <td>
            <label for="Name">Your name:</label></td>
        <td>
            <input type="text" Name="Name" /></td>
    </tr>
    <tr>
        <td>
            <label for="Color">Your favourite color:</label></td>
        <td>
            <select Name="Color">
                <option>Green</option>
                <option>Red</option>
                <option>Yellow</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="Older18">You are older than 18 years</label></td>
        <td>
            <input type="checkbox" Name="Older18" /></td>
    </tr>
    <tr>
        <td>Your favourite time of day:</td>
        <td>
            <input type="radio" name="FavDaytime" value="Morning">Morning</input>
            <br />
            <input type="radio" name="FavDaytime" value="Evening" >Evening</input>
            <br />
            <input type="radio" name="FavDaytime" value="Night" >Night</input>
            <br />
        </td>
    </tr>
    <input type="submit" value="Send" />
    </form>
    <tr>
        <td colspan="2">
            <button onclick><a href="Prod.php">Главная</a></button>
        </td>
    </tr>
</table>

</body>
</html>

<?php
$Name = $_POST['Name'];
$Color = $_POST['Color'];
$Older18 = $_POST['Older18'];
$FavDaytime = $_POST['FavDaytime'];
if (($Name)&&($Color)&&($FavDaytime))
{
    
$query = "INSERT INTO `TestForm` (`id`, `Name`, `Color`, `Older18`, `FavDaytime`) VALUES (NULL, '$Name', '$Color', '$Older18', '$FavDaytime');";
}

$result = mysqli_query ($link, $query);
?>