<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O'pizza</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class='container'>
    <h1>Bienvenue chez O'Pizza</h1>

    <p>Voici la liste des meilleures pizzas, commandez celle que vous voulez</p>

    <div class="card-deck">
    <?php foreach ($pizzaList as $pizza) : 
         $ingredientList = $pizza->getIngredients();
        ?>
       
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./inc/image/pizza.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Pizza <?= $pizza->getType() ?></h5>
            <?php foreach ($ingredientList as $ingredient) : ?>
                <span class="badge badge-info"><?= $ingredient ?></span>
            <?php endforeach ?>
            <p class="card-text"><?= $pizza->getPrice() ?> €</p>
          </div>
        </div>
      <?php endforeach ?>
      </div>
      </div>
    </div>
  </div>
</body>
</html>