<?php
/*
    Seculin Theme | Front-Page
	Copyright: 2017, Seculin, www.seculin.com
    Wordpress v5.4
*/
?>

<?php get_header(); ?>

<main id="main-website">

    <div id="landing-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <a href="<?php echo site_url( '/patients/home' ) ?>">
                        <div class="lp-item">
                            <div class="lp-item-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/sections/patient.jpg" class="img-responsive" alt="patient-image">
                            </div>
                            <div class="lp-item-content">
                                <h2>Je suis un <span>patient·e</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="<?php echo site_url( '/professionels/home' ) ?>">
                        <div class="lp-item">
                            <div class="lp-item-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/sections/professionel.jpg" class="img-responsive" alt="professionel-de-sante-image">
                            </div>
                            <div class="lp-item-content">
                                <h2>Je suis un <span>professionel·le de santé</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <hr/>

            <div class="row">
                <div class="lp-recherche lp-search-box col-lg-12">
                    <div class="lp-recherche-content-box">
                        <div class="lp-recherche-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sections/recherche.jpg" class="img-responsive" alt="professionel-de-sante-image">
                        </div>
                        <div class="lp-recherche-content">
                            <h3><span class="lp-recherche-ws">&nbsp;&nbsp;</span>Je cherche des information au propos...
                                <div class="ed-custom-select">
                                    <select name="topic" id="topics">
                                        <option value="01">Reconstruction Esthètique du Sein</option>
                                        <option value="02">Prothèses Mammaires</option>
                                        <option value="03">La Chirurgie Réparatrice du Sein</option>
                                        <option value="04">La Chirurgie Plastique du Visage</option>
                                        <option value="01">Chirurgie esthétique: Les cuisses, les hanches et les fesses</option>
                                        <option value="02">La chirurgie génitale</option>
                                        <option value="03">Toxine Botulique</option>
                                        <option value="04">Prévention et gestion du vieillissement</option>
                                    </select>
                                </span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>