<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>
<head>  
  <link rel="stylesheet" href="./libs/css/vivec.css" media="screen"/>
  <title>Vivec Object Browsing</title>
</head>
<body>

<div class=film_strip>
  <?php
    require_once "./libs/php/load_obj.php";
    $obj_frame = 1;

    while($r = $q->fetch()) {
      $img = htmlspecialchars($r['ImageFilename']) ;
      $t = '<img src=' . $img . ' alt="image" class="zoom"> ';
      echo $t;
    }
  ?>

</div>

<button class="button_left" ><</button>
<button class="button_right">></button>

</body>
</html>
