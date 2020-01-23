<?php
/* import css */
echo '
<!-- style include START -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" id="fontawesome-css" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1"
    type="text/css" media="all" />
  <link rel="stylesheet" href="themes/css/myStyle.css">
  <!-- style include END -->
';
/* import js */
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
  <script src="themes/js/myJS.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script><!-- canvasjs chart -->
  <script src="themes/js/chartJS.js"></script><!-- chart data -->
  <!-- script include END -->
';
require 'vendor/autoload.php';

/* define path to a theme file */
$loader = new \Twig\Loader\FilesystemLoader('themes');

/* twig definition and send loader(themes) */
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', array(
  /* menu list */
  'menuList' => array(
    array(
      'name' => 'Home',
      'link' => 'index.php',
      'icon' => 'fa fa-home fa-fw text-primary'
    ), array(
      'name' => 'Workflow',
      'link' => 'workflow.php',
      'icon' => 'fa fa-server fa-fw text-primary'
    ), array(
      'name' => 'Statistic',
      'link' => 'statistic.php',
      'icon' => 'fa fa-line-chart fa-fw text-primary'
    ), array(
      'name' => 'Calendar',
      'link' => 'calendar.php',
      'icon' => 'fa fa-calendar fa-fw text-primary'
    ), array(
      'name' => 'Users',
      'link' => 'users.php',
      'icon' => 'fa fa-user fa-fw text-primary'
    ), array(
      'name' => 'Settings',
      'link' => 'settings.php',
      'icon' => 'fa fa-gear fa-fw text-primary'
    ),
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
  /* userpanel Top menu */
  'userPanel' => array(
    'userImg' => 'user1.jpeg',
    'userName' => 'Talip ÇAKIR',
    'userMenu' => array(
      array(
        'link' => 'Login.html',
        'label' => 'Login', 'Register.html',
        'class' => 'text-primary', '#Logout'
      ),
      array(
        'link' => 'Register.html',
        'label' => 'Register',
        'class' => 'text-success'
      ),
      array(
        'link' => '#Logout',
        'label' => 'Logout',
        'class' => 'text-danger'
      ),
    )
  ),
  /* file path */
  'imgPath' => 'themes/img/',
  'logoPath' => 'logo_mercury.png',
  
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
