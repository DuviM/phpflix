<?php

 $json = file_get_contents("movies.json");
 $movies = json_decode($json, true);

 include("template/header.php");
?>
<h1 class="page-title">PHPLIMZ</h1>
<div class="movie-list">
  <?php
    foreach ($movies as $movie) {
      ?>
      <div class="movie-card">
        <a href="moviePage.php?id=<?= $movie["id"] ?>" class="movie-page-link">
          <div class="movie-splash">
            <img src="<?= $movie["poster_path"] ?>" alt="" class="movie-poster">
            <span  class="<?php
                if (($movie["vote_average"] * 10) > 75) {
                  echo "movie-vote-success";
                } elseif (($movie["vote_average"] * 10) > 65 && ($movie["vote_average"] * 10) <= 75) {
                  echo "movie-vote-warning";
                } else {
                  echo "movie-vote-error";
                }
            ?>">
              <?= floor($movie["vote_average"] * 10) ?> %
            </span>
          </div>
          <div class="movie-short-info">
            <p class="movie-title">
              <?= $movie["original_title"] ?>
            </p>
            <p class="movie-date-release">
              <?= date("d F Y", strtotime($movie["release_date"])) ?>
            </p>
          </div>
        </a>
        <div class="movie-btn-basket">
          <p>
            Ajouter au panier
          </p>
        </div>
      </div>
      <?php
    }
  ?>
</div>


<?php
include("template/footer.php");
?>