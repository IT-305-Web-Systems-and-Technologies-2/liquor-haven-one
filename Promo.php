<?php
$boots = [
    [
        'name' => 'Stay TUNE',
        'image' => 'images/comingsoon.jpg'
    ],
];
?>


<div class='content'>
        <h1 class="prdname">Promo's</h1>
    <div id="product-container">
        <?php foreach ($boots as $boot) : ?>
            <div class="product-item">
                <img src="<?= $boot['image']; ?>" alt="<?= htmlspecialchars($boot['name']); ?>" />
                <div class="product-details">
                    <p class="product-name"><?= htmlspecialchars($boot['name']); ?></p>
                    <button class="shop-button">Unavailable</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
