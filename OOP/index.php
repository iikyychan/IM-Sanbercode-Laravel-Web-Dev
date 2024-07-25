<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new animal();
$sheep -> setName("sheep");

echo "Name : ".$sheep -> getName()."<br>";
echo "Legs : ".$sheep -> legs()."<br>";
echo "Cold Blooded : ".$sheep -> cold_blooded()."<br><br>";

$kodok = new frog();
$kodok -> setName("buduk");

echo "Name : ".$kodok -> getName()."<br>";
echo "Legs : ".$kodok-> legs()."<br>";
echo "Cold Blooded : ".$kodok -> cold_blooded()."<br>";
echo "Jump : ".$kodok -> jump()."<br><br>";

$kerasakti = new ape();
$kerasakti -> setName("Kera Sakti");

echo "Name : ".$kerasakti -> getName()."<br>";
echo "Legs : ".$kerasakti -> legs()."<br>";
echo "Cold Blooded : ".$kerasakti -> cold_blooded()."<br>";
echo "Jump : ".$kerasakti -> yell();