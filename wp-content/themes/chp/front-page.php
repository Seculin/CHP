<?php
/*
    CHP Theme | Front Page
    Copyright: 2021, Seculin, www.seculin.com
    Wordpress v5.6.2
*/
?>

<?php get_header(); ?>

<main>

    <?php get_template_part('template-parts/header/page', 'header'); ?>

    <section id="chp_intro">
        <div class="chp_bg_wrapper">
            <div class="container">
                <h3>Présentation</h3>

                <p>
                    <strong>Notre département d’oculoplastie</strong> vous offre la prise en charge des <strong>pathologies des paupières</strong><br />
                    (malpositions, tumeurs, malformations, etc.), de <strong>l’orbite</strong> (tumeurs, cavités, traumatismes, etc.),<br />
                    des <strong>voies lacrymales</strong> (larmoiement de l’adulte ou de l’enfant) et de <strong>l’esthétique du regard</strong>.
                    <br /><br />
                    Nos ophtalmologues de formation, les docteurs <strong class="color-default bold">Dr. Eric Baggio</strong> et <strong class="color-default bold">Dr. Jérémie Barbier</strong><br />
                    vous présentent à travers ce site internet les différentes pathologies spécifiques à l’oeil<br />
                    et à ses annexes qui font leur spécificité dans ce domaine.
                </p>

                <a href="#chp_intro_medecins" class="chp_button chp_button_dark">En savoir plus <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <section id="chp_intro_pathologies">
        <div class="chp_bg_wrapper flex col main-center cross-end">
            <div class="container">
                <h1 class="chp_intro_heading">Pathologies &amp; Traitements</h1>

                <p class="chp_intro_paragraph">Tout savoir sur les pathologies que nous traitons <br/>et les traitements que nous proposons</p>

                <a href="<?php echo site_url( '/pathologies' ) ?>" class="chp_button chp_button_light">En savoir plus <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <section id="chp_intro_medecins">
        <div class="chp_bg_wrapper">
            <div class="container">
                <h3>Nos Médecins</h3>

                <div class="chp_intro_medecins_content flex row">
                    <div class="chp_intro_medecin flex col main-center cross-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/baggio.jpg" class="nav_img" alt="doctor-profile-photo">

                        <span class="chp_intro_medecin_name">Dr. Eric Baggio</span>
    
                        <span class="chp_intro_medecin_role">Ophtalmologue</span>

                        <span class="chp_intro_medecin_desc">
                            Titulaire du diplôme inter-universitaire de chirurgie orbito-lacrymo-palpébrale
                        </span>
    
                        <a href="<?php echo site_url( '/dr-eric-baggio' ) ?>" class="chp_button chp_button_dark">En savoir plus <i class="fas fa-chevron-down"></i></a>
                    </div>
                    <div class="chp_intro_medecin flex col main-center cross-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/barbier.jpg" class="nav_img" alt="doctor-profile-photo">

                        <span class="chp_intro_medecin_name">Dr. Jérémie Barbier</span>
    
                        <span class="chp_intro_medecin_role">Ophtalmologue</span>

                        <span class="chp_intro_medecin_desc">
                            Titulaire du diplôme inter-universitaire de chirurgie orbito-lacrymo-palpébrale
                        </span>

                        <a href="<?php echo site_url( '/dr-jeremy-barbier' ) ?>" class="chp_button chp_button_dark">En savoir plus <i class="fas fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="chp_intro_consignes">
        <div class="chp_bg_wrapper flex col main-center cross-end">
            <div class="container">
                <h1 class="chp_intro_heading">Consignes pour nos patients</h1>

                <p class="chp_intro_paragraph">Consultez nos instructions générales pré et post opératoires, préparées par des professionnels de l'ophtalmologie</p>

                <a href="<?php echo site_url( '/consignes-peri-operatoires' ) ?>" class="chp_button chp_button_light">En savoir plus <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>