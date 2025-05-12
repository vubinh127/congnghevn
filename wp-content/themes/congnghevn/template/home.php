<?php

/**
 * Template Name: Home
 */
get_header();

$banner = get_field('banner');

?>

    <div class="main-content">
        <div class="hero-section" style="background-image: url('<?php echo !empty($banner['banner']['url']) ? $banner['banner']['url'] : get_stylesheet_directory_uri().'/assets/images/banner.jpg' ?>');">
            <div class="hero-text">
                <h1><?php echo !empty($banner['description']) ? $banner['description'] : '' ?></h1>
            </div>
            <div class="watermark">
                <a href="#about_section" class="d-flex flex-column align-items-center">
                    CUỘN XUỐNG
                    <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.04853 12.7467C0.658929 12.3552 0.660406 11.7221 1.05183 11.3325C1.44327 10.9429 2.07645 10.9443 2.46606 11.3358L5.0155 13.8973L5.02819 1.29219C5.02875 0.739911 5.47691 0.292647 6.02919 0.293198C6.58148 0.293749 7.02875 0.741915 7.02819 1.2942L7.0156 13.8621L9.53708 11.3523C9.92852 10.9627 10.5617 10.9642 10.9513 11.3557C11.3409 11.7471 11.3394 12.3802 10.948 12.7699L6.69546 17.0026C6.30402 17.3922 5.67086 17.3907 5.28125 16.9992L1.04853 12.7467Z" fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
<?php $section_abouts = get_field('section_abouts');

if(!empty($section_abouts)){ ?>
    <div class="about_section" id="about_section">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row">
                <h2 class="title d-lg-none"><?php echo !empty($section_abouts['title']) ? $section_abouts['title'] : '' ?></h2>
                <div class="about_detail order-2 order-lg-1">
                    <h2 class="title d-none d-lg-block"><?php echo !empty($section_abouts['title']) ? $section_abouts['title'] : '' ?></h2>
                    <?php echo !empty($section_abouts['description']) ? $section_abouts['description'] : '' ?>
                    <a href="<?php echo !empty($section_abouts['link_learn_more']['url']) ? $section_abouts['link_learn_more']['url'] : '' ?>" class="btn">Tìm hiểu thêm</a>
                </div>
                <div class="image order-1 order-lg-2">
                    <img src="<?php echo !empty($section_abouts['banner']['url']) ? $section_abouts['banner']['url'] : get_stylesheet_directory_uri().'/assets/images/about.jpg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
<?php }
$section_subsidiary = get_field('section_subsidiary');

