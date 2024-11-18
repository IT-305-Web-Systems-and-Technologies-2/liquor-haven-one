<?php
// Start the session at the beginning of the file
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Tan Barola</title>
    <link rel="shortcut icon" type="x-icon" href="images/logofinal.png">
    <link href="css/styleone.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="header">
        <?php include "header.php"; ?>
    </div>
    <div id="content">
    <?php
        include "array.php"; //SSSSSSSSSSSSSSS

        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            if ($page == 'homepage') {
                include "content.viewone.php"; 
            } elseif ($page == 'vodka') {
                include "Vodka.php"; 
            } elseif ($page == 'gin') {
                include "Gin.php"; 
            } elseif ($page == 'sujo') {
                include "Sujo.php"; 
            } elseif ($page == 'whisky') {
                include "Whisky.php"; 
            } elseif ($page == 'gifting') {
                include "gifting.php"; 
            } elseif ($page == 'promo') {
                include "promo.php"; 
            } elseif ($page == 'login') {
                include "loginuser.php"; 
            }elseif ($page == 'logout') {
                    include "logout.php"; 
            }elseif ($page == 'signup'){
					include "Signup.php";
			}else {
                include "content.viewone.php"; // fallback na page
            }
        } else {
            include "content.viewone.php"; // Default when no page is set
        }
    ?>
    </div>

    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
