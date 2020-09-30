<?php

/**
 * @author     Marko Ivković <markoivkovic16@gmail.com>
 */

include 'Order.php';

//Instance Order Class
$order1 = new Order();

//Get all orders
$order1->setTable(1);
$order1->addFood('pizza capricoza');
$order1->addTopping('ketchup');
$order1->addTopping('oregano');
$order1->addFood('pasta italiana');
$order1->addTopping('extra cheese');
$order1->addDrink('coca cola', '0.5');
$order1->addDrink('coca cola', '0.5');
$order1->order();

$order2 = new Order();

$order2->setTable(2);
$order2->addFood('pizza siciliana');
$order2->addFood('pasta carbonara');
$order2->addDrink('juice', '0.25');
$order2->order();

$order3 = new Order();

$order3->setTable(3);
$order3->addFood('pizza Capricciosa');
$order3->addFood('pizza Capricciosa');
$order3->addFood('pizza Capricciosa');
$order3->addTopping('ketchup');
$order3->addTopping('ketchup');
$order3->addDrink('coca cola', '0.3');
$order3->addDrink('juice', '0.5');
$order3->addDrink('glass of water', '0.2');
$order3->order();

$order1->receipt();
$order3->receipt();

$order2->addFood('pizza Capricciosa');
$order2->receipt();
$order2->addFood('pizza Capricciosa');
$order2->order();
