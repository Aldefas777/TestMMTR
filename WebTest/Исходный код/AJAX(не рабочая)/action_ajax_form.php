<?php

if (isset($_POST["name"]) && isset($_POST["color"]) ) { 


    $result = array(
    	'name' => $_POST["name"],
    	'color' => $_POST["color"],
    	'years' => $_POST["years"],
    	'daytime' => $_POST["daytime"]
    ); 


    echo json_encode($result); 
}

?>