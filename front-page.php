<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- <link href="https://db.onlinewebfonts.com/c/b26b20369adfef2b3d65d266e0625fe2?family=Gabriola" rel="stylesheet" type="text/css"/> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php wp_head(); ?>
</head>
<body>

    <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_300_inverted.png' ?>" class="bahcane-logo" alt="Bahcane Logo">

        <div class="bamboo-section">
                <div class="side-border-left">
                        <h1 class="main-text">Exquisite Bamboo Products</h1>
                        <h1 class="mobile-view-text">Explore <br>Bamboo Products</h1>
                        <p class="section-info">Explore our amazing and wonderful bamboo products.</p>
                        <p class="section-info">Come explore our wonderful collection.</p>
                        <a href="https://bahcane.com/product-category/products/bamboo/" class="btn-explore">Explore</a>
                </div>
        </div>

        <div class="rattan-section">
           <div class="side-border-right">
            <h1 class="main-text">Exquisite Rattan Products</h1>
            <h1 class="mobile-view-text">Explore<br> Rattan Products</h1>
            <div class="ratten-para-container">
                <p class="section-info">Explore our amazing and wonderful rattan products.</p>
                <p class="section-info">Come explore our wonderful collection.</p>
            </div>
                <a href="https://bahcane.com/product-category/products/rattan/" class="btn-explore">Explore</a>
           </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>