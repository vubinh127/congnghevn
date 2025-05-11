<?php 
/**
 * Template Name: Contact
 */
get_header();
$contact = get_field('contact');
?>
    <div class="contact_page">
        <div class="contact-content">
            <div class="banner">
                <h2 class="contact-heading"><?php echo !empty($contact['description']) ? $contact['description'] : '' ?></h2>
                <img src="<?php echo !empty($contact['banner']['url']) ? $contact['banner']['url'] : get_stylesheet_directory_uri().'/assets/images/contact_banner.jpg' ?>">
            </div>
            <div class="container">
                <div class="contact-form-card">
                   <?php
                   if(!empty($contact['form_contact'])){
                       echo do_shortcode($contact['form_contact']) ;
                   }
                   ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();