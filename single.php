<?php get_header(); ?>

<?php 
while(have_posts()) : the_post(); ?>

    <article class="container mt-5 mb-5" style="max-width: 800px;">
        <header class="text-center mb-5">
            <p class="text-muted text-uppercase small fw-bold mb-2">
                Published <?php the_time('M j, Y'); ?> by   <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="text-decoration-none" style="color: #579faf;">
                                                                <?php the_author(); ?>
                                                            </a>
            </p>
            <h1 class="display-4 fw-bold mb-4"><?php the_title(); ?></h1>
            
            <?php if(has_post_thumbnail()) : ?>
                <div class="rounded shadow-sm overflow-hidden mb-4">
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid w-100']); ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="entry-content fs-5" style="line-height: 1.8; color: #333;">
            <?php the_content(); ?>
        </div>

        <hr class="my-5">

    </article>

<?php endwhile; ?>

<?php get_footer(); ?>