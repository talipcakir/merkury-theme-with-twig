<?php
/* import css */

use function Composer\Autoload\includeFile;

require 'vendor/autoload.php';
require 'menus.php';
/* define path to a theme file */
$loader = new \Twig\Loader\FilesystemLoader('themes');

/* twig definition and send loader(themes) */
$twig = new \Twig\Environment($loader);

echo $twig->render('home.html', array(
  'homeHeader' => 'Hello Visitor',
  /* chart dropdown menu */
  'chartDropMenu' => array(
    array('link' => '#LastDay', 'label' => 'Last Day',),
    array('link' => '#LastWeek', 'label' => 'Last Week',),
    array('link' => '#LastYear', 'label' => 'Last Year',),
  ),
  'chartDropHead' => array(
    'label' => 'Period: ', 'def' => 'Last Year'
  ),
  /* file path */
  'imgPath' => 'themes/img/',
  
  /* chart name and inside */
  'chartList' => array(
    'salesDonut' => 'sales-doughnut-chart-direct',
    'salesDonutHeader' => 'Your Sales',
    'salesDonutList' => array(
      'Websites', 'Logo', 'Social Media', 'Adwords', 'E-Commerce'
    ),
    'spline' => 'users-spline-chart',
    'splineHeader' => 'Active Users',
  ),
  /* messages data */
  'messagesData' => array(
    'header' => 'Messages',
    'label' => 2,
    'tooltip' => '2 new messages',
    'in' => array(array(
      'link' => '#messages',
      'user' => 'User Four',
      'userImg' => "user4.jpeg",
      'date' => '5 min ago',
      'message' => 'Hey You!. It\'s me again:-)',
    ), array(
      'link' => '#messages',
      'user' => 'User Four',
      'userImg' => "user4.jpeg",
      'date' => '5 min ago',
      'message' => 'Hey! I attached some ',
    ), array(
      'link' => '#messages',
      'user' => 'User Seven',
      'userImg' => "user7.jpeg",
      'date' => '2 day ago',
      'message' => 'Good morning, you are',
    ), array(
      'link' => '#messages',
      'user' => 'User Five',
      'userImg' => "user5.jpeg",
      'date' => '5 day ago',
      'message' => 'Hello! Could You bring me coffee',
    ),),
  ),
  /* activity data */
  'notificationData' => array(
    'label' => 1,
    'totalActivity' => 5,
    'header' => 'Activity',
    'tooltip' => '1 new notification',
    'link' => '#notification',
    'in' => array(
      array(
        'link' => '#notification',
        'user' => 'User Four',
        'userImg' => "user4.jpeg",
        'date' => 'Just now',
        'message' => 'add a new project',
        'task' => 'Free UI Kit',
      ), array(
        'link' => '#notification',
        'user' => 'User Tree',
        'userImg' => 'user3.jpeg',
        'date' => '40 min ago',
        'message' => 'comment project',
        'task' => 'Free PSD Template',
      ), array(
        'link' => '#notification',
        'user' => 'User Two',
        'userImg' => "user2.jpeg",
        'date' => '1 hour ago',
        'message' => 'complated project',
        'task' => 'Ckr.co Website',
      ), array(
        'link' => '#notification',
        'user' => 'User Tree',
        'userImg' => "user3.jpeg",
        'date' => '3 hour ago',
        'message' => 'add a new project',
        'task' => 'Free PSD',
      ),
    ),
  ),
  /* task area data */
  'task' => array(
    'label' => 'Tasks',
    'number' => array('no' => 5, 'tooltip' => '5 Tasks available'),
    'numberDelay' => array('no' => 2, 'tooltip' => '2 Tasks Delay'),
    'data' => array(array(
      'message' => 'New website for LLC',
      'date' => '5 day delay',
    ), array(
      'message' => 'Free business PSD Template',
      'date' => '2 day delay',
    ), array(
      'message' => 'New logo for tlp.co',
      'date' => '5 day left',
    ), array(
      'message' => 'Free Icons Set vol. 3 ',
      'date' => '10 day left',
    ),),
  ),
  /* user data START*/
  'user' => array(
    'one' => array(
      'img' => 'user1.jpeg',
      'name' => 'Talip ÇAKIR'
    ),
    'two' => array(
      'img' => 'user2.jpeg',
      'name' => 'User Two'
    ),
    'tree' => array(
      'img' => 'user3.jpeg',
      'name' => 'User Tree'
    ),
    'four' => array(
      'img' => 'user4.jpeg',
      'name' => 'User Four'
    ),
    'five' => array(
      'img' => 'user5.jpeg',
      'name' => 'User Five'
    ),
    'six' => array(
      'img' => 'user6.jpeg',
      'name' => 'User Six'
    ),
    'seven' => array(
      'img' => 'user7.jpeg',
      'name' => 'User Seven'
    ),
  ),
  /* User data END */
));
