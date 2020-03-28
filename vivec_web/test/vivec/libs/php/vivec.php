<?php

require_once './load_obj.php';
// echo "X";
while($r = $q->fetch()) {
          $img = htmlspecialchars($r['ImageFilename']) ;
          $t = '<img src=' . $img . ' alt=' . $img . '>';
          //echo $img;
          echo $t;
          echo '<br>';
}
?>
