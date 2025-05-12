<?php
/**
 * Template Name: News
 */
get_header();


?>

<div class="news_page">
    <div class="category">
        <div class="container">
            <nav class="category-nav">
                <ul class="category-menu">
                    <?php
                    $categories = get_categories([
                        'orderby' => 'name',
                        'order' => 'ASC'
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
        <h1>Tin tức</h1>

        <!-- 3 bài viết mới nhất -->
        <div class="box-news">
            <?php
            $featured_query = new WP_Query([
                'posts_per_page' => 3,
                'post_status' => 'publish'
            ]);
            if ($featured_query->have_posts()) :
                $i = 0;
                while ($featured_query->have_posts()) : $featured_query->the_post();
                    $category = get_the_category();
                    $cat_name = $category ? $category[0]->name : '';
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    ?>
                    <?php if ($i == 0): ?>
                        <div class="box_detail_news featured-news">
                            <a href="<?php the_permalink(); ?>">
                                <div class="news-image-container">
                                    <div class="top_left"><?php echo esc_html($cat_name); ?></div>
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                </div>
                                <div class="title_tour">
                                    <p class="news-title"><?php the_title(); ?></p>
                                    <span class="news-date"><?php echo get_the_date('H:i d/m/Y'); ?></span>
                                </div>
                            </a>
                        </div>
                        <div class="small_grid">
                    <?php else: ?>
                        <div class="box_detail_news small-news">
                            <a href="<?php the_permalink(); ?>">
                                <div class="news-image-container">
                                    <div class="top_left"><?php echo esc_html($cat_name); ?></div>
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                </div>
                                <div class="title_tour">
                                    <p class="news-title"><?php the_title(); ?></p>
                                    <span class="news-date"><?php echo get_the_date('H:i d/m/Y'); ?></span>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php $i++; endwhile; ?>
                    </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <div class="list_news">
            <?php
            $paged = max(1, get_query_var('paged') ?: get_query_var('page') ?: 1);

            $posts_per_page = get_option('posts_per_page');;

            $offset = ($paged - 1) * $posts_per_page + 3;

            $total_posts = wp_count_posts()->publish;

            $news_query = new WP_Query([
                'posts_per_page' => $posts_per_page,
                'offset'         => $offset,
                'post_status'    => 'publish'
            ]);

            if ($news_query->have_posts()):
                while ($news_query->have_posts()): $news_query->the_post();
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
                <?php endwhile;

                $total_pages = ceil(($total_posts - 3) / $posts_per_page);

                $paginate_links = paginate_links([
                    'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'format'    => '?paged=%#%',
                    'current'   => $paged,
                    'total'     => $total_pages,
                    'type'      => 'array',
                    'prev_text' => '<',
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

                wp_reset_postdata();
            endif;
            ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
