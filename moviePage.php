<?php
 $find = false;
 $data = array("title" => "Pas de film a cette adresse");
 if (isset($_GET["id"])){
   $json = file_get_contents("movies.json");
   $movies = json_decode($json, true);

   foreach ($movies as $movie) {
     if($movie["id"] == $_GET["id"]) {
       $find = true;
       $data = $movie;
     }
   }
 }
 
 $json = file_get_contents("actors.json");
 $actors = json_decode($json, true);
 
 $json = file_get_contents("genres.json");
 $genres = json_decode($json, true);

 include("template/header.php");
?>
<?php
if ($find) {
?>
<div class="single-movie-container">
  <div class="single-movie-background">
  <img src="<?= $data["backdrop_path"] ?>" alt="" class="single-movie-backdrop-image">
  <div class="single-movie-depiction">
        <div class="single-movie-poster">
          <img src="<?= $data["poster_path"] ?>" alt="">
        </div>
        <div class="single-movie-info">
          <div class="single-movie-title">
            <p class="single-movie-original-title">
              <?= $data["original_title"] ?>
            </p>
            <p class="single-movie-year">
              (<?= date ("Y", strtotime ($data["release_date"])) ?>)
            </p>
          </div>
          <div class="single-movie-date">
            <p class="single-movie-release-date">
            <?= date("d F Y", strtotime($movie["release_date"])) ?>
            </p>
            <p class="single-movie-category">
              <?= $data["genreId"] ?>
            </p>
            <p class="single-movie-duration">
              <?= sprintf("%dh%02d",   floor($data["runtime"]/60), $data["runtime"]%60); ?>
            </p>
          </div>
          <div class="single-movie-rating">
            <div class="single-movie-rating-bar">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <p class="single-movie-note">
              <?= floor($data["vote_average"] * 10); ?> %
            </p>
          </div>
          <div class="single-movie-tagline">
            <p>
              "<?= $data["tagline"] ?>"
            </p>
          </div>
          <div class="single-movie-resume">
            <p class="single-movie-synopsis">Synopsis :</p>
            <p class="single-movie-overview">
              <?= $data["overview"] ?>
            </p>
          </div>
        </div>
    </div>
  </div>
  <div class="casting">
  </div>
</div>

<?php
}
include("template/footer.php");
?>