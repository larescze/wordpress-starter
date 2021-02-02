<?php /* Template Name: Posts */ ?>
<?php get_template_part('includes/header'); ?>
<main>
    <h1><?php the_title() ?></h1>
    <div>
        <?php
        global $post;
        $args = array('numberposts' => '-1');
        $lastposts = get_posts($args);
        foreach ($lastposts as $post) :
            setup_postdata($post);
        ?>
            <div>
                <div>
                    <?php the_post_thumbnail(); ?>
                </div>
                <div>
                    <h2><?php the_title(); ?></h2>
                    <div><?php echo get_the_time('d.m.Y', $post->ID); ?></div>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
</main>
<?php get_template_part('includes/footer'); ?>