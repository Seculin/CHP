<?php
/*
    Template Name: Baggio
    CHP Theme | Baggio
    Copyright: 2021, Seculin, www.seculin.com
    Wordpress v5.6.2
 */
?>

<?php get_header(); ?>

<main>

    <?php get_template_part( 'template-parts/page/mobile-navigation' ); ?>

    <section class="chp_header chp_h_medecins">
        <div class="chp_container chp_cliniques flex column main-center cross-center">
            <div class="container">
                <div class="chp_cliniques_image chp_medecins_image chp_baggio_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/baggio.jpg" class="nav_img" alt="clinic-photo-thumbnail">
                </div>

                <h1>Dr. Eric Baggio</h1>

                <h2 class="chp_darker">Ophtalmologiste spécialisé en chirurgie orbito-lacrymo-palpébrale (orbite, voie lacrymale, et paupière)</h2>

                <a href="#chp_baggio" class="chp_button chp_button_dark">En savoir plus <i class="fas fa-chevron-down"></i></a>

                <a href="https://www.doctolib.fr/ophtalmologue/lyon/eric-baggio" target="_blank" class="chp_button chp_button_dark chp_button_rdv">Prendre rendez-vous <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <section id="chp_baggio" class="chp_medecine_content">
        <div class="container">
            <h4>Qualifications</h4>

            <div class="chp_medecin_data">
                <div class="chp_medecin_data_item">
                    <div class="chp_medecin_di_1">Specialités</div>
                    <div class="chp_medecin_di_2">Ophtalmologiste spécialisé en chirurgie orbito-lacrymo-palpébrale (orbite, voie lacrymale, et paupière)</div>
                </div>
                <div class="chp_medecin_data_item">
                    <div class="chp_medecin_di_1">Études de médecine</div>
                    <div class="chp_medecin_di_2">Université de Nancy</div>
                </div>
                <div class="chp_medecin_data_item">
                    <div class="chp_medecin_di_1">Internat de chirurgie</div>
                    <div class="chp_medecin_di_2">Université de Lyon</div>
                </div>
                <div class="chp_medecin_data_item">
                    <div class="chp_medecin_di_1">Ancien chef de clinique et assistant des hôpitaux</div>
                    <div class="chp_medecin_di_2">Lyon</div>
                </div>
                <div class="chp_medecin_data_item">
                    <div class="chp_medecin_di_1">Ancien chef de clinique et assistant des hôpitaux</div>
                    <div class="chp_medecin_di_2">Lyon</div>
                </div>
                <div class="chp_medecin_data_item">
                    <div class="chp_medecin_di_1">Interne médaille d'or</div>
                    <div class="chp_medecin_di_2">
                        Lyon
                        <br/>
                        Wills Eye Institute de Philadelphie
                        <br/>
                        Doheny Eye Institute de Los Angeles
                    </div>
                </div>
                <div class="chp_medecin_data_item">
                    <div class="chp_medecin_di_1">Chirurgien attaché des hôpitaux</div>
                    <div class="chp_medecin_di_2">Service d'ophtalmologie, Pavillon C - hôpital Edouard Herriot Lyon</div>
                </div>
                <div class="chp_medecin_data_item">
                    <div class="chp_medecin_di_1">Societès Savantes</div>
                    <div class="chp_medecin_di_2">
                        Société Rhône-Alpes d'Ophtalmologie (SORA)
                        <br/>
                        Société française d'ophtalmologie (SFO)
                        <br/>
                        Société d'ophtalmologie plastique, reconstructrice et esthétique française
                        <br/>
                        European Society of ophtalmic, plastic and reconstructive surgery (ESOPRS)
                    </div>
                </div>
            </div>

            <a href="https://www.doctolib.fr/ophtalmologue/lyon/eric-baggio" target="_blank" class="chp_button chp_button_dark">En savoir plus <i class="fas fa-chevron-down"></i></a>
        </div>
    </section>

<?php get_footer(); ?>