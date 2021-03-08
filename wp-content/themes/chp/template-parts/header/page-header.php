<?php
/*
    Seculin Theme | Header Media Template
	Copyright: 2017, Seculin, www.seculin.com
    Wordpress v4.9
*/
?>

    <!--    Header - Main Heading [ WP Blog Name ]    -->
    <h1 id="header-title" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="300">
        <?php bloginfo( 'name' ); ?>
    </h1>

    <!--    Header - Main Tagline [ WP Blog Description ]    -->
    <?php
    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) :
        ?>
        <h2 id="header-tagline" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="600">
            <?php echo $description; ?>
        </h2>
    <?php endif; ?>

    <!--    Header - Main Button    -->
    <a href="#hp-introduction" class="ed-border-dark-button" style="margin-right: 2%; margin-bottom: 2%;" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="700" data-aos-offset="-5000">
        En savoir plus
    </a>

    <!--    Header - Q&A Button    -->
    <a href="<?php echo site_url( '/questions' ) ?>" class="ed-border-dark-button ed-orange-button ed-orange-button-edit" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="700" data-aos-offset="-5000">
        Questions les plus fréquentes
    </a>

    <!--    Header - "Book an Appointment" Button [Smartphone]    -->
    <a href="https://www.doctolib.fr/chirurgien-plastique/lyon/emmanuel-delayy"
       id="header-button-2" class="ed-border-dark-button ed-mobile-edit-1" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="700" data-aos-offset="-5000">
        <i class="fa fa-calendar"></i> Prendre rendez-vous
    </a>

    <!--    Header - Main Image    -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/woman-header.png" id="header-image" class="img-responsive"
         data-aos="fade-left" data-aos-duration="1000" alt="woman-header">
