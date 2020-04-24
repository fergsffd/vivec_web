<?php
 require_once dirname(__FILE__) . "/database.php";
 $id = $_GET['id'];
 $query = "SELECT * FROM shoes WHERE idShoes_table = " . $id;
 $x = DB::run($query);

 echo 'You got to js detail function';
 }
?>
