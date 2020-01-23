<?php

use function Composer\Autoload\includeFile;

require 'vendor/autoload.php';

echo '
<!-- style include START -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="themes/css/myStyle.css">
  <!-- style include END -->
  ';
echo '
<!-- script include START -->
  <script src="https://kit.fontawesome.com/62f27a7564.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <!-- script include END -->
  ';

  /* define path to a theme file */
$loader = new \Twig\Loader\FilesystemLoader('themes');

/* twig definition and send loader(themes) */
$twig = new \Twig\Environment($loader);

echo $twig->render('register.html', array(
  'logo' => array(
    'img' => 'themes/img/logo_mercury.png',
    'label' => 'Merkury',
  ),
  'headLabel' => 'Welcome',
  'headLabelB' => 'New!',
  'loginBack' => 'themes/img/bg.jpeg',
  'menu' => array(
    array(
      'name' => 'Register',
      'link' => 'register.php'
    ),
    array(
      'name' => 'Login',
      'link' => 'login.php'
    ),
  ),

));
