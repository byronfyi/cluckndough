<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cluck n Dough</title>
    <meta name="description" content="Cluck & Dough">

    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/cluckndough/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/cluckndough/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/cluckndough/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/cluckndough/site.webmanifest">
    <link rel="mask-icon" href="/wp-content/themes/cluckndough/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/wp-content/themes/cluckndough/style.css">
</head>
<body>
    <header class="header">
        <div class="relative">
            <h1><img src="/wp-content/themes/cluckndough/images/logo.png" alt="Cluck n Dough" class="logo" width="200" height="200"></h1>

            <?php if( get_field('contact') ): ?>
                <a href="mailto:<?php the_field('contact'); ?>" class="btn header-btn">Get in contact</a>
            <?php endif; ?>
        </div>
    </header>
    <main>
        <div class="container relative">
            <div class="images-container">
                <div class="images-left">
                    <?php if( get_field('image_1') ): ?>
                        <img src="<?php the_field('image_1'); ?>" alt="" class="image image-1 rotate-left" width="334" height="340">
                    <?php endif; ?>

                    <?php if( get_field('image_2') ): ?>
                        <img src="<?php the_field('image_2'); ?>" alt="" class="image image-2 rotate-left" width="334" height="340">
                    <?php endif; ?>
                </div>

                <div class="images-right">
                    <?php if( get_field('image_3') ): ?>
                        <img src="<?php the_field('image_3'); ?>" alt="" class="image image-3 rotate-right" width="334" height="340">
                    <?php endif; ?>

                    <?php if( get_field('image_4') ): ?>
                        <img src="<?php the_field('image_4'); ?>" alt="" class="image image-4 rotate-right" width="334" height="340">
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <img src="/wp-content/themes/cluckndough/images/icon-chicken.svg" alt="chicken" class="icon-chicken" width="70" height="70">
                    <p class="featured">
                        <span class="text-md rotate-right">Asian Inspired</span>
                        <span class="text-lg">Chicken</span>
                        <span class="text-md rotate-left">Burgers</span>
                    </p>
                </div>

                <div class="col">
                    <img src="/wp-content/themes/cluckndough/images/icon-pizza.svg" alt="pizza" class="icon-pizza"  width="70" height="82">
                    <p class="featured">
                        <span class="text-md rotate-right">Authentic Neapolitan</span>
                        <span class="text-lg">Sourdough</span>
                        <span class="text-md rotate-left">Pizza</span>
                    </p>
                </div>

                <div class="col">
                    <img src="/wp-content/themes/cluckndough/images/icon-chips.svg" alt="chips" class="icon-chips"  width="60" height="79">
                    <p class="featured">
                        <span class="text-md rotate-right">Loaded</span>
                        <span class="text-lg">Fries</span>
                    </p>
                </div>
            </div>

            <div class="text">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content();  ?>

                <?php endwhile; endif; ?>
            </div>

            <div class="text">
                <p class="font-bold text-md text-orange mb-0">Come and see us! Our next event is:</p>

                <p class="font-bold text-md">Friday 7th April  |  The Goats Head, Steeton</p>
            </div>

            <ul class="social">
                <?php if( get_field('facebook') ): ?>
                    <li><a href="<?php the_field('facebook'); ?>" class="btn social-btn" target="_blank" rel="noopener noreferrer"><span class="sr-only">Facebook</span><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a></li>
                <?php endif; ?>

                <?php if( get_field('instagram') ): ?>
                    <li><a href="<?php the_field('instagram'); ?>" class="btn social-btn" target="_blank" rel="noopener noreferrer"><span class="sr-only">Instagram</span><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </main>
</body>
</html>