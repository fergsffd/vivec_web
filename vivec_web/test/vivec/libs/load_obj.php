<?php

/* Load up object info. Will return a requested # of object
   I may put in some code to start at random object numbers.
*/
require 'config.php';

try {
 $start_obj_num = $argv[0];
   }
catch(Exception $e) {
  $start_obj_num = 0;
}
try {
  $db_name = argv[1];
}
catch (Exception $e) {
  $db_name = "shoes";
}
try {
  $num_objs = argv[2];
}
catch(Exception $e) {
  $num_objs = 5;
}

$query="SELECT count(*) FROM ". $db_name . " WHERE InInventory=1";
$q = $DB->prepare($query);
$q->execute();

?>
