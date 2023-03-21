<?php
require_once 'functions.php';
$title = "Notre menu";
$menu = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.csv');
$lignes = explode(PHP_EOL, $menu);
foreach ($lignes as $k => $ligne) {
    $lignes[$k] = str_getcsv(trim($ligne, " \t\n\r\0\x08,"));
}
require 'header.php';
?>

<h1>Menu</h1>

<?php foreach($lignes as $ligne): ?>
    <?php if (count($ligne) === 1): ?>
        <h2><?= $ligne[0]; ?></h2>
    <?php else: ?>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    <strong><?=$ligne[0];?></strong><br>
                    <?= $ligne[1]; ?>
                </p>    
            </div>
            <div class="col-sm-4">
                <?= $ligne[2]; ?> €
            </div>
        </div>


    <?php endif; ?>
<?php endforeach; ?>

<?php
require 'footer.php';
?>