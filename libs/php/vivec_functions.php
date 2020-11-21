<?php
// require_once dirname(__FILE__) . "/config.php";
require_once dirname(__FILE__) . "/database.php";


function moveStrip($direction) {
  echo '<span class="popuptext" id="myPopup">';
  echo $direction;
  echo '</span>';
}
/* Get index from table. In the future, create ability to specify table name
   and other parameters.
*/
function loadIndexes() {
  $query = "SELECT idShoes_table FROM shoes WHERE InInventory=1";
  $id = array();
  $x = DB::run($query);
  while ($y = $x->fetch())
  {
    array_push( $id, $y['idShoes_table']);
  }
  //echo var_dump($id);
  return $id;
}

function showFrames($id, $focused_frame = 0) {
  for ($x = 0; $x <= count($id); $x++) {
    $tgt_frame = $focused_frame + $x;
    $y = ($tgt_frame) % count($id); //wrap around to beginning of array
    // Put in wrap around marker for display to html
    if ( $y == 0 && ( $tgt_frame == count($id) ) ) {
      $marker = true;
    }
    else { $marker = false; }

    $query = "SELECT * FROM shoes WHERE idShoes_table=" . $id[$y];
    $q = DB::run($query);
    $result = $q->fetch();
    $img = './images/' . htmlspecialchars( $result['ImageFilename']) ;
    if ( !file_exists( $img )) {
      $nope = $img;
      $img = '<img src=';
      $img .= htmlspecialchars("./images/NoImage.png") . ' title="' . $nope . '">';
    }
    else {
      $key = $result['idShoes_table'];
      $img  = '<img src="' . $img;
      $img .= '" alt="image" onclick="showDetail(' . $key . ')" class="zoom"> ';
    }

    echo $img;
  }
  //return $msg;
}
function loadObjs() {
  $query = "SELECT * FROM shoes WHERE InInventory=1";
  $id = array();
  $q = DB::run($query);
  while ($y = $q->fetch()) {
      array_push( $id, $y['idShoes_table']);
  }
  // echo var_dump($id);
  return $id;
}
?>
