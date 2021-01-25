<style>
    .post {
        width: 65%;
        height: 310px;
        background-color: #F3EbE1;
        padding: 20px;
        margin: auto;
        display: block;
        clear: both;
        margin-bottom: 30px;
    }

    .p_img img {
        width: 300px;
        height: 300px;
    }

    .p_img {
        width: 30%;
        float: left;
        overflow: hidden;
    }

    .p_header p {
        font-size: 18px;
    }

    .team {
        width: 30%;
        display: inline-block;
        margin-left: 40px;
    }

    .team img {
        width: 150px;
        height: 150px;
        border: 1px solid red;
        border-radius: 50%;
        margin: auto;
    }

    .p_header a {
        text-decoration: none;
        padding: 10px;
        background-color: tomato;
        color: #fff;
        text-align: center;
    }
</style>

<div class="post">
    <?php while (have_posts()) : the_post() ?>
        <div class="p_img" style="width: 400px; height: auto;"><?php the_post_thumbnail(); ?></div>
        <div class="p_header">
            <h1><?php the_title(); ?></h1><br>
            <p><?php the_author(); ?></p>
            <p><?php the_time('g:i a'); ?></p>
            <p><?php the_content(); ?></p>
        </div>
    <?php endwhile ?>

    <hr>
    <?php comments_popup_link('No Comment', '1 Comment', '% Comments') ?>
    <?php comments_template(); ?>
    <hr>
</div>