<?php get_header(); ?>

<div class="container mt-5 mb-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">
            <?php 
            if ( is_author() ) {
                echo get_the_author();
            } elseif ( is_category() ) {
                single_cat_title();
            } else {
                echo 'All News';
            }
            ?>
        </h1>

        <?php if ( is_author() ) : ?>
            <p style="max-width: 600px; margin: 0 auto;"><?php the_author_meta('description'); ?></p>
        <?php endif; ?>

        <hr style="width: 100px; margin: auto; border: 2px solid #579faf; opacity: 1;">
    </div>

    <div class="row g-4">
        <?php 
        if (have_posts()) : 
            while (have_posts()) : the_post(); ?>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="<?php the_title(); ?>">
                            </a>
                        <?php endif; ?>

                        <div class="card-body">
                            <p class="text-muted small mb-2"><?php the_time('M j, Y'); ?></p>
                            
                            <h2 class="h5 fw-bold">
                                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none border-link">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="card-text small text-secondary">
                                <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; 
        else : ?>
            <div class="col-12 text-center">
                <p>No posts found.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>