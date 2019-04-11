<?php
/**
 * Created by PhpStorm.
 * User: yavuz
 * Date: 2019-03-25
 * Time: 15:15
 */

require './Cat.php';
require './Collar.php';

$cat1 = new \Animals\Cat('Felix', 'Noir');
$cat1->setFatigue(50);
$cat1->setImage('https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Felix_the_cat.svg/170px-Felix_the_cat.svg.png');
$collar = new \Animals\Collar(10, 'Rouge');
$cat2 = new \Animals\Cat('Garfield', 'roux', $collar);
$cat2->setFatigue(10);
$cat2->setImage('https://media1.tenor.com/images/fc29b87847952f60aaa5544f4c6df94f/tenor.gif?itemid=10611577');


echo $cat1;
echo $cat2;

echo '<hr><h1>MARCHE</h1>';
// Faire marcher le chat jusqu'à épuisement
while (!$cat1->isTired()) {
    $cat1->walk();
}
while (!$cat2->isTired()) {
    $cat2->walk();
}
echo $cat1;
echo $cat2;

echo '<hr><h1>REPOS</h1>';

$cat1->rest();
$cat2->rest();

echo $cat1;
echo $cat2;

echo '<hr><h1>REPAS</h1>';
$cat1->eat();
$cat2->eat();
echo $cat1;
echo $cat2;