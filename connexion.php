<?php 
$title = 'Se connecter';
require_once 'config.php';
require_once 'functions.php';
// Récupérer l'heure d'aujourd'hui $heure
date_default_timezone_set('Europe/Paris');
$heure = (int)($_GET['heure'] ?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N') - 1);
// Récupérer les créneaux d'aujourd'hui $creneaux
$creneaux = CRENEAUX[$jour];
// Récupérer l'état d'ouverture du magasin
$ouvert = in_creneaux($heure, $creneaux);
// $color = $ouvert ? 'green' : 'red';
require 'header.php';
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem vero perspiciatis accusamus quia autem, et alias est blanditiis sit nulla odit suscipit eligendi, nisi quibusdam natus, corporis delectus beatae placeat ipsa a repellendus perferendis ratione quis. Quos amet eos voluptatem.</p>
    </div>
    <div class="col-md-4">
        <h2>Horaire d'ouvertures</h2>

        <?php if($ouvert): ?>
            <div class="alert alert-success">
                Magasin: ouvert
            </div>
        <?php else:?>
            <div class="alert alert-danger">
                Magasin: fermé
            </div>
        <?php endif?>

        <!-- Formulaire pour vérifier les horaires d'ouvertures -->
        <form action="" method="GET">
            <div class="form-group">
                <?= select('jour', $jour, JOURS) ?>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="heure" value="<?= $heure ?>">
            </div>
            <button class="btn btn-primary" type="submit">Voir si le magasin est ouvert</button>
        </form>
   
        <!-- rajouter ici horaires d'ouvertures avec les jours de la semaine -->
        <ul>
            <?php foreach(JOURS as $k => $jour): ?>
                <li>
                    <strong><?= $jour ?></strong> :
                    
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>        
    </div>
</div>


<?php require 'footer.php'; ?>