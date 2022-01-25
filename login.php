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
    <title>photogram project</title>

    

    <!-- Bootstrap core CSS -->
<link href="/app/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover-min.css" integrity="sha512-glciccPoOqr5mfDGmlJ3bpbvomZmFK+5dRARpt62nZnlKwaYZSfFpFIgUoD8ujqBw4TmPa/F3TX28OctJzoLfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
      body{
       background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aHkWHna0ldHT6xkwfLG-QUdoQwjidNX3A&usqp=CAU");
       background-repeat:no-repeat;
       background-size:100% 100%;
       background-attachment: scroll;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
      }
    </style>

    
  </head>
  <body>
  <header>
<?php
load_template("header");?>

</header>
<br>
<br>
<main>

 <?php load_template("_login");
 ?>

</main>

<footer class="text-muted py-5">
 <?php load_template("footer");
 ?>
</footer>


    <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
