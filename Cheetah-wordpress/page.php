<?php get_header(); ?>

    <div id="content" class="container single-content">
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="post-item">
                <header class="post-header">
                    <h1 class="post-title">
                        <?php the_title();?>
                    </h1>
                    <div class="post-meta">
                        <?php echo get_the_date('Y-m-d');?>
                    </div>
                </header>
                <div class="entry-content grap">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; // end of the loop. ?>
    </div>
<?php get_footer(); ?>