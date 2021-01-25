<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.css" integrity="sha512-9iWaz7iMchMkQOKA8K4Qpz6bpQRbhedFJB+MSdmJ5Nf4qIN1+5wOVnzg5BQs/mYH3sKtzY+DOgxiwMz8ZtMCsw==" crossorigin="anonymous" />
  <!-- css -->
  <link rel="stylesheet" href="css/app.css">
  <title>Versione VUE - php-ajax-dischi</title>
</head>

<body>
  <div id="app">
  
  <!-- header -->
  <?php require __DIR__ . "/php_partials/header.php"; ?>
  <!-- /header -->

  <!-- main -->
  <main>
    <div class="card" v-for="(disc) in discs">
      <div>
        <h2>{{ disc.author }}</h2>
        <h3>{{ disc.title }}</h3>
        <p>{{ disc.genre }} - {{ disc.year }}</p>
      </div>
    </div>
  </main>
  <!-- /main -->

  <!-- footer -->
  <?php include __DIR__ . "/php_partials/footer.php"; ?>
  <!-- /footer -->
  
  </div>
  <script src="js/app.js" charset="utf-8"></script>
</body>
</html>