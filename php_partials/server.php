<?php
  // includo il database
  include __DIR__ . "/db.php";
  // var_dump($discs);
  // lo converto per farlo leggere correttamente a js
  header("Content-type: application/json");
  echo json_encode($discs);
  // questa ora è la mia API, la richiamerò con axios nel file js
?>
