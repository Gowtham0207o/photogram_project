<?php
include 'libs/load.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="gowtham mass">
  <meta name="generator" content="Hugo 0.88.1">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <title>photogram project</title>



  <!-- Bootstrap core CSS -->
  <link href="/app/assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>
  <header>
    <?php
load_template("header");?>

  </header>
  <main>

    <section class="py-5 text-center container">
      <?php load_template("main_heading");
 ?>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <?php load_template("photo_cards");?>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <?php load_template("footer");
 ?>
  </footer>


  <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>