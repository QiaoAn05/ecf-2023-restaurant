<?php 
$title = 'Menu';
require_once 'config.php';
require_once 'functions.php';

require 'header.php';
?>

<div class="row mx-5 my-5">
     <?php while ($row = $results->fetchArray()): ?>
          <div class="col-4 mt-3 name"><strong><?= $row['name'] ?></strong></div>
          <div class="col-4 description"><?= $row['description'] ?></div>
          <div class="col-4 price"><strong><?= $row['price'] ?>€</strong></div>
      <?php endwhile; ?>
</div>

<?php require 'footer.php'; ?>