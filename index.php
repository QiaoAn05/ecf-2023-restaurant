<?php 
$title = "Page d'accueil";
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
<!-- reservation btn -->
<section class="row my-5 section-opening-times">
  <div class="col-4">
    <img class="w-100" src="media/chef.jpg" alt="chef">
  </div>
  <div class="col-8">
  <div class="d-grid gap-2 col-6 my-5 mx-auto">
    <h2 class="text-center mb-4">Horaires</h2>
    <ul>
      <?php foreach(JOURS as $k => $jour): ?>
        <li>
          <strong><?= $jour ?></strong> : 
            <?= creneaux_html(CRENEAUX[$k]); ?>
        </li>
          <?php endforeach; ?>
    </ul> 
    <button class="btn btn-primary btn-reservation mt-4" type="button">Réserver</button>
    </div>
  </div>
</section>
        
<section class="row">
  <div class="col-4">
    <img src="media/meat.jpg" class="img-fluid" alt="photo meat">
  </div>
  <div class="col-4">
    <img src="media/salmon.jpg" class="img-fluid" alt="photo salmon">
  </div>
  <div class="col-4">
    <img src="media/vegetables.jpg" class="img-fluid" alt="photo vegetables">
  </div>
</section>

<?php require 'footer.php';?>