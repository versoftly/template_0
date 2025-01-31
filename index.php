<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  define("TITLE",'freelancer mode');
  define("H1",'Adaptowebs');
  define("H2",'piezas4websites');
  function p (string $p) {
    return "<p>$p</p>";
  }
  function h(int $size,string $h) {
    if ($size >= 1 && $size <= 6) {
      return "<h$size>$h</h$size>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo TITLE; ?></title>
</head>
<body>
  <header>
    <h1><?php echo H1; ?></h1>
  </header>

  <section>
    <h2><?php echo H2; ?></h2>
    <?php echo p("Welcome to my portafolio.
    <br>un section inicia en cada heading"); ?>
  </section>

  <main>
    <?php echo h(2,"Actividades"); ?>

    <section>
      <?php 
        echo h(3,"Crypto Games"); 
        echo p("Welcome to my portafolio.");
      ?>
    </section>

    <section>
      <?php 
        echo h(3,"earn money playing Games"); 
        echo p("Welcome to my portafolio.");
      ?>
    </section>

    <section>
      <?php 
        echo h(3,"Learn is my passion"); 
        echo p("Welcome to my portafolio.");
      ?>
    </section>

  </main>

  <footer>
    <?php echo p("Welcome to my portafolio."); ?>
  </footer>
</body>
</html>