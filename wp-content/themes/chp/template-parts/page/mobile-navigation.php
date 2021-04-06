<?php
/*
    Content Template | mobile-navigation
    Copyright: 2021, Seculin, www.seculin.com
    Wordpress v5.6.2
*/
?>

<div id="chp_mobile_navbar" class="portrait-only-nav">
    <div id="chp_mobile_navbar_list" class="chp_nav_items flex col main-start cross-start">

        <a href="<?php echo site_url( '/#chp_intro_medecins' ) ?>" class="chp_nav_item" id="chp_mobile_nav_medecins_link">
            Médecins <i class="fas fa-chevron-down"></i>
        </a>

        <div class="chp_nav_item" id="chp_mobile_nav_cliniques_link">
            Cliniques <i class="fas fa-chevron-down"></i>
        </div>

        <div id="chp_nav_mobile_cliniques">
            <div class="chp_nd_cliniques flex col main-around cross-start">
                <div class="chp_nd_clinique_column">
                    <div class="chp_ndc_category">
                        <span>Chirurgies</span>
                        <div class="chp_ndc_cat_line"></div>
                    </div>

                    <div class="chp_ndc_clinique flex row main-start cross-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/clinic1.jpg" class="nav_img" alt="clinic-photo-thumbnail">

                        <div class="chp_ndc_clinique_info flex col main-center cross-start">
                            <span class="chp_ndc_name">Clinique de la Sauvegarde</span>

                            <span class="chp_ndc_address"><i class="fas fa-map-marker-alt"></i> 480 Av. Ben Gourion, 69009 Lyon</span>

                            <a href="<?php echo site_url( '/clinique-de-la-sauvegarde' ) ?>" class="chp_button">En savoir plus <i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>

                    <div class="chp_ndc_clinique flex row main-start cross-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/clinic2.jpg" class="nav_img" alt="clinic-photo-thumbnail">

                        <div class="chp_ndc_clinique_info flex col main-center cross-start">
                            <span class="chp_ndc_name">Clinique Saint-Charles</span>

                            <span class="chp_ndc_address"><i class="fas fa-map-marker-alt"></i> 25 Rue de Flesselles, 69001 Lyon</span>

                            <a href="<?php echo site_url( '/clinique-saint-charles' ) ?>" class="chp_button">En savoir plus <i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="chp_nd_clinique_column chp_nd_clinique_column_mobile_last">
                    <div class="chp_ndc_category">
                        <span>Consultations</span>
                        <div class="chp_ndc_cat_line"></div>
                    </div>

                    <div class="chp_ndc_clinique chp_ndc_clinique_kleber flex row main-start cross-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/clinic3.jpg" class="nav_img" alt="clinic-photo-thumbnail">

                        <div class="chp_ndc_clinique_info flex col main-center cross-start">
                            <span class="chp_ndc_name">Centre Kléber</span>

                            <span class="chp_ndc_address"><i class="fas fa-map-marker-alt"></i> 50 Cours Franklin Roosevelt, 69006 Lyon</span>

                            <a href="https://www.centre-kleber.fr/" target="_blank" class="chp_button">En savoir plus <i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="chp_nav_item">
            <a href="<?php echo site_url( '/pathologies' ) ?>">Pathologies</a>
        </div>

        <div class="chp_nav_item">
            <a href="<?php echo site_url( '/consignes-peri-operatoires' ) ?>">Consignes Péri-Opératoires</a>
        </div>
    </div>
</div>