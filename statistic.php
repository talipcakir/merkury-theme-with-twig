<?php

use function Composer\Autoload\includeFile;

require 'vendor/autoload.php';
require 'menus.php';

/* define path to a theme file */
$loader = new \Twig\Loader\FilesystemLoader('themes');

/* twig definition and send loader(themes) */
$twig = new \Twig\Environment($loader);

echo $twig->render('statistics.html', array(
  'header' => 'My Web Stats',
  'sales' => array('number' => '1,560', 'label' => 'Sales'),
  'views' => array('number' => '3,230', 'label' => 'Views'),
  'splineChart' => array('label' => 'Active Users', 'chart' => 'users-spline-chart',),
  'donutChart' => array(
    'header' => 'Total Sales',
    'data' => array(
      array(
        'chart' => 'sales-doughnut-chart-direct', 'number' => '2,300$', 'label' => 'Direct Sales',
      ),
      array(
        'chart' => 'sales-doughnut-chart-channel', 'number' => '980$', 'label' => 'Channel Sales',
      ),
      array(
        'chart' => 'sales-doughnut-chart-channel-2', 'number' => '1,250$', 'label' => 'Channel Sales',
      ),
    ),
  ),
));
