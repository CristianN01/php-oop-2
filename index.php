<?php

require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Animale.php';
require_once __DIR__ . '/classes/products/Accessori.php';
require_once __DIR__ . '/classes/products/Cibo.php';
require_once __DIR__ . '/classes/products/Giochi.php';

$cane = new Animale('Cane');
$gatto = new Animale('Gatto');
$pesce = new Animale('Pesce');
$uccello = new Animale('Uccello');

$royal_canin = new Cibo($cane, 'Royal Canin Mini Adult', '43,99','https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg','454g', 'Prosciutto, Riso');
$tonno = new Cibo($cane, 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '44,99','https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg','600g', 'Manzo, Cereali');
$cat_daily = new Cibo($gatto, 'Almo Nature Cat Daily Lattina', '34,99','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg','400g', 'Tonno, Pollo, Prosciutto');
$mangime_pesci = new Cibo($pesce, 'Mangime per Pesci Guppy in Fiocchi', '2.95','https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg','30g', 'Pesci e sottoprodotti dei pesci','Cereali','Lieviti','Alghe');
$voliera = new Accessorio($uccello, 'Voliera Wilma in Legno', '184,99','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg','Legno', 'M: L 83 x P 67 x H 153 cm');
$cartucce = new Accessorio($pesce, 'Cartucce Filtranti per Filtro EasyCrystal', '2,29','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg','Materiale espanso', 'ND');
$kong = new Giochi($cane, 'Kong Classic', '13,49','https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg','Galleggia e rimablza', '8,5 cm x 10 cm');
$mouse = new Giochi($gatto, 'Topini di peluche Trixie', '4,99','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg','Morbido con codina in corda', '8,5 cm x 10 cm');

$productArray = [$royal_canin, $tonno, $cat_daily, $mangime_pesci, $voliera, $cartucce , $kong, $mouse];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center">
            BOOLSHOP
        </h1>
    </header>
    <main>
        <section class="container">
            <div class="article container">
                <?php foreach ($productArray as $product) { ?>
                    <div class="card">
                    <img src="<?php echo $product->getFoto(); ?>" alt="foto prodotto">    
                    <h2><?php echo $product->getNome() ?></h2>
                    <p>Prezzo: <?php echo $product->getPrezzo() ?></p>
                    <p>Peso netto: <?php echo $product->getPeso() ?> </p>
                    <p>Ingredienti: <?php echo $product->getIngredienti() ?> </p>

                    </div>
                        
                <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>