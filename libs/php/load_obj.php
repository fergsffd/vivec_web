<?php

// Load up the $q array
require_once "./libs/php/config.php";


$query="SELECT * FROM shoes";
$q = $DB->prepare($query);
$q->execute();
?>
