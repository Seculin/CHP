// main.js

// Webpack
import '../test';

jQuery( document ).ready(function() {
    // Links
    //
    // Links - Navigation
    const medecins_link = jQuery("#chp_nav_medecins_link");
    const cliniques_link = jQuery("#chp_nav_cliniques_link");
    const navbar = jQuery("#chp_nav");
    //
    //
    // Links - Consignes
    const c_pre_link = jQuery("#c_pre_o");
    const c_post_link = jQuery("#c_post_o");

    // Dropdowns
    const medecins_nav = jQuery("#chp_nav_medecins");
    const cliniques_nav = jQuery("#chp_nav_cliniques");

    // Consignes
    const c_pre_content = jQuery("#c_pre_o_content");
    const c_post_content = jQuery("#c_post_o_content");

    medecins_link.hover(() => {
        cliniques_nav.hide();
        medecins_nav.show();
    });

    cliniques_link.hover(() => {
        medecins_nav.hide();
        cliniques_nav.show();
    });

    c_pre_link.on("click", () => {
        c_pre_content.toggle();
    })

    c_post_link.on("click", () => {
        c_post_content.toggle();
    })

    navbar.hover(() => {
        return null;
    }, () => {
        medecins_nav.hide();
        cliniques_nav.hide();
    })
});