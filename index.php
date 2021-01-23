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
    <div class="card">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <?php var_dump($discs); ?>
  </body>
</html>
