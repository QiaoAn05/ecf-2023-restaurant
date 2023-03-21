<?php 
$title = "Page d'accueil";
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
    <ul class="opening-times-list">
      <li class="opening-times-item my-2">Lundi: 12H00 à 15H00</li>
      <li class="opening-times-item my-2">Mardi: 12H00 à 15H00</li>
      <li class="opening-times-item my-2">Mercredi: Fermé</li>
      <li class="opening-times-item my-2">Jeudi: 12H00 à 15H00</li>
      <li class="opening-times-item my-2">Vendredi: 12H00 à 15H00</li>
      <li class="opening-times-item my-2">Samedi: 12H00 à 15H00</li>
      <li class="opening-times-item my-2">Dimanche: Fermé</li>
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