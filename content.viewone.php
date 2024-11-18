<div class='content'>
            <!-- delivery moto -->
            <div class="deliverymoto delivery-animation-container">
        <h3 class="moto delivery-truck"><i class="fa-solid fa-truck-fast fa-flip-horizontal" style="color: #000000;"></i>
        We Deliver, Anytime, Anywhere <i class="fa-solid fa-truck-fast" style="color: #000000;"></i></h3>
    </div>
    <div>  
        <video width="500" height="200" autoplay muted loop>
            <source src="images/ads.mp4" type="video/mp4">
        </video>
    </div>
    <div id="product-container">
        <?php
            // Display all products if no specific item is selected
            foreach ($boots as $boot) {
                ?>
                <div class="product-item">
                    <img src="<?= $boot['image']; ?>" alt="<?= htmlspecialchars($boot['name']); ?>" />
                    <div class="product-details">
                        <p class="product-name"><?= htmlspecialchars($boot['name']); ?></p>
                        <p class="product-info">Price: <?= number_format($boot['perPrice'], 2) ?><br>Available: <?= $boot['perAvail'] ?></p>
                        <a href="loginuser.php"><button class="shop-button">Shop Now</button></a>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>
        <!-- naa mangutana bayad 5K -->
         <!-- life update kamatayon nako sa kalisud helpzz -->