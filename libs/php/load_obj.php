<?php

// Load up the film strip array
require_once dirname(__FILE__) ."/config.php";

$query="SELECT * FROM shoes WHERE InInventory=1";
$q = $DB->prepare($query);
$q->execute();
$objs = array();
while($r = $q->fetch()) {
  $key = $r['idShoes_table'];
  $img = "./images/" . htmlspecialchars($r['ImageFilename']) ;
  $t_array = array ($key=>$img);
  $objs = $objs + $t_array;
}
?>
