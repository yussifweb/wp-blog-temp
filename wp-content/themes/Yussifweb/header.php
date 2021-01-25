<!DOCTYPE html <?php language_attributes() ?>>
<html lang="en">

<head>
    <meta charset=<?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title') ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">

    <?php wp_head(); ?>
</head>