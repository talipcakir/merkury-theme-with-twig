<?php

use function Composer\Autoload\includeFile;

require 'vendor/autoload.php';
require 'menus.php';

/* define path to a theme file */
$loader = new \Twig\Loader\FilesystemLoader('themes');

/* twig definition and send loader(themes) */
$twig = new \Twig\Environment($loader);

echo $twig->render('settings.html', array(
  


));
