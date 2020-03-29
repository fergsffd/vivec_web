<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>
<head>  Image filename fix </head>
<br>
<body>
<?php
// fix image filename path to allow for access to images from different image
// file directrory paths

require_once "./config.php";
// $I_FN_WILDCARD = '@'; // Image file name pathing signifier

$query="SELECT ImageFilename FROM shoes";
$q = $DB->prepare($query);
$q->execute();

while($r = $q->fetch()) {
  $image_file = htmlspecialchars($r['ImageFilename']) ;
  //$new_str = $I_FN_WILDCARD;
  $msg = 'Current db filename:' . $image_file . ' Proposed: ';
  $x = strripos($image_file,'/');
  if( $x === FALSE ) {
    $msg .= 'Not found';
  }
  else {
    $x += 1;
    $new_str = substr($image_file,$x);
    $msg .= $new_str;
  }

  echo $msg;
  echo '<br>';
  $chg_query =   'UPDATE shoes SET ImageFilename = "' . $new_str;
  $chg_query .=  '" WHERE ImageFilename = "'. $image_file . '"';
  echo 'Query to be run: ';
  echo $chg_query;
  echo '<br>-------<br>';
  $c = $DB->prepare($chg_query );
  $c->execute();
}
?>

</body>
</html>
