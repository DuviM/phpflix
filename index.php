<?php

 $json = file_get_contents("movies.json");
 $movies = json_decode($json, true);

 include("template/header.php");
?>


<?php
include("template/footer.php");
?>