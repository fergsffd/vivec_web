<?php

// Load up the $q array
require './libs/config.php';


$query="SELECT * FROM shoes";
$q = $DB->prepare($query);
$q->execute();
?>
