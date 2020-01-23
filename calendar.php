<?php

use function Composer\Autoload\includeFile;

require 'vendor/autoload.php';
require 'menus.php';

/* define path to a theme file */
$loader = new \Twig\Loader\FilesystemLoader('themes');

/* twig definition and send loader(themes) */
$twig = new \Twig\Environment($loader);

echo $twig->render('calendar.html', array(
  'header' => 'January 2020',
  'dayHead' => array(
    'Mon','Tue','Tue','Thu','Fri','Sat','Sun',
  ),
  'dayData' => array(
    array(
      'dayT' => '',
      'dayD' => 3,
      'dayTask' => 'Meeting User Four',
      'taskRank' => '2',
    ),
    array(
      'dayT' => '',
      'dayD' => 4,
      'dayTask' => 'Meeting User Four',
      'taskRank' => '1',
    ),
    array(
      'dayT' => '',
      'dayD' => 14,
      'dayTask' => 'Meeting Team',
      'taskRank' => '2',
    ),
    array(
      'dayT' => '',
      'dayD' => 8,
      'dayTask' => 'Call User Five',
      'taskRank' => '1',
    ),
    array(
      'dayT' => '',
      'dayD' => 21,
      'dayTask' => 'Call John!',
      'taskRank' => '1',
    ),
    array(
      'dayT' => '',
      'dayD' => 29,
      'dayTask' => 'Meeting Team',
      'taskRank' => '2',
    ),
  ),
));
