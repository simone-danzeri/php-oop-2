<?php
require_once __DIR__ . '/Models/Article.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/db.php';
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
            <h3 class="text-center">Solo il meglio dai nostri chef per il tuo amico a quattro zampe!</h3>
            <div class="container d-flex flex-wrap gap-5 my-5">
                <!-- Singola card Food -->
                <?php foreach($foods as $food) { ?>
                    <div class="card" style="width: 18rem;" >
                    <div class="ms-img-container py-2 px-2 d-flex justify-content-center">
                        <img src="<?php echo $food->img ?>" class="card-img-top" alt="..." style="width: 16rem; height: 19rem;">
                    </div>
                        <div class="card-body">
                            <p class="fw-bold"><?php echo $food->name ?></p>
                            <p class="">Pensato appositamente per il tuo <?php echo $food->category ?></p>
                            <p class="">A soli <?php echo $food->price ?>€</p>
                            <?php if($food->getWeight()) { ?>
                                <p>Questo articolo ha un peso di: <?php echo $food->getWeight() ?>kg.</p>
                            <?php } else { ?>
                                <p>Peso: non disponibile!</p>
                            <?php } ?>
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
            <h3 class="text-center">Ecco la selezione dei nostri migliori giochi per il tuo animale del cuore!</h3>
            <div class="container d-flex flex-wrap gap-5 my-5">
                <!-- Singola card Toy -->
                <?php foreach($toys as $toy) { ?>
                    <div class="card" style="width: 18rem;" >
                    <div class="ms-img-container py-2 px-2 d-flex justify-content-center">
                        <img src="<?php echo $toy->img ?>" class="card-img-top" alt="..." style="width: 16rem; height: 16rem;">
                    </div>
                        <div class="card-body">
                            <p class="fw-bold"><?php echo $toy->name ?></p>
                            <p class="">Pensato appositamente per il tuo <?php echo $toy->category ?></p>
                            <p class="">A soli <?php echo $toy->price ?>€</p>
                            <?php if($toy->getWeight()) { ?>
                                <p>Questo articolo ha un peso di: <?php echo $toy->getWeight() ?>kg.</p>
                            <?php } else { ?>
                                <p>Peso: non disponibile!</p>
                            <?php } ?>
                            <p class="">Direttamente dai laboratori della <?php echo $toy->brand ?>!</p>
                            <p>Con un grado di <?php echo $toy->squeakynessDegree ?> nella scala della Cigolanza!</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- SEZIONE PRODUCT -->
        <section id="product">
            <h3 class="text-center">E per un meritato riposino...</h3>
            <div class="container d-flex flex-wrap gap-5 my-5">
                <!-- Singola card Product -->
                <?php foreach($products as $product) { ?>
                    <div class="card" style="width: 18rem;" >
                    <div class="ms-img-container py-2 px-2 d-flex justify-content-center">
                        <img src="<?php echo $product->img ?>" class="card-img-top" alt="..." style="width: 16rem; height: 12rem;">
                    </div>
                        <div class="card-body">
                            <p class="fw-bold"><?php echo $product->name ?></p>
                            <p class="">Pensato appositamente per il tuo <?php echo $product->category ?></p>
                            <p class="">A soli <?php echo $product->price ?>€</p>
                            <p class="">Prodotto da <?php echo $product->brand ?>!</p>
                            <p>Peso massimo sopportabile: <?php echo $product->weight ?> kg.</p>
                            <p>Made in <?php echo $product->countryOfOrigin ?></p>
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