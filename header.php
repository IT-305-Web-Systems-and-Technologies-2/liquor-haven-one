<div class='title'>
                <div class="logo">
                    <img src='images/logofinal.png'>
                </div>
                <div class="name">
                    <h2>Liquor <br> Haven</h2>
                </div>
</div>
                    <div class='navbar'>
                        <a href='?page=homepage' class='menu'> Home</a>
                        <a href='?page=vodka' class='menu'> Vodka</a>
                        <a href='?page=gin' class='menu'>Gin</a>
                        <a href='?page=sujo' class='menu'>Soju</a>
                        <a href='?page=whisky' class='menu'>Whisky</a>
                        <a href='?page=gifting' class='menu'> Gifting</a>
                        <a href='?page=promo' class='menu'> Promo</a>
                        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === 'yes'): ?>
                            <a href="Logout.php" class="menu">Logout</a>
                        <?php else: ?>
                            <a href="?page=login" class="menu">Login</a>
							<a href='?page=signup' class='menu'> Sign Up</a>
                        <?php endif; ?>
                    </div>
                    <div id="names">
                        <p title='pinakagwapa!'>&copy Camille T. Barola</p>
                    </div>


