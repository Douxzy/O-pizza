<?php

function getPDOConnexion(){

try {
    $pdo = new PDO('mysql:host=localhost;dbname=opizza', 'opizza', 'opizza');
    return $pdo;
    }
    catch (PDOException $e) {
    echo 'erreur de connexion à la base : ' . $e->getMessage();
    return false;
    }
};