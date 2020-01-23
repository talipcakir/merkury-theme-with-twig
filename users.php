<?php

use function Composer\Autoload\includeFile;

require 'vendor/autoload.php';
require 'menus.php';

/* define path to a theme file */
$loader = new \Twig\Loader\FilesystemLoader('themes');

/* twig definition and send loader(themes) */
$twig = new \Twig\Environment($loader);

echo $twig->render('users.html', array(
  /* user table header */
  'tableHead' => array(
    array(
      'colspan' => '2',
      'label' => 'Name',
    ),
    array(
      'colspan' => '1',
      'label' => 'Last Activity',
    ),
    array(
      'colspan' => '1',
      'label' => 'Email',
    ),
    array(
      'colspan' => '1',
      'label' => 'Phone',
    ),
    array(
      'colspan' => '1',
      'label' => '',
    ),
  ),
  /* file path */
  'imgPath' => 'themes/img/',
  /* user data START*/
  'user' => array(
    'one' => array(
      'img' => 'user1.jpeg',
      'name' => 'Talip ÇAKIR',
      'job' => 'Front End Developper ',
      'last' => 'Online now! ',
      'email' => 'talipcakir93@gmail.com',
      'phone' => '+90 555 000 00 00',
    ),
    'two' => array(
      'img' => 'user2.jpeg',
      'name' => 'User Two',
      'job' => 'X Designer ',
      'last' => 'Online now! ',
      'email' => 'usermail2@two.com',
      'phone' => '+90 555 000 00 00',
    ),
    'tree' => array(
      'img' => 'user3.jpeg',
      'name' => 'User Tree',
      'job' => 'Web Designer ',
      'last' => '10 min ago',
      'email' => 'usermail2@two.com',
      'phone' => '+90 555 000 00 00',
    ),
    'four' => array(
      'img' => 'user4.jpeg',
      'name' => 'User Four',
      'job' => 'Account Manager ',
      'last' => '19 min ago',
      'email' => 'usermail4@four.com',
      'phone' => '+90 555 000 00 00',
    ),
    'five' => array(
      'img' => 'user5.jpeg',
      'name' => 'User Five',
      'job' => 'Project Manager ',
      'last' => '1 hours ago',
      'email' => 'usermail5@five.com',
      'phone' => '+90 555 000 00 00',
    ),
    'six' => array(
      'img' => 'user6.jpeg',
      'name' => 'User Six',
      'job' => 'Project Designer ',
      'last' => '2 hour ago',
      'email' => 'usermail6@six.com',
      'phone' => '+90 555 000 00 00',
    ),
    'seven' => array(
      'img' => 'user7.jpeg',
      'name' => 'User Seven',
      'job' => 'Project Designer ',
      'last' => '5 hours ago',
      'email' => 'usermail7@seven.com',
      'phone' => '+90 555 000 00 00',
    ),
  ),
  /* User data END */
));
