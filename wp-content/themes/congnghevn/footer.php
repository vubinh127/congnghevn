<?php wp_footer(); ?>
</main>
<footer>
    <?php $footer = get_field('footer', 'option') ?>
    <div class="container">
        <div class="row">
            
            <div class="col-lg-3 company-info">
                <a href="<?php echo get_home_url(); ?>" class="footer-logo">
                    <img src="<?php echo !empty($footer['logo']['url']) ? $footer['logo']['url'] : get_stylesheet_directory_uri().'/assets/images/Logo_footer.svg' ?>" alt="Logo">
                </a>
                <?php echo !empty($footer['name_company']) ? '<h4>'.$footer['name_company'].'</h4>' : '' ?>
                <?php echo !empty($footer['address_company']) ? '<p class="footer-address">'.$footer['address_company'].'</p>' : '' ?>
            </div>

            <div class="col-lg-3 quick-links">

            </div>

            <div class="col-lg-3 quick-links">
                <?php echo !empty($footer['title_columns_2']) ? '<h5>'.$footer['title_columns_2'].'</h5>' : '' ?>
                <?php tech_menu('footer-menu') ?>
            </div>

            <div class="col-lg-3 contact-info">
                <?php
                
                echo !empty($footer['title_columns_3']) ? '<h5>'.$footer['title_columns_3'].'</h5>' : '';

                if(!empty($footer['list_contact'])){
                    foreach($footer['list_contact'] as $contactItem){
                        echo '<p>'.$contactItem['contact'].'</p>';
                    }
                }

                if(!empty($footer['list_social'])){
                    echo '<div class="social-icons">';
                    foreach($footer['list_social'] as $socialItem){
                        if(!empty($socialItem['icon_social'])){
                            echo '<a href="' . ($socialItem['link_social']['url'] ?? '') . '" aria-label="YouTube">'
                                    . $socialItem['icon_social'] .
                                '</a>';
                        }
                        
                    }
                    echo '</div>';
                }

                ?>
            </div>
        </div>
    </div>
</footer>

</body>

</html>