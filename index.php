<?php
  require __DIR__ . "/php_partials/db.php";
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.css" integrity="sha512-9iWaz7iMchMkQOKA8K4Qpz6bpQRbhedFJB+MSdmJ5Nf4qIN1+5wOVnzg5BQs/mYH3sKtzY+DOgxiwMz8ZtMCsw==" crossorigin="anonymous" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/app.css">
    <title>php-ajax-dischi</title>
  </head>

  <body>

    <!-- header -->
    <?php require __DIR__ . "/php_partials/header.php"; ?>
    <!-- /header -->

    <!-- main -->
    <main>

      <?php foreach ($discs as $disc): ?>
        <div class="card">
          <!-- il tag img è direttamente nel database -->
          <?php echo $disc["poster"]; ?>
          <div>
            <h2><?php echo $disc["author"]; ?></h2>
            <h3><?php echo $disc["title"]; ?></h3>
            <p><?php echo $disc["genre"] . " - " . $disc["year"]; ?></p>
          </div>
        </div>
      <?php endforeach; ?>

    </main>
    <!-- /main -->

    <!-- footer -->
    <?php include __DIR__ . "/php_partials/footer.php"; ?>
    <!-- /footer -->

  </body>
</html>
