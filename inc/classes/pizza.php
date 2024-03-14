<?php

class Pizza {

  private $id;
  private $type;
  private $price;
  private $ingredients;

  function __construct($id, $type, $price, $ingredients)
  {
    $this->id = $id;
    $this->type = $type;
    $this->price = $price;
    $this->ingredients = $ingredients;
  }

  function getId() {
    return $this->id;
  }

  function getType() {
    return $this->type;
  }

  function getPrice() {
    return $this->price;
  }
  
  function getIngredients() {
    return $this->ingredients;
  }

}