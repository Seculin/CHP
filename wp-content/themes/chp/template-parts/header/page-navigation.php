<?php
/*
    CHP Theme | Page Navigation
    Copyright: 2021, Seculin, www.seculin.com
    Wordpress v5.6.2
*/
?>

<nav id="chp_nav" class="flex col">

        <div id="chp_nav_1" class="flex row main-start cross-center">
            <div class="container flex main-end">
                <div class="nav_1_item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>50 Cours Franklin Roosevelt, 69006 Lyon, France</span>
                </div>

                <div class="nav_1_item">
                    <i class="fas fa-envelope"></i>
                    <span>contact@chirurgie-paupiere-lyon.fr</span>
                </div>

                <div class="nav_1_item">
                    <i class="fas fa-fax"></i>
                    <span>(+33) 472 83 49 19</span>
                </div>

                <div class="nav_1_item">
                    <i class="fas fa-phone-alt"></i>
                    <span>(+33) 472 83 49 19</span>
                </div>
            </div>
        </div>

        <div id="chp_nav_2" class="flex row main-start cross-center">
            <div class="container">
                <div class="flex row main-start cross-center">
                    <div id="chp_nav_site_logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/logo_dark.png" alt="site-logo">

                        <span class="chp_nav_site_title">Chirurgie de la paupière</span>
                    </div>

                    <div id="chp_nav_wrapper">
                        <div class="chp_nav_items flex row main-end">
                            <div class="chp_nav_item" id="chp_nav_medecins_link">Mèdecins <i class="fas fa-chevron-down"></i></div>
                            <div class="chp_nav_item" id="chp_nav_cliniques_link">Cliniques <i class="fas fa-chevron-down"></i></div>
                            <div class="chp_nav_item">Pathologies</div>
                            <div class="chp_nav_item">Consignes Péri-Opèratoires</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="chp_nav_medecins">
        <div class="container">
            <div class="chp_nd_medecins flex row main-around cross-center">
                <div class="chp_nd_medecin">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/baggio.jpg" class="nav_img" alt="doctor-profile-photo">

                    <span class="chp_nd_medecin_name">Dr. Eric Baggio</span>

                    <span class="chp_nd_medecin_role">Ophtalmologue</span>

                    <span class="chp_nd_medecin_desc">Titulaire du diplôme inter-universitaire de chirurgie orbito-lacrymo-palpébrale</span>

                    <a href="javascript:void(0)" class="chp_button">En savoir plus <i class="fas fa-chevron-down"></i></a>
                </div>

                <div class="chp_nd_medecin">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/barbier.jpg" class="nav_img" alt="doctor-profile-photo">

                    <span class="chp_nd_medecin_name">Dr. Jérémie Barbier</span>

                    <span class="chp_nd_medecin_role">Ophtalmologue</span>

                    <span class="chp_nd_medecin_desc">Titulaire du diplôme inter-universitaire de chirurgie orbito-lacrymo-palpébrale</span>

                    <a href="javascript:void(0)" class="chp_button">En savoir plus <i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="chp_nav_cliniques">
        <div class="container">
            <div class="chp_nd_cliniques flex row main-around cross-start">
                <div class="chp_nd_clinique_column">
                    <div class="chp_ndc_category">
                        <span>Chirurgies</span>
                        <div class="chp_ndc_cat_line"></div>
                    </div>

                    <div class="chp_ndc_clinique flex row main-start cross-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/clinic1.jpg" class="nav_img" alt="clinic-photo-thumbnail">

                        <div class="chp_ndc_clinique_info flex col main-center cross-start">
                            <span class="chp_ndc_name">Clinique de la Sauvegarde</span>

                            <span class="chp_ndc_address"><i class="fas fa-map-marker-alt"></i> 480 Avenue Ben Gourion, 69009 Lyon</span>

                            <a href="javascript:void(0)" class="chp_button">En savoir plus <i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>

                    <div class="chp_ndc_clinique flex row main-start cross-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/clinic2.jpg" class="nav_img" alt="clinic-photo-thumbnail">

                        <div class="chp_ndc_clinique_info flex col main-center cross-start">
                            <span class="chp_ndc_name">Clinique Saint-Charles</span>

                            <span class="chp_ndc_address"><i class="fas fa-map-marker-alt"></i> 25 Rue de Flesselles, 69001 Lyon</span>

                            <a href="javascript:void(0)" class="chp_button">En savoir plus <i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="chp_nd_clinique_column">
                    <div class="chp_ndc_category">
                        <span>Consultations</span>
                        <div class="chp_ndc_cat_line"></div>
                    </div>

                    <div class="chp_ndc_clinique flex row main-start cross-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/clinic3.jpg" class="nav_img" alt="clinic-photo-thumbnail">

                        <div class="chp_ndc_clinique_info flex col main-center cross-start">
                            <span class="chp_ndc_name">Centre Kléber</span>

                            <span class="chp_ndc_address"><i class="fas fa-map-marker-alt"></i> 50 Cours Franklin Roosevelt, 69006 Lyon</span>

                            <a href="javascript:void(0)" class="chp_button">En savoir plus <i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>