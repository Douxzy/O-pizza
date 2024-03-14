<?php

$pizzaList = [

    // new Pizza(1, 'napolitaine', 8, ['champignon', 'roquette', 'olives']),
    // new Pizza(2, 'sicilienne', 9, ['burrata']),
    // new Pizza(3, 'new york style', 10, ['cheddar', 'oignons']),

  
  ];

require __DIR__ . '/pdo.php';
$pdo = getPDOConnexion();

$pizzaQuery = '
  SELECT id, type, price, ingredients 
  FROM pizza
';

$pizzaStatement = $pdo->query($pizzaQuery);

$pizzaResults = $pizzaStatement->fetchAll(PDO::FETCH_ASSOC);
// d($pizzaResults);


foreach ($pizzaResults as $result) {
    $arrayIngredients = explode(' ', $result['ingredients']);

    $newPizza = new Pizza($result['id'], $result['type'], $result['price'], $arrayIngredients);

    array_push($pizzaList, $newPizza);
}