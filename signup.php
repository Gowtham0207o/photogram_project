<?php
include 'libs/load.php';
?>
<!doctype html>
<html lang="en">

 <?php load_template("head")?>
  <body>
  <header>
<?php
load_template("header"); ?>

</header>
<br>
<br>
<main>

 <?php load_template("_signup"); ?>

</main>

<footer class="text-muted py-5">
 <?php load_template("footer"); ?>
</footer>


    <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>