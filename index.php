<?php
require_once __DIR__ . '/Models/Article.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Product.php';
$food1 = new Food('Crocca', 34.99, 'cane', 'Friskas', 'testImg', false);
$food2 = new Food('Biscottino gattino', 12.99, 'gatto', 'Cat Inc.', 'testImg', true);
$food3 = new Food('Pappa gatto', 16.99, 'gatto', 'Cat Inc.', 'testImg', false);
$food4 = new Food('Misto pasto cane', 42.99, 'cane', 'Dog Inc.', 'testImg', false);
$foods = [
    $food1,
    $food2,
    $food3,
    $food4,
];
$toy1 = new Toy('Il pollo matto', 22.99, 'cane', 'Squeaky & Co.', 'testImg', '8/10');
$toy2 = new Toy('Bong!', 2.99, 'cane', 'Sonoro e Fastidioso', 'testImg', '3/10');
$toy3 = new Toy('Il topo ballerino', 22.99, 'gatto', 'Squeaky & Co.', 'testImg', '6/10');
$toy4 = new Toy('Il rotolo rotolante', 22.99, 'cane', 'Squeaky & Co.', 'testImg', '9/10');
$toys = [
    $toy1,
    $toy2,
    $toy3,
    $toy4,
];
$product1 = new Product('Cuccia per gatti', 49.99, 'gatto', 'Me stesso', 'testImg', 40, 'Italy');

/* var_dump($food1);
var_dump($food2);
var_dump($toy1);
var_dump($product1); */
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Bootstrap link-->
    <title>Pet Shop</title>
</head>
<body>
    <header>
        <h1 class="text-center">Pet Shop</h1>
        <div class="container">
            <p class="fw-light py-4">Welcome to Boolean Pet Shop</p>
        </div>
    </header>
    <main>
        <!-- SEZIONE FOOD -->
        <section id="food">
            <div class="container d-flex flex-wrap gap-5 my-5">
                <!-- Singola card Food -->
                <?php foreach($foods as $food) { ?>
                    <div class="card" style="width: 18rem;" >
                        <img src="https://www.foodpet.it/wp-content/uploads/2022/02/luscious_lamb_pork_2160x.jpg" class="card-img-top" alt="..." style="width: 16rem;">
                        <div class="card-body">
                            <p class="fw-bold"><?php echo $food->name ?></p>
                            <p class="">Pensato apposta per il tuo <?php echo $food->category ?></p>
                            <p class="">A soli <?php echo $food->price ?>€</p>
                            <p class="">Direttamente dai laboratori della <?php echo $food->brand ?>!</p>
                            <?php if($food->vegetarian) { ?>
                                <p>Prodotto vegetariano!</p>
                            <?php } else { ?>
                                <p>Prodotto non vegetariano!</p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- SEZIONE TOY -->
        <section id="toy">
            <div class="container d-flex flex-wrap gap-5 my-5">
                <!-- Singola card Food -->
                <?php foreach($toys as $toy) { ?>
                    <div class="card" style="width: 18rem;" >
                        <img src="https://www.foodpet.it/wp-content/uploads/2022/02/luscious_lamb_pork_2160x.jpg" class="card-img-top" alt="..." style="width: 16rem;">
                        <div class="card-body">
                            <p class="fw-bold"><?php echo $toy->name ?></p>
                            <p class="">Pensato apposta per il tuo <?php echo $toy->category ?></p>
                            <p class="">A soli <?php echo $toy->price ?>€</p>
                            <p class="">Direttamente dai laboratori della <?php echo $toy->brand ?>!</p>
                            <p>Con un grado di <?php echo $toy->squeakynessDegree ?> nella scala della Cigolanza!</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
<!--Bootstrap JS link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--Bootstrap JS link-->
</body>
</html>