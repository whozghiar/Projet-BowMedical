<?php

/*
  Les données afin de permettre à PDO d'accéder à notre base de données.
  Ces données sont sensibles et elles doivent être NORMALEMENT protégées.
  Dans le cadre de ce projet, j'ai négligé cette protection.
*/
$base="bowmedical2";
$adresse="localhost";
$port=3306;
$user="root";
$passwd="";

$db = new PDO
  (
      
      "mysql:host=$adresse;port=$port;dbname=$base;charset=utf8",
      $user,
      $passwd
  );

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
