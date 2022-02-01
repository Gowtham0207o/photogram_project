<?php
include 'libs/load.php';
?>
<!doctype html>
<html lang="en">

<?php load_template("head")?>
<body>
  <header>
    <?php
      load_template("header");
	?>
  </header>
  <main>

    <?php load_template("main_heading");
 ?>

<?php load_template("photo_cards");?>

  </main>

    <?php load_template("footer");
 ?>
  </footer>


  <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>