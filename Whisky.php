<?php
$boots = [
    [
        'name' => 'Hibiki',
        'perPrice' => 922.5,
        'perAvail' => 456,
        'image' => 'images/whiskyone.jpg'
    ],
    [
        'name' => 'Basil Haydens',
        'perPrice' => 120,
        'perAvail' => 124,
        'image' => 'images/whiskytwo.jpg'
    ],
    [
        'name' => 'Hennessy',
        'perPrice' => 5820,
        'perAvail' => 100,
        'image' => 'images/whiskythree.jpg'
    ],
    [
        'name' => 'Guinness',
        'perPrice' => 1000,
        'perAvail' => 897,
        'image' => 'images/whiskyfour.jpg'
    ],
    [
        'name' => 'Millesime',
        'perPrice' => 897,
        'perAvail' => 500,
        'image' => 'images/whiskyfive.jpg'
    ],
    [
        'name' => 'Eminente',
        'perPrice' => 4502,
        'perAvail' => 5,
        'image' => 'images/whiskysix.jpg'
    ],
];
?>
    
<div class='content'>
        <h1 class="prdname">Whisky's</h1>
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
