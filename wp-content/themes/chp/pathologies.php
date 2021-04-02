<?php
/*
    Template Name: Pathologies
    CHP Theme | Pathologies
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

    <section class="chp_header chp_h_pathologies">
        <div class="chp_container flex column main-center cross-center">
            <div class="container">
                <h1 class="chp_light"><?php the_title() ?></h1>

                <h2 class="chp_light_v2"><?php the_content() ?></h2>

                <a href="#chp_pathologies" class="chp_button chp_button_light">Pathologies et traitements <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <?php endwhile; } ?>

    <section id="chp_pathologies">
        <div class="container">
            <div class="separator"></div>
            <h4>Les Paupiéres</h4>

            <div class="chp_pathologies_group flex col main-start cross-center">

                <?php $queries = new WP_Query('category_name=paupieres'); ?>
                <?php   while ($queries->have_posts()) : $queries->the_post(); ?>

                <div class="chp_pathology_item">
                    <div class="chp_pathology">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="pathology-thumbnail-image">
    
                        <div class="chp_pathology_name"><?php the_title(); ?></div>
    
                        <span class="chp_pathology_icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>

                    <div class="chp_pathology_content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <div class="separator"></div>
            <h4>Larmoiement</h4>

            <div class="chp_pathologies_group flex col main-start cross-center">

                <?php $queries = new WP_Query('category_name=larmoiement'); ?>
                <?php   while ($queries->have_posts()) : $queries->the_post(); ?>

                <div class="chp_pathology_item">
                    <div class="chp_pathology">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="pathology-thumbnail-image">
    
                        <div class="chp_pathology_name"><?php the_title(); ?></div>
    
                        <span class="chp_pathology_icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>

                    <div class="chp_pathology_content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <div class="separator"></div>
            <h4>Cavité – Prothèse oculaire</h4>

            <div class="chp_pathologies_group flex col main-start cross-center">

                <?php $queries = new WP_Query('category_name=cavite-prothese-oculaire'); ?>
                <?php   while ($queries->have_posts()) : $queries->the_post(); ?>

                <div class="chp_pathology_item">
                    <div class="chp_pathology">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="pathology-thumbnail-image">
    
                        <div class="chp_pathology_name"><?php the_title(); ?></div>
    
                        <span class="chp_pathology_icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>

                    <div class="chp_pathology_content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <div class="separator"></div>
            <h4>Esthétique du regard</h4>

            <div class="chp_pathologies_group flex col main-start cross-center">

                <?php $queries = new WP_Query('category_name=esthetique-du-regard'); ?>
                <?php   while ($queries->have_posts()) : $queries->the_post(); ?>

                <div class="chp_pathology_item">
                    <div class="chp_pathology">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="pathology-thumbnail-image">
    
                        <div class="chp_pathology_name"><?php the_title(); ?></div>
    
                        <span class="chp_pathology_icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>

                    <div class="chp_pathology_content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>