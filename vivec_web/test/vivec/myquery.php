<?php
require './php/config.php';


$query="SELECT * FROM shoes";
$q = $DB->prepare($query);
$q->execute();

?>
<html>
<head>
    <title>My page</title>
</head>
<body>
  <table class="table table-bordered table-condensed">
  <thead>
      <tr>
          <th>ImageFilename</th>
          <th>Date Added</th>
          <th>InInventory</th>
      </tr>
  </thead>
  <tbody>
      <?php while ($r = $q->fetch()): ?>
          <tr>
              <td><?php echo htmlspecialchars($r['ImageFilename']) ?></td>
              <td><?php echo htmlspecialchars($r['DateAdded']); ?></td>
              <td><?php echo htmlspecialchars($r['InInventory']); ?></td>
          </tr>
      <?php endwhile; ?>
  </tbody>
</table>
</body>
</html>
