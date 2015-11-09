<?php get_header(); ?>
    <div id="content" class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="post-item">
                <header class="post-header">
                    <h1 class="post-title">
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h1>
                    <div class="post-meta">
                        <?php echo get_the_date('Y-m-d');?>
                    </div>
                </header>
                <div class="grap">
                    <?php if(has_post_thumbnail()):?>
                        <p class="with-img"><?php the_post_thumbnail( 'full' ); ?></p>
                        <p><?php echo mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 220,"...");?></p>
                    <?php else : ?>
                        <?php the_content('');?>
                    <?php endif;?>
                </div>
                <div class="post-footer">
                </div>
            </article>
        <?php endwhile; ?>
        <div class="u-textAlignCenter postsFooterNav">
            <div class="posts-nav">
                <?php echo paginate_links( array(
                    'prev_next'          => 0,
                    'before_page_number' => '',
                    'mid_size' => 2
                ) );?>
            </div></div>
    </div>
<?php get_footer(); ?>