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
        nav_item('/connexion.php', 'Se connecter', $linkClass);
}
?>

<!-- fonction pour les créneaux -->
<?php
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

?>