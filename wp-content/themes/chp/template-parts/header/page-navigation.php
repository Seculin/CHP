<?php
/*
    Seculin Theme | Page Navigation
	Copyright: 2017, Seculin, www.seculin.com
    Wordpress v4.9
*/
?>

<nav id="ed-navigation">
    <div class="container-fluid">

        <!--    Top Navbar    -->
        <div id="ed-navbar-1" class="row">
            <a href="<?php echo home_url() ?>">
                <img id="navbar-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="site-logo">
            </a>

            <!--    "Book an appointment" Button    -->
            <div id="navbar-button-1">
                <a href="https://www.doctolib.fr/chirurgien-plastique/lyon/emmanuel-delayy" target="_blank">
                    <div id="navbar-button-content">
                        <div id="navbar-button-content-data">
                            <div>
                                <i class="fa fa-calendar"></i> Prendre rendez-vous
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!--    Contact Details    -->
            <div id="navbar-contact">
                <div class="navbar-contact-item col-lg-4">
                    <div class="navbar-contact-item-data">
                        <i class="fa fa-search"></i>
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="navbar-contact-item col-lg-3">
                    <div class="navbar-contact-item-data">
                        <i class="fa fa-phone"></i> 04 72 56 07 06
                    </div>
                </div>
                <div class="navbar-contact-item col-lg-5">
                    <div class="navbar-contact-item-data">
                        <i class="fa fa-envelope"></i>contact@emmanueldelay.com
                    </div>
                </div>
            </div>

            <!--    [Smartphone] Menu Button    -->
            <div id="navbar-collapse">
                <i class="fa fa-bars"></i>
            </div>
        </div>

        <!--    Bottom Navbar    -->
        <div id="ed-navbar-2" class="row">
            <ul id="navbar-navigation-list" class="list-unstyled list-inline">

                <li><a href="<?php echo site_url( '/actualites' ) ?>">Actualités</a></li>

                <li class="dropdown">
                    <a href="<?php echo site_url( '/docteur-emmanuel-delay' ) ?>">Biographie</a>
                </li>

                <li class="dropdown">
                    <a href="<?php echo site_url( '/consultations' ) ?>">Consultations</a>
                </li>

                <li class="dropdown">
                    <a href="<?php echo site_url( '/medecine-esthetique' ) ?>">Médecine Esthétique</a>
                </li>

                <li class="dropdown">
                    <a href="<?php echo site_url( '/interventions' ) ?>">Interventions</a>
                </li>

                <li class="dropdown">
                    <a href="<?php echo site_url( '/surpoids-obesite' ) ?>">Surpoids & Obésité</a>
                </li>

                <li class="dropdown">
                    <a href="<?php echo site_url( '/questions' ) ?>">Questions</a>
                </li>
            </ul>
        </div>
    </div>
</nav>