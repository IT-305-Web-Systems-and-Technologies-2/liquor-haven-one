<?php
$boots = [
    [
        'name' => 'Jaisalmer',
        'perPrice' => 922.5,
        'perAvail' => 456,
        'image' => 'images/ginone.jpg'
    ],
    [
        'name' => 'WoodLu',
        'perPrice' => 120,
        'perAvail' => 124,
        'image' => 'images/gintwo.jpg'
    ],
    [
        'name' => 'Grey Gin',
        'perPrice' => 5820,
        'perAvail' => 100,
        'image' => 'images/ginthree.jpg'
    ],
    [
        'name' => 'Casa Lagartos',
        'perPrice' => 1000,
        'perAvail' => 897,
        'image' => 'images/ginfour.jpg'
    ],
    [
        'name' => 'Blackland Gin',
        'perPrice' => 897,
        'perAvail' => 500,
        'image' => 'images/ginfive.jpg'
    ],
    [
        'name' => 'Buigur',
        'perPrice' => 4502,
        'perAvail' => 5,
        'image' => 'images/GInsix.jpg'
    ],
];
?>


<div class='content'>
        <h1 class="prdname">Gin's</h1>
    <div id="product-container">
        <?php foreach ($boots as $boot) : ?>
            <div class="product-item">
                <img src="<?= $boot['image']; ?>" alt="<?= htmlspecialchars($boot['name']); ?>" />
                <div class="product-details">
                    <p class="product-name"><?= htmlspecialchars($boot['name']); ?></p>
                    <p class="product-info">Price: <?= number_format($boot['perPrice'], 2) ?><br>Available: <?= $boot['perAvail'] ?></p>
                    <button class="shop-button">Add to Cart</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
