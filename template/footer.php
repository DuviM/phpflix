<?php

 $json = file_get_contents("movies.json");
 $movies = json_decode($json, true);

?>
</div>
  <div class="footer-wrapper">
    <div>
      <hr class="footer-separator"> 
      <p class="footer-copyright">Copyrigth © <?= date("d-m-Y")?>. <strong>PHP<span class="footer-logo">FLIX</span></strong> . Catalogue de <strong><?= count($movies) ?></strong> films.</p>
    </div>
  </div>
</body>
</html>