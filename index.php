<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP: al caricamento della pagina, ci saranno tutti i dischi. -->

<?php
  include __DIR__ . "/php_partials/db.php";
  // include_once __DIR__ . "/php_partials/functions.php";
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/app.css">
    <title>php-ajax-dischi</title>
  </head>

  <body>
    <h1>php-ajax-dischi</h1>
    <?php foreach ($discs as $disc): ?>
      <div class="card">
        <?php echo $disc["author"] . "<br>" . $disc["title"] . "<br>" . $disc["genre"] . "<br>" . $disc["year"]; ?>
      </div>
    <?php endforeach; ?>
  </body>
</html>
