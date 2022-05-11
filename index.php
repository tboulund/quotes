<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <?php wp_head() ?>
</head>
<body>
    <header>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/brain.png" alt="brain">
        <h1><?php bloginfo("name") ?></h1>
    </header>

    <?php while(have_posts()): the_post() ?>
        <?php $quoteLoop = new WP_Query(array("post_type" => "quote", "posts_per_page" => -1)) ?>
        <?php while($quoteLoop->have_posts()): $quoteLoop->the_post() ?>
            <div class="quote">"<?php the_title() ?>"</div>
            <div class="author">- <?php the_field("author") ?></div>
        <?php endwhile ?>
        <?php wp_reset_postdata() ?>

    <?php endwhile ?>

    <?php wp_footer() ?>
</body>
</html>