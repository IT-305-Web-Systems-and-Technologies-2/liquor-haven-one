<?php
$boots = [
    [
        'name' => 'Absolut Raspberri',
        'perPrice' => 1922.5,
        'perAvail' => 2,
        'image' => 'images/vodka-ptwo.jpg'
    ],
    [
        'name' => 'Imperial',
        'perPrice' => 11240,
        'perAvail' => 324,
        'image' => 'images/vodka-pone.jpg'
    ],
    [
        'name' => 'Gold Uzbekistan',
        'perPrice' => 4220,
        'perAvail' => 140,
        'image' => 'images/vodka-pthree.jpg'
    ],
    [
        'name' => 'Venaria din Vale',
        'perPrice' => 1200,
        'perAvail' => 897,
        'image' => 'images/vodka-pfour.jpg'
    ],
    [
        'name' => 'Glengrand',
        'perPrice' => 89724,
        'perAvail' => 5,
        'image' => 'images/vodka-pfive.jpg'
    ],
    [
        'name' => 'American Barrels',
        'perPrice' => 4500,
        'perAvail' => 1,
        'image' => 'images/vodka-psix.jpg'
    ],
];
?>


<div class='content'>
    <h1 class="prdname">Vodka's</h1>
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

