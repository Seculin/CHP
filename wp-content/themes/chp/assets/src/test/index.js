// Navigation
jQuery( document ).ready(function() {
    // Links
    const medecins_link = jQuery("#chp_nav_medecins_link");
    const cliniques_link = jQuery("#chp_nav_cliniques_link");
    const navbar = jQuery("#chp_nav");

    // Dropdowns
    const medecins_nav = jQuery("#chp_nav_medecins");
    const cliniques_nav = jQuery("#chp_nav_cliniques");

    medecins_link.hover(() => {
        cliniques_nav.hide();
        medecins_nav.show();
    });

    cliniques_link.hover(() => {
        medecins_nav.hide();
        cliniques_nav.show();
    });

    navbar.hover(() => {
        return null;
    }, () => {
        medecins_nav.hide();
        cliniques_nav.hide();
    })
});