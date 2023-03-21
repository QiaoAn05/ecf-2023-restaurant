<?php
function nav_item (string $lien, string $titre, string $linkClass = ''): string
{
    $classe = 'nav-link';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return <<<HTML
    <li class="nav-item">
    <a class="$classe $linkClass" href="$lien">$titre</a>
    </li>
HTML;
}

function nav_menu(string $linkClass = ''): string
{
    return
        nav_item('/index.php', 'Accueil', $linkClass) .
        nav_item('/menu.php', 'Menu', $linkClass) .
        nav_item('/reservation.php', 'Réserver', $linkClass);
}


function select (string $name, $value, array $options): string {
    $html_options = [];
    foreach($options as $k => $option) {
        $attribute = $k === $value ? 'selected' : '';
        $html_options[] = "<option value='$k' $attribute>$option</option>";
    }
    return "<select class='form-control' name='$name'>" . implode($html_options) . '</select>';
}



//fonction pour les créneaux

function creneaux_html(array $creneaux) {
    //Construire le tableau intermédiaire
    //de Xh à Yh
    //Implode pour construire la phrase finale
    if (empty($creneaux)) {
    return 'Fermé';
    }
    $phrases = [];
    foreach($creneaux as $creneau) {
        $phrases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
    }
    return 'Ouvert ' . implode(' et ', $phrases);
}

function in_creneaux (int $heure, array $creneaux): bool {
    foreach($creneaux as $creneau) {
        $debut = $creneau[0];
        $fin = $creneau[1];
        if ($heure >= $debut && $heure < $fin) {
            return true;
        }
    }
    return false;
}


//display database with function
/*
function dataOnLine() {
$db = new SQLite3(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'db.sqlite');
$results = $db->query('
  SELECT h.name, c.name AS type, h.price, h.slug
  FROM hardwares h
  JOIN categories c ON h.category_id = c.id;
');
  $columns = ['name', 'type', 'description', 'price'];
  while ($row = $results->fetchArray()) {
?>
    <div class="data-line-row container">
<?php 
    foreach ($columns as $column) {
?>
      <div class="data-line-col data-line"><?= $row[$column] ?></div>
<?php 
    }
?>
    </div>
<?php 
  }
}
*/
?>