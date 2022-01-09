<?php
session_start();
require_once ("Database/Database.php");
?>


<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Прсото обычный сайт</title>
<body>
    <h1 align="center"> Вывод </h1>
<?php
$query = "SELECT * FROM `TestForm`";
$select_bd = mysqli_query($link, $query);

while ($bd = mysqli_fetch_array($select_bd)){
    echo $bd ['id'], "<br>";
     echo "Имя ", $bd ['Name'], "<br>";
      echo "Цвет ", $bd ['Color'], "<br>";
      echo "Старше 18 ", $bd ['Older18'], "<br>";
      echo "Любимое время дня ", $bd ['FavDaytime'], "<br>";
}
?>
<button onclick><a href="index.php">Главная</a></button>
</body>
</html>