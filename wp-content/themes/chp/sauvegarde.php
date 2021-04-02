<?php
/*
    Template Name: Sauvegarde
    CHP Theme | Sauvegarde
    Copyright: 2021, Seculin, www.seculin.com
    Wordpress v5.6.2
 */
?>

<?php get_header(); ?>

<main>

    <?php get_template_part( 'template-parts/page/mobile-navigation' ); ?>

    <?php
    if ( have_posts() ) {
    while ( have_posts() ) : the_post();
    ?>

    <section class="chp_header chp_h_cliniques">
        <div class="chp_container chp_cliniques flex column main-center cross-center">
            <div class="container">
                <div class="chp_cliniques_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/clinic1.jpg" class="nav_img" alt="clinic-photo-thumbnail">
                </div>

                <h1 class="chp_light"><?php the_title() ?></h1>

                <h2 class="chp_light_v2">La clinique de la Sauvegarde est un établissement conventionné certifié par la Haute Autorité de Santé</h2>

                <a href="#chp_sauvegarde" class="chp_button chp_button_light">En savoir plus <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <section id="chp_sauvegarde" class="chp_clinique_content">
        <div class="container">
            <div class="flex col main-start cross-center">
                <div class="chp_clinique_data">
                    <div class="flex row main-start cross-start row-to-col">
                        <div class="chp_clinique_data_col flex col main-start cross-start">
                            <div class="chp_clinique_data_item flex row main-center cross-center">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>480 Av. Ben Gourion - Lyon 9ème</span>
                            </div>
                            <div class="chp_clinique_data_item flex row main-center cross-center">
                                <i class="fas fa-envelope"></i>
                                <span>CSV-contact@capio.fr</span>
                            </div>
                            <div class="chp_clinique_data_item flex row main-center cross-center">
                                <i class="fas fa-globe-americas"></i>
                                <span>www.clinique-de-la-sauvegarde-lyon.ramsaygds.fr</span>
                            </div>
                        </div>
                        <div class="chp_clinique_data_col flex col main-start cross-start">
                            <div class="chp_clinique_data_item flex row main-center cross-center">
                                <i class="fas fa-phone-alt"></i>
                                <span>08 26 10 69 69</span>
                            </div>
                            <div class="chp_clinique_data_item flex row main-center cross-center">
                                <i class="fas fa-phone-alt"></i>
                                <span>04 78 64 06 50 (anesthétistes)</span>
                            </div>
                            <div class="chp_clinique_data_item flex row main-center cross-center">
                                <i class="fas fa-fax"></i>
                                <span>04 72 17 26 17</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chp_clinique_presentation">
                    <div class="separator"></div>
                    <h4>Présentation</h4>

                    <div class="chp_clinique_pres_content">
                        <?php the_content() ?>
                    </div>

                    <a href="https://clinique-de-la-sauvegarde-lyon.ramsaygds.fr/" target="_blank" class="chp_button chp_button_dark">En savoir plus <i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; } ?>

<?php get_footer(); ?>