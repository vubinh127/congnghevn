<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="vertical-menu">
            <div class="upper-menu order-2 order-lg-1">
                <div class="logo">
                    <img src="./assets/images/Logo.svg" alt="">
                </div>
            </div>

            <div class="menu-toggle order-1 order-lg-2">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="lower-menu order-3 order-lg-3">
                <div class="search_icon text-center">
                    <a href="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1834 16.3908C21.2867 12.4053 21.0063 6.63932 17.3426 2.9755C13.3752 -0.991833 6.94285 -0.991833 2.97551 2.9755C-0.991837 6.94284 -0.991837 13.3751 2.97551 17.3425C6.63933 21.0063 12.4054 21.2866 16.3909 18.1834C16.4081 18.2028 16.426 18.2219 16.4445 18.2404L21.8322 23.628C22.3281 24.124 23.1322 24.124 23.6281 23.628C24.124 23.1321 24.124 22.3281 23.6281 21.8321L18.2405 16.4446C18.2218 16.426 18.2028 16.4081 18.1834 16.3908ZM15.4644 4.74614C18.4242 7.7059 18.4242 12.5046 15.4644 15.4644C12.5047 18.4241 7.70595 18.4241 4.74619 15.4644C1.78643 12.5046 1.78643 7.7059 4.74619 4.74614C7.70595 1.78636 12.5047 1.78636 15.4644 4.74614Z" fill="#777777" />
                        </svg>
                    </a>
                </div>
                <div class="language-selector">
                    <button>EN</button>
                    <button class="active">VN</button>
                    <button>中文</button>
                </div>
            </div>
        </div>
        <ul class="mega-menu">
            <li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58">
                <a href="/" class="active">Trang chủ</a>
            </li>
            <li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-58">
                <a href="/news.php">Tin tức</a>

                <ul class="sub-menu">
                    <li id="menu-item-61" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-61">
                        <a href="">Sub Menu 1</a>
                    </li>
                    <li id="menu-item-62" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-62">
                        <a href="">Sub Menu 2</a>
                    </li>
                    <li id="menu-item-64" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-64">
                        <a href="">Sub Menu 3</a>
                    </li>
                    <li id="menu-item-66" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-66">
                        <a href="">Sub Menu 4</a>
                    </li>
                </ul>
            </li>

            <li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-58">
                <a href="/contact.php">Liên Hệ</a>

                <ul class="sub-menu">
                    <li id="menu-item-61" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-61">
                        <a href="">Sub Menu 1</a>
                    </li>
                    <li id="menu-item-62" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-62">
                        <a href="">Sub Menu 2</a>
                    </li>
                    <li id="menu-item-64" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-64">
                        <a href="">Sub Menu 3</a>
                    </li>
                    <li id="menu-item-66" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-66">
                        <a href="">Sub Menu 4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <main>
        <?php //vantu_menu('main-menu') ?>