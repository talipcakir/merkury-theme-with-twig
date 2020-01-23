<?php

use function Composer\Autoload\includeFile;

require 'vendor/autoload.php';
require 'menus.php';

/* define path to a theme file */
$loader = new \Twig\Loader\FilesystemLoader('themes');

/* twig definition and send loader(themes) */
$twig = new \Twig\Environment($loader);

echo $twig->render('workflow.html', array(
  'todoData' => array(
    'header' => 'To Do',
    'number' => 6,
    'data' => array(
      array(
        'message' => 'New website for LLC',
        'date' => '5 Day Left',
      ), array(
        'message' => 'Free PSD Template vol. 3',
        'date' => '5 Day Left',
      ), array(
        'message' => 'New logo for Google',
        'date' => '5 Day Left',
      ), array(
        'message' => 'New website for ckr.co',
        'date' => '5 Day Left',
      ), array(
        'message' => 'Free PSD Template vol. 2',
        'date' => '5 Day Left',
      ), array(
        'message' => 'Iconset vol. 3',
        'date' => '5 Day Left',
      ),
    ),
  ), 'todoData' => array(
    'header' => 'To Do',
    'number' => 6,
    'data' => array(
      array(
        'message' => 'New website for LLC',
        'date' => '5 Day Left',
      ), array(
        'message' => 'Free PSD Template vol. 3',
        'date' => '5 Day Left',
      ), array(
        'message' => 'New logo for Google',
        'date' => '5 Day Left',
      ), array(
        'message' => 'New website for ckr.co',
        'date' => '5 Day Left',
      ), array(
        'message' => 'Free PSD Template vol. 2',
        'date' => '5 Day Left',
      ), array(
        'message' => 'Iconset vol. 3',
        'date' => '5 Day Left',
      ),
    ),
  ),
  'inpData' => array(
    'header' => 'In Progress',
    'number' => 3,
    'data' => array(
      array(
        'message' => 'New logo for Apple',
        'date' => '5 Day Left',
      ), array(
        'message' => 'Daily UI Kit',
        'date' => '5 Day Left',
      ), array(
        'message' => 'Business Cards',
        'date' => '2 day delays',
      ),
    ),
  ),
  'complatedData' => array(
    'header' => 'Completed',
    'number' => 4,
    'data' => array(
      array(
        'message' => 'Free PSD Template vol. 1 ',
        'date' => 'Complated!',
      ), array(
        'message' => 'Iconset vol. 1 ',
        'date' => 'Complated!',
      ), array(
        'message' => 'New website for Tlp.co',
        'date' => 'Complated!',
      ), array(
        'message' => 'Iconset vol. 2',
        'date' => 'Complated!',
      ),
    ),
  ),
));
