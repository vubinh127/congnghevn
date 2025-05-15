<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <?php $header = get_field('header', 'option'); ?>
        <div class="vertical-menu">
            <div class="upper-menu order-2 order-lg-1">
                <div class="logo">
                    <a href="/"><img src="<?php echo !empty($header['logo']['url']) ? $header['logo']['url'] : get_stylesheet_directory_uri().'/assets/images/Logo.svg' ?>">

                    </a>
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
                    <?php echo do_shortcode('[gtranslate]'); ?>
                </div>
            </div>
        </div>

        <ul class="mega-menu-toggle">
            <?php tech_menu('main-menu') ?>
        </ul>

        <div class="search_area">
            <div class="close-search">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                    <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"></path>
                </svg>
            </div>
            <form action="">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>Search</button>
                </div>
            </form>
        </div>
    </header>
    <main>