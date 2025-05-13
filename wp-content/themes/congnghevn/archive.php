<?php get_header(); ?>

<div class="news_page">
    <div class="category">
        <div class="container">
            <nav class="category-nav">
                <ul class="category-menu">
                    <?php
                    $categories = get_categories([
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ]);
                    foreach ($categories as $cat) {
                        echo '<li class="category-item"><a href="' . esc_url(get_category_link($cat->term_id)) . '" class="category-link">' . esc_html($cat->name) . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>

    <div class="container">
        <?php
        $category = get_queried_object();
        if ($category && isset($category->name)) {
            echo '<h1>' . esc_html($category->name) . '</h1>';
        }
        ?>

        <div class="list_news">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                    $category = get_the_category();
                    $cat_name = $category ? $category[0]->name : '';
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="news">
                            <div class="image">
                                <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                            </div>
                            <div class="text">
                                <h3><?php the_title(); ?></h3>
                                <span class="news-date"><?php echo get_the_date('H:i d/m/Y'); ?></span>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>

                <?php
                $paginate_links = paginate_links([
                    'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'format'    => '?paged=%#%',
                    'current'   => max(1, get_query_var('paged')),
                    'total'     => $wp_query->max_num_pages,
                    'type'      => 'array',
                    'prev_text' => '<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.24217 13.8927C9.63269 14.2832 9.63269 14.9164 9.24216 15.3069L9.00647 15.5426C8.61595 15.9331 7.98278 15.9331 7.59226 15.5426L0.756911 8.7072C0.366389 8.31668 0.36639 7.68351 0.756913 7.29299L7.59236 0.457592C7.98289 0.0670691 8.61606 0.0670712 9.00658 0.457597L9.24228 0.693292C9.6328 1.08382 9.6328 1.71698 9.24228 2.1075L4.05677 7.29299C3.66624 7.68351 3.66624 8.31668 4.05676 8.7072L9.24217 13.8927Z" fill="#9B9B9B"/>
                                    </svg>',
                    'next_text' => '<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.757831 13.8927C0.367312 14.2832 0.367314 14.9164 0.757836 15.3069L0.993527 15.5426C1.38405 15.9331 2.01722 15.9331 2.40774 15.5426L9.24309 8.7072C9.63361 8.31668 9.63361 7.68351 9.24308 7.29299L2.40763 0.457592C2.0171 0.0670691 1.38394 0.0670712 0.993416 0.457597L0.757723 0.693292C0.3672 1.08382 0.367203 1.71698 0.757727 2.1075L5.94323 7.29299C6.33376 7.68351 6.33376 8.31668 5.94324 8.7072L0.757831 13.8927Z" fill="#9B9B9B"/>
                                </svg>',
                ]);

                if (is_array($paginate_links)) :
                    echo '<div class="pagination"><nav aria-label="Page navigation"><ul class="pagination">';
                    foreach ($paginate_links as $link) {
                        if (strpos($link, 'current') !== false) {
                            echo '<li class="page-item active">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
                        } else {
                            echo '<li class="page-item">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
                        }
                    }
                    echo '</ul></nav></div>';
                endif;
                ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
