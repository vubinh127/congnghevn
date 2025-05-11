<?php
if (!function_exists('tech_theme_setup')) {
    function tech_theme_setup()
    {

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        // menu
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'tech'),
            'footer-menu' => __('Footer Menu', 'tech'),
        ));




        $sidebar = array(
            'name' => 'Main Sidebar',
            'id'    => 'main-sidebar',
            'description' => 'main-sidebar',
            'class' => 'main-sidebar',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   =>  '</h3>',
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'tech_theme_setup');
}

if (!function_exists('tech_menu')) {
    function tech_menu($menu)
    {
        $menu = array(
            'theme_location'    => $menu,
            'container'     => 'nav',
            'container_class'   => $menu,
        );
        wp_nav_menu($menu);
    }
}

function pagination_tech($query)
{
    $listString = paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'prev_text' => 'Trước',
        'next_text' => 'Sau',
        'type'  => 'list',
    ));
    $listString = str_replace("<ul class='page-numbers'>", '<ul class="pagination">', $listString);
    $listString = str_replace('prev page-numbers', 'page-link btn_text', $listString);
    $listString = str_replace('next page-numbers', 'page-link btn_text', $listString);
    $listString = str_replace('page-numbers', 'page-link', $listString);
    $listString = str_replace('<li>', '<li class="page-item">', $listString);
    $listString = str_replace(
        '<li class="page-item"><span aria-current="page" class="page-link current">',
        '<li class="page-item"><span class="page-link active">',
        $listString
    );
    echo $listString;
}
// gọi ra bằng cách truyền $query vào pagination_tech($query);
// cần có 2 tham số bên dưới trong query
// 'posts_per_page' => $wp_query->query_vars['posts_per_page'],
//             'paged' => $paged,

function loadStyle(){

    wp_enqueue_style('bootraps-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', false, time());
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, time());
    wp_enqueue_style('gg-fonts-api-css', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', false, time());
    wp_enqueue_style('flatpickr-css', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css', false, time());
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', false, time());
    wp_enqueue_style('index-css', get_stylesheet_directory_uri().'/assets/css/index.css', false, time());
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri().'/assets_custom/css/index.css', false, time());


    wp_enqueue_script('slim-js', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', array('jquery'), false, true);
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootraps-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('flatpick-js', 'https://cdn.jsdelivr.net/npm/flatpickr.min.js', array('jquery'), false, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('index-js', get_stylesheet_directory_uri().'/assets/js/index.js', array('jquery'), false, true);

}
add_action('wp_enqueue_scripts', 'loadStyle');

add_action('acf/init', function() {
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

  }
});

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Hiển thị đúng file SVG trong Media Library
function fix_svg_thumb_display() {
  echo '<style>
    .attachment-266x266, .thumbnail img {
      width: 100% !important;
      height: auto !important;
    }
  </style>';
}
add_action('admin_head', 'fix_svg_thumb_display');
