<?php
$boots = [
    [
        'name' => 'Jack Daniel Set',
        'perPrice' => 50022,
        'perAvail' => 456,
        'image' => 'images/jackdanielgift.jpg'
    ],
    [
        'name' => 'Belvedere Set',
        'perPrice' => 34120,
        'perAvail' => 124,
        'image' => 'images/giftingtwo.jpg'
    ],
    [
        'name' => 'Glen Morant 1993 Set',
        'perPrice' => 52820,
        'perAvail' => 100,
        'image' => 'images/giftingthree.jpg'
    ],
    [
        'name' => 'Brandefyn Set',
        'perPrice' => 13000,
        'perAvail' => 897,
        'image' => 'images/giftingfour.jpg'
    ],
    [
        'name' => 'Dewards Set',
        'perPrice' => 33897,
        'perAvail' => 500,
        'image' => 'images/giftfives.jpg'
    ],
    [
        'name' => 'Tomatin',
        'perPrice' => 510000,
        'perAvail' => 5,
        'image' => 'images/giftingsix.jpg'
    ],
];
?>


<div class='content'>
        <h1 class="prdname">Gift's</h1>
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

