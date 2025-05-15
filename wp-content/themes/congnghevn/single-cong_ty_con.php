<?php get_header(); ?>
    <div class="company_page">
        <?php $subsidiary_banner = get_field('subsidiary_banner'); ?>
        <div class="main-content">
            <div class="hero-section" style="background-image: <?php echo !empty($subsidiary_banner['banner']['url']) ? $subsidiary_banner['banner']['url'] : get_stylesheet_directory_uri().'/assets/images/company_banner.jpg' ?>">
                <div class="hero-text">
                    <h1><?php echo !empty($subsidiary_banner['title']) ? $subsidiary_banner['title'] : '' ?></h1>
                    <p><?php echo !empty($subsidiary_banner['description']) ? $subsidiary_banner['description'] : '' ?></p>
                    <a href="<?php echo !empty($subsidiary_banner['link_contact']['url']) ? $subsidiary_banner['link_contact']['url'] : '' ?>" class="btn">Liên hệ</a>
                </div>
            </div>
        </div>
        <?php $subsidiary_about = get_field('subsidiary_about'); ?>
        <div class="about_section">
            <div class="container">
                <div class="d-flex flex-column flex-xl-row">
                    <h2 class="title d-xl-none"><?php echo !empty($subsidiary_about['title']) ? $subsidiary_about['title'] : '' ?></h2>
                    <div class="about_detail order-2 order-xl-1">
                        <div>
                            <h2 class="title d-none d-xl-block"><?php echo !empty($subsidiary_about['title']) ? $subsidiary_about['title'] : '' ?></h2>
                            <p><?php echo !empty($subsidiary_about['description']) ? $subsidiary_about['description'] : '' ?></p>
                            <a href="<?php echo !empty($subsidiary_about['link_learn_more']['url']) ? $subsidiary_about['link_learn_more']['url'] : '' ?>" class="btn">Tìm hiểu thêm</a>
                        </div>
                        <?php
                        if(!empty($subsidiary_about['subsidiary_information'])){ ?>
                            <div class="number_data">
                                <?php
                                foreach ($subsidiary_about['subsidiary_information'] as $infomation){ ?>
                                    <div>
                                        <div class="number"><?php echo $infomation['number_information'] ?></div>
                                        <div class="text"><?php echo $infomation['title_information'] ?></div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        <?php }
                        ?>
                    </div>
                    <div class="image order-1 order-xl-2">
                        <img src="<?php echo !empty($subsidiary_about['banner']['url']) ? $subsidiary_about['banner']['url'] : get_stylesheet_directory_uri().'/assets/images/about.jpg' ?>" alt="<?php echo !empty($subsidiary_about['title']) ? $subsidiary_about['title'] : '' ?>">
                    </div>
                </div>
            </div>
        </div>
        <?php $subsidiary_services = get_field('subsidiary_services'); ?>
        <div class="company_child_section service_section">
            <div class="container">
                <h2 class="title"><?php echo !empty($subsidiary_services['title']) ? $subsidiary_services['title'] : '' ?></h2>
                <?php
                if(!empty($subsidiary_services['list_services'])){ ?>
                    <div class="list_company">
                        <?php
                        foreach($subsidiary_services['list_services'] as $services){ ?>
                            <div class="company">
                                <div>
                                    <div class="logo">
                                        <img src="<?php echo !empty($services['icon']['url']) ? $services['icon']['url'] : get_stylesheet_directory_uri().'/assets/images/service.png' ?>" alt="<?php echo !empty($subsidiary_services['title']) ? $subsidiary_services['title'] : '' ?>">
                                    </div>
                                    <div class="name">
                                        <?php echo !empty($services['title']) ? $services['title'] : '' ?>
                                    </div>
                                    <p><?php echo !empty($services['description']) ? $services['description'] : '' ?></p>
                                </div>
                                <a href="<?php echo !empty($services['link_learn_more']['url']) ? $services['link_learn_more']['url'] : '' ?>">Xem thêm
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75348 6.9998C1.20119 6.9998 0.753479 6.55208 0.753479 5.9998C0.753479 5.44752 1.20119 4.9998 1.75348 4.9998L10.3747 4.9998L8.32464 2.2663C8.09838 1.96461 8.09838 1.54979 8.32464 1.2481C8.66405 0.795553 9.34287 0.795551 9.68227 1.2481L12.7961 5.3999C13.0628 5.75546 13.0628 6.24434 12.7961 6.5999L9.68228 10.7516C9.34287 11.2042 8.66405 11.2042 8.32465 10.7516C8.09838 10.4499 8.09839 10.0351 8.32465 9.73343L10.3749 6.9998L1.75348 6.9998Z" fill="#1EA1F2"/>
                                    </svg>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php }
                ?>

            </div>
        </div>


        <?php $subsidiary_partner = get_field('subsidiary_partner');

        if(!empty($subsidiary_partner['list_partners'])){ ?>
            <h2 class="title mt-4">Đối tác</h2>

            <div class="partner_section">
                <div class="container">
                    <div class="list_partner">
                        <div class="swiper-wrapper">
                            <?php
                            foreach($subsidiary_partner['list_partners'] as $partners){ ?>
                                <div class="swiper-slide">
                                    <a href="">
                                        <div class="image">
                                            <img src="<?php echo !empty($partners['logo']['url']) ? $partners['logo']['url'] : get_stylesheet_directory_uri().'/assets/images/partner.png' ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php $subsidiary_news = get_field('subsidiary_news'); ?>
        <div class="news_section">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between box_title">
                    <h2 class="title"><?php echo !empty($subsidiary_news['title']) ? $subsidiary_news['title'] : '' ?></h2>
                    <a href="<?php echo !empty($subsidiary_news['link_read_more']['url']) ? $subsidiary_news['link_read_more']['url'] : '' ?>" class="view-all">Xem tất cả
                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75348 6.9998C1.20119 6.9998 0.753479 6.55208 0.753479 5.9998C0.753479 5.44752 1.20119 4.9998 1.75348 4.9998L10.3747 4.9998L8.32464 2.2663C8.09838 1.96461 8.09838 1.54979 8.32464 1.2481C8.66405 0.795553 9.34287 0.795551 9.68227 1.2481L12.7961 5.3999C13.0628 5.75546 13.0628 6.24434 12.7961 6.5999L9.68228 10.7516C9.34287 11.2042 8.66405 11.2042 8.32465 10.7516C8.09838 10.4499 8.09839 10.0351 8.32465 9.73343L10.3749 6.9998L1.75348 6.9998Z" fill="#1EA1F2"/>
                        </svg>
                    </a>
                </div>

                <?php if (!empty($subsidiary_news['list_news'])): ?>
                    <div class="box-news">

                        <?php
                        // Bài đầu tiên (featured)
                        $featured = $subsidiary_news['list_news'][0];
                        ?>
                        <div class="box_detail_news featured-news">
                            <a href="<?php echo get_permalink($featured); ?>">
                                <div class="news-image-container">
                                    <?php echo get_the_post_thumbnail($featured->ID, 'medium', ['class' => 'img-fluid']); ?>
                                </div>
                                <div class="title_tour">
                                    <p class="news-title"><?php echo get_the_title($featured); ?></p>
                                    <span class="news-date">
                        <svg width="22" height="22" ...>...</svg>
                        <?php echo get_the_date('H:i d/m/Y', $featured); ?>
                    </span>
                                </div>
                            </a>
                        </div>

                        <?php
                        // Hai bài tiếp theo (small-news)
                        $small_news = array_slice($subsidiary_news['list_news'], 1, 2);
                        ?>
                        <?php if (!empty($small_news)): ?>
                            <div class="small_grid">
                                <?php foreach ($small_news as $post): ?>
                                    <div class="box_detail_news small-news">
                                        <a href="<?php echo get_permalink($post); ?>">
                                            <div class="news-image-container">
                                                <?php echo get_the_post_thumbnail($post->ID, 'medium', ['class' => 'img-fluid']); ?>
                                            </div>
                                            <div class="title_tour">
                                                <p class="news-title"><?php echo get_the_title($post); ?></p>
                                                <span class="news-date">
                                    <svg width="22" height="22" ...>...</svg>
                                    <?php echo get_the_date('H:i d/m/Y', $post); ?>
                                </span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php
                    // Các bài còn lại (bottom_news)
                    $bottom_news = array_slice($subsidiary_news['list_news'], 3);
                    ?>
                    <?php if (!empty($bottom_news)): ?>
                        <div class="bottom_news">
                            <?php foreach ($bottom_news as $post): ?>
                                <div class="news">
                                    <a href="<?php echo get_permalink($post); ?>">
                                        <div class="image">
                                            <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                                        </div>
                                        <div class="text">
                                            <?php echo get_the_title($post); ?>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif;
                    wp_reset_postdata();

                    ?>

                <?php endif; ?>

            </div>
        </div>
        <?php $subsidiary_slogan_1 = get_field('subsidiary_slogan_1'); ?>
        <div class="banner_blue_section">
            <div class="container banner_blue">
                <h3><?php echo !empty($subsidiary_slogan_1['title']) ? $subsidiary_slogan_1['title'] : '' ?></h3>
                <p><?php echo !empty($subsidiary_slogan_1['description']) ? $subsidiary_slogan_1['description'] : '' ?></p>
                <a href="<?php echo !empty($subsidiary_slogan_1['link_slogan']['url']) ? $subsidiary_slogan_1['link_slogan']['url'] : '' ?>">Đăng ký ngay</a>
            </div>
        </div>
    </div>

<?php
get_footer();