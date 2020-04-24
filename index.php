<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>
<head>
  <link rel="stylesheet" href="./libs/css/vivec.css" media="screen"/>
  <script type="text/javascript" src="./libs/js/vivec.js"></script>
  <title>Vivec Object Browsing</title>
</head>
<body>
  <div class=detail>
    Object detail goes here.
  </div>
  <br>
  <div class=film_strip>
    <!-- <button class="button_left" ><</button> -->
    <?php
      require_once dirname(__FILE__) . "/libs/php/vivec_functions.php";
      $num_of_frames = 5;
      $focused_frame = 3;
      $id = loadObjs();
      showFrames($id);
    ?>
  </div>
</body>
</html>
