<?php

get_header();

?>
<div class="page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
    <?php endwhile; ?>
</div>
<div class="container single-post-container">
    <div class="post-content">
        <!-- la fonction wp_reset_query() permet de réinitialiser les valeurs $post en fonction du context -->
        <?php 
            wp_reset_query();

            while(have_posts()): the_post; 
            the_content(); 
            endwhile;
        ?>
    </div>
    <?php get_template_part('templates/partials/grid-portfolio'); ?>
</div>
<?php 

    get_footer();

?>