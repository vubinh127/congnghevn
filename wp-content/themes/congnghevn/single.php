<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container detail_page">
        <h1><?php the_title(); ?></h1>

        <div class="author">
            <p>Tác giả: <?php the_author(); ?></p>
            <span class="news-date">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="...SVG PATH..." fill="#8B8B8B"/>
                </svg>
                <?php echo get_the_time('H:i d/m/Y'); ?>
            </span>
        </div>

        <div class="content">
            <?php if (has_post_thumbnail()) : ?>
                <div class="thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                    <?php if (get_post(get_post_thumbnail_id())->post_excerpt) : ?>
                        <span class="img_text"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php the_content(); ?>
        </div>

        <?php
        $related = new WP_Query([
            'post_type' => get_post_type(),
            'posts_per_page' => 4,
            'post__not_in' => [get_the_ID()],
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
        if ($related->have_posts()){ ?>
            <div class="other_news">
                <h2>Tin khác cùng chủ đề</h2>
                <div class="bottom_news">
                    <?php
                        while ($related->have_posts()){
                            $related->the_post(); ?>

                            <div class="news">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium');
                                        } else {
                                            echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/default.jpg" alt="">';
                                        } ?>
                                    </div>
                                    <div class="text">
                                        <?php the_title(); ?>
                                    </div>
                                </a>
                            </div>

                        <?php }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        <?php }
        ?>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
