<?php
    
 $server = "localhost";
 $login = "y91092rf_2";
 $pass = "Py8dxi*C";
 $name_db = "y91092rf_2"; 
 
 $link = mysqli_connect($server, $login, $pass, $name_db);
 
 if ($link == false)
 {
     echo "Соединение не удалось";
 }
    ?>
    
    