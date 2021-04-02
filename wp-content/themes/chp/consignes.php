<?php
/*
    Template Name: Consignes
    CHP Theme | Consignes
    Copyright: 2021, Seculin, www.seculin.com
    Wordpress v5.6.2
 */
?>

<?php get_header(); ?>

<main>

    <?php
    if ( have_posts() ) {
    while ( have_posts() ) : the_post();
    ?>

    <section class="chp_header chp_h_consignes">
        <div class="chp_container flex column main-center cross-center">
            <div class="container">
                <h1 class="chp_light"><?php the_title() ?></h1>

                <h2 class="chp_light_v2"><?php the_content() ?></h2>

                <a href="#chp_consignes" class="chp_button chp_button_light">En savoir plus <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <?php endwhile; } ?>

    <section id="chp_consignes">
        <div class="container">
            <div class="chp_consignes_container flex col main-start">
                <div class="chp_consignes_category">

                    <?php $query2 = new WP_Query( "pagename=consignes-peri-operatoires/consignes-pre-operatoires" ); ?>
                    <?php if ( $query2->have_posts() ) : $query2->the_post(); ?>

                    <div id="c_pre_o" class="chp_consignes_thumb flex row main-start cross-center">
                        <h4><?php the_title() ?></h4>

                        <span id="c_pre_o_icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>

                    <div id="c_pre_o_content" class="chp_consignes_content">
                        <?php the_content() ?>
                    </div>

                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
                <div class="chp_consignes_category">

                    <?php $query2 = new WP_Query( "pagename=consignes-peri-operatoires/consignes-post-operatoires" ); ?>
                    <?php if ( $query2->have_posts() ) : $query2->the_post(); ?>

                    <div id="c_post_o" class="chp_consignes_thumb flex row main-start cross-center">
                        <h4><?php the_title() ?></h4>

                        <span id="c_post_o_icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>

                    <div id="c_post_o_content" class="chp_consignes_content">
                        <?php the_content() ?>
                    </div>

                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>