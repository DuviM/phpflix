<div class="single-movie-depiction">
        <div class="single-movie-poster">
          <img src="<?= $data["poster_path"] ?>" alt="">
        </div>
        <div class="single-movie-info">
          <div class="single-movie-title">
            <p>
              <?= $data["original_title"] ?>
            </p>
            <p>
              (<?= date ("Y", strtotime ($data["release_date"])) ?>)
            </p>
          </div>
          <div clss="single-movie-date">
            <p>
            <?= date("d F Y", strtotime($movie["release_date"])) ?> - <?php $genres[1]["name"] ?> - <?= sprintf("%dh%02d",   floor($data["runtime"]/60), $data["duration"]%60); ?>
            </p>
          </div>
          <div>
            <div class="rating-bar">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <?= floor($data["vote_average"] * 10); ?>%      
          </div>
        </div>
    </div>