if(!empty($section_subsidiary)){ ?>
    <div class="company_child_section">
        <div class="container">
            <h2 class="title"><?php echo !empty($section_subsidiary['title']) ? $section_subsidiary['title'] : '' ?></h2>
            <?php
            if(!empty($section_subsidiary['list_subsidiary'])){ ?>
            <div class="list_company">
                <?php
                foreach($section_subsidiary['list_subsidiary'] as $subsidiary){
                    $idPost = $subsidiary->ID;
                    ?>
                    <div class="company">
                        <div>
                            <div class="logo">
                                <img src="<?php echo get_the_post_thumbnail_url($idPost); ?>" alt="<?php echo get_the_title($idPost); ?>">
                            </div>
                            <div class="name">
                                <?php echo get_the_title($idPost); ?>
                            </div>
                            <p><?php echo get_the_excerpt($idPost); ?>
                            </p>
                        </div>
                        <a href="<?php echo get_permalink($idPost); ?>">Xem thêm
                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75348 6.9998C1.20119 6.9998 0.753479 6.55208 0.753479 5.9998C0.753479 5.44752 1.20119 4.9998 1.75348 4.9998L10.3747 4.9998L8.32464 2.2663C8.09838 1.96461 8.09838 1.54979 8.32464 1.2481C8.66405 0.795553 9.34287 0.795551 9.68227 1.2481L12.7961 5.3999C13.0628 5.75546 13.0628 6.24434 12.7961 6.5999L9.68228 10.7516C9.34287 11.2042 8.66405 11.2042 8.32465 10.7516C8.09838 10.4499 8.09839 10.0351 8.32465 9.73343L10.3749 6.9998L1.75348 6.9998Z" fill="#1EA1F2" />
                            </svg>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>

        </div>
    </div>
<?php }

$section_project = get_field('section_project');

if(!empty($section_project)){ ?>
    <div class="our_project_section">
        <div class="container">
            <h2 class="title"><?php echo !empty($section_project['title']) ? $section_project['title'] : '' ?></h2>
            <?php
            if(!empty($section_project['list_project'])){
                foreach($section_project['list_project'] as $projects_keys => $projects){
                    $projects_banner = !empty($projects['banner']['url']) ? $projects['banner']['url'] : get_stylesheet_directory_uri().'/assets/images/our_project.jpg';
                    $projects_icon = !empty($projects['icon']['url']) ? $projects['icon']['url'] : get_stylesheet_directory_uri().'/assets/images/icon.png';
                    $projects_title = !empty($projects['title']) ? $projects['title'] : '';
                    $projects_description = !empty($projects['description']) ? $projects['description'] : '';

                    if($projects_keys % 2 == 0){
                        $class = '';
                    }else{
                       $class = 'order-1 order-xl-2';
                    } ?>

                    <div class="d-flex flex-column flex-xl-row our_project">
                        <div class="image <?php echo $class ?>">
                            <img src="<?php echo $projects_banner ?>" alt="<?php echo $projects_title ?>">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="small_icon">
                                <img src="<?php echo $projects_icon ?>" alt="<?php echo $projects_title ?>">
                            </div>
                            <h3><?php echo $projects_title ?></h3>
                            <p><?php echo $projects_description ?></p>
                            <?php
                            if(!empty($projects['list_additional_information'])){ ?>
                                <ul>
                                    <?php
                                    foreach ($projects['list_additional_information'] as $project_addition_information){
                                        echo '<li>'.$project_addition_information['additional_information'].'</li>';
                                    }
                                    ?>
                                </ul>
                            <?php } ?>

                        </div>
                    </div>
                <?php }
            }
            ?>

        </div>
    </div>
<?php }

$section_activity = get_field('section_activity');

if(!empty($section_activity)){ ?>
    <div class="activity_section">
        <div class="container">
            <h2><?php echo !empty($section_activity['title']) ? $section_activity['title'] : '' ?></h2>
            <?php
            if(!empty($section_activity['list_activity'])){ ?>
                <div class="list_activity">
                    <?php
                    foreach ($section_activity['list_activity'] as $activitys){ ?>
                        <div class="activity">
                            <div class="image">
                                <img src="<?php echo !empty($activitys['activity_banner']['url']) ? $activitys['activity_banner']['url'] : get_stylesheet_directory_uri().'/assets/images/activity.jpg'?>" alt="<?php echo !empty($activitys['activity_name']) ? $activitys['activity_name'] : ''?>">
                            </div>
                            <div class="content">
                                <div>
                                    <div class="text">
                                        <?php echo !empty($activitys['activity_name']) ? $activitys['activity_name'] : ''?>
                                    </div>
                                    <p>
                                        <?php echo !empty($activitys['activity_description']) ? $activitys['activity_description'] : ''?>
                                    </p>
                                </div>
                                <a href="<?php echo !empty($activitys['activity_learn_more']['url']) ? $activitys['activity_learn_more']['url'] : ''?>" class="btn">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            <?php }
            ?>
        </div>
    </div>

<?php }

$section_slogan = get_field('section_slogan');

if(!empty($section_slogan)){ ?>
    <div class="banner_blue_section">
        <div class="container banner_blue">
            <h3><?php echo !empty($section_slogan['title']) ? $section_slogan['title'] : '' ?></h3>
            <p><?php echo !empty($section_slogan['description']) ? $section_slogan['description'] : '' ?></p>
            <a href="<?php echo !empty($section_slogan['link_start']['url']) ? $section_slogan['link_start']['url'] : '' ?>">Bắt đầu ngay</a>
        </div>
    </div>
<?php }
?>

<?php get_footer();
