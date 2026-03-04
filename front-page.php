<?php get_header(); ?>

<div class="container" style="margin-top: 2rem;">
    <?php 
    $news = new WP_Query(array('posts_per_page' => 4));
    $posts = $news->posts; 
    ?>

    <div class="row mb-4">
        <div class="col-md-8 mb-3 mb-md-0">
            <?php $post = $posts[0]; setup_postdata($post); ?>
            <div class="card">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top article-image-wide">
                <div class="card-body">
                    <a href="<?php the_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                    <div style="font-size: 0.85rem; color: #6c757d; margin-top: 5px;">
                        <span>By </span>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="text-decoration: none; color: #579faf; font-weight: 600;">
                            <?php the_author(); ?>
                        </a>
                        <span> | <?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <?php $post = $posts[1]; setup_postdata($post); ?>
            <div class="card">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top article-image-narrow">
                <div class="card-body">
                    <a href="<?php the_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                    <div style="font-size: 0.85rem; color: #6c757d; margin-top: 5px;">
                        <span>By </span>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="text-decoration: none; color: #579faf; font-weight: 600;">
                            <?php the_author(); ?>
                        </a>
                        <span> | <?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3 mb-md-0">
            <?php $post = $posts[2]; setup_postdata($post); ?>
            <div class="card">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top article-image-narrow">
                <div class="card-body">
                    <a href="<?php the_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                    <div style="font-size: 0.85rem; color: #6c757d; margin-top: 5px;">
                        <span>By </span>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="text-decoration: none; color: #579faf; font-weight: 600;">
                            <?php the_author(); ?>
                        </a>
                        <span> | <?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <?php $post = $posts[3]; setup_postdata($post); ?>
            <div class="card">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top article-image-wide">
                <div class="card-body">
                    <a href="<?php the_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                    <div style="font-size: 0.85rem; color: #6c757d; margin-top: 5px;">
                        <span>By </span>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="text-decoration: none; color: #579faf; font-weight: 600;">
                            <?php the_author(); ?>
                        </a>
                        <span> | <?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5 mb-5">
        <a href="<?php echo site_url('/category/all-news/'); ?>" class="btn btn-custom-subscribe"
        style="background-color: #579faf; color: white; border: none;">More Articles</a>
    </div>

    <?php wp_reset_postdata(); ?>
</div> 
<?php get_footer(); ?>