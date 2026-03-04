<?php 
/* Template Name: About Us */
get_header(); ?>

<div class="container mt-5 mb-5">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold"><?php the_title(); ?></h1>
            <hr style="width: 100px; margin: auto; border: 2px solid #579faf; opacity: 1;">
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8" style="font-size: 1.1rem; line-height: 1.8;">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>