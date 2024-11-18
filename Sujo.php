<?php
$boots = [
    [
        'name' => 'Arki Soju',
        'perPrice' => 922.5,
        'perAvail' => 456,
        'image' => 'images/sujoone.jpg'
    ],
    [
        'name' => 'Daesun Soju',
        'perPrice' => 120,
        'perAvail' => 124,
        'image' => 'images/sujotwo.jpg'
    ],
    [
        'name' => 'Tokki Soju',
        'perPrice' => 5820,
        'perAvail' => 100,
        'image' => 'images/sujothree.jpg'
    ],
    [
        'name' => 'Won Soju',
        'perPrice' => 1000,
        'perAvail' => 897,
        'image' => 'images/sujofour.jpg'
    ],
    [
        'name' => 'Lemon Soju',
        'perPrice' => 897,
        'perAvail' => 500,
        'image' => 'images/sujofive.jpg'
    ],
    [
        'name' => 'MELONA SOJU',
        'perPrice' => 4502,
        'perAvail' => 5,
        'image' => 'images/sujosix.jpg'
    ],
];
?>
    
<div class='content'>
        <h1 class="prdname">Sujo's</h1>
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

