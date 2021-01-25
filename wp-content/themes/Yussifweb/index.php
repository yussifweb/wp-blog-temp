<?php get_header(); ?>

<body <?php body_class(); ?>>

    <div class="header">
        <img src="<?php header_image() ?>" alt="">
    </div>

    <?php wp_nav_menu([
        'theme_location' => 'two',
        'container_id' => 'yussifweb-container',
        'menu_class' => 'yussifweb-menu',
        'fallback_cb' => 'yussifweb'
    ]); ?>

    <div class="ls" style="width: 200px; height: 300px; background-color: red; text-align: center;">
        <?php dynamic_sidebar('2'); ?>
    </div>

    <div class="post">
        <?php while (have_posts()) : the_post() ?>
            <div class="p_img"><?php the_post_thumbnail(); ?></div>
            <div class="p_header">
                <h1><?php the_title(); ?></h1><br>
                <p><?php the_author(); ?></p>
                <p><?php the_time('g:i a'); ?></p>
                <p><?php the_content(); ?></p>
                <a href="<?php the_permalink() ?>">see more...</a>
            </div>

        <?php endwhile ?>
    </div>

    <?php
    $v = new WP_Query([
        'post_type' => 'one',
        'posts_per_page' => '4'
    ])
    ?>

    <div class="team">
        <?php while ($v->have_posts()) : $v->the_post() ?>
            <?php the_post_thumbnail(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        <?php endwhile ?>
    </div>

    <?php wp_footer(); ?>
</body>

</html>


<!-- <div>
        <h1><?php bloginfo('title') ?></h1>
    <p><?php bloginfo('description') ?></p>

    <h5><?php echo site_url(); ?> </h5>

    <img src="<?php echo get_template_directory_uri() ?>/screenshot.png" alt="" />
</div> -->