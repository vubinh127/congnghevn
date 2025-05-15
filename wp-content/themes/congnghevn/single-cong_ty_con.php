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
            <div class="partner_section">
                <div class="container">
                    <div class="list_partner">
                        <?php
                        foreach($subsidiary_partner['list_partners'] as $partners){ ?>
                            <div class="image">
                                <img src="<?php echo !empty($partners['logo']['url']) ? $partners['logo']['url'] : get_stylesheet_directory_uri().'/assets/images/partner.png' ?>" alt="">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php $subsidiary_news = get_field('subsidiary_news'); ?>
        <div class="news_section">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between box_title">
                    <h2 class="title">Tin tức sự kiện</h2>
                    <a href="#" class="view-all">Xem tất cả
                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75348 6.9998C1.20119 6.9998 0.753479 6.55208 0.753479 5.9998C0.753479 5.44752 1.20119 4.9998 1.75348 4.9998L10.3747 4.9998L8.32464 2.2663C8.09838 1.96461 8.09838 1.54979 8.32464 1.2481C8.66405 0.795553 9.34287 0.795551 9.68227 1.2481L12.7961 5.3999C13.0628 5.75546 13.0628 6.24434 12.7961 6.5999L9.68228 10.7516C9.34287 11.2042 8.66405 11.2042 8.32465 10.7516C8.09838 10.4499 8.09839 10.0351 8.32465 9.73343L10.3749 6.9998L1.75348 6.9998Z" fill="#1EA1F2"/>
                        </svg>
                    </a>
                </div>

                <div class="box-news">
                    <div class="box_detail_news featured-news">
                        <a href="#">
                            <div class="news-image-container">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news.jpg" alt="Cloud Portal update" class="img-fluid">
                            </div>
                            <div class="title_tour">
                                <p class="news-title">Cloud Portal tuyển dụng tháng 6/2025</p>
                                <span class="news-date">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                    </svg>
                                    11:09 4/3/2025
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="small_grid">
                        <div class="box_detail_news small-news">
                            <a href="#">
                                <div class="news-image-container">
                                    <img src="assets/images/news_2.jpg" alt="Trump tariff news" class="img-fluid">
                                </div>
                                <div class="title_tour">
                                    <p class="news-title">Change Data Capture: Đồng bộ dữ liệu tự động...</p>
                                    <span class="news-date">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                        </svg>
                                        11:09 4/3/2025
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="box_detail_news small-news">
                            <a href="#">
                                <div class="news-image-container">
                                    <img src="assets/images/news_2.jpg" alt="Trump tariff news" class="img-fluid">
                                </div>
                                <div class="title_tour">

                                    <p class="news-title">Change Data Capture: Đồng bộ dữ liệu tự động...</p>
                                    <span class="news-date">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 0.5C16.7989 0.5 21.5 5.20101 21.5 11C21.5 16.7989 16.7989 21.5 11 21.5C5.20101 21.5 0.5 16.7989 0.5 11C0.5 5.20101 5.20101 0.5 11 0.5ZM11 2.59961C6.36082 2.59962 2.59961 6.36082 2.59961 11C2.59961 15.6392 6.36082 19.4004 11 19.4004C15.6392 19.4004 19.4004 15.6392 19.4004 11C19.4004 6.36081 15.6392 2.59961 11 2.59961ZM11.75 5.75C11.9156 5.75 12.0497 5.88421 12.0498 6.0498V9.65039C12.05 9.81575 12.1843 9.94996 12.3496 9.9502H14.9004C15.0659 9.95038 15.2002 10.0844 15.2002 10.25V11.75C15.2002 11.9156 15.0659 12.0496 14.9004 12.0498H10.25C10.0843 12.0498 9.9502 11.9157 9.9502 11.75V6.0498C9.9503 5.88423 10.0844 5.75003 10.25 5.75H11.75Z" fill="#E6E6E6"/>
                                        </svg>
                                        11:09 4/3/2025
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bottom_news">
                    <div class="news">
                        <a href="">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/new3.jpg" alt="">
                            </div>
                            <div class="text">
                                Cloud Portal cập nhật phiên bản mới giúp tối ưu hoá quản lý tài nguyên
                            </div>
                        </a>
                    </div>
                    <div class="news">
                        <a href="">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/new3.jpg" alt="">
                            </div>
                            <div class="text">
                                Cloud Portal cập nhật phiên bản mới giúp tối ưu hoá quản lý tài nguyên
                            </div>
                        </a>
                    </div>
                    <div class="news">
                        <a href="">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/new3.jpg" alt="">
                            </div>
                            <div class="text">
                                Cloud Portal cập nhật phiên bản mới giúp tối ưu hoá quản lý tài nguyên
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();