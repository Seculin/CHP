// main.js

// Webpack
import '../test';

jQuery(document).ready(function () {
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

    // Icons
    const c_pre_o_icon = document.getElementById("c_pre_o_icon");
    const c_post_o_icon = document.getElementById("c_post_o_icon");

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

        if (c_pre_o_icon.classList.contains("icon-rotate")) {
            c_pre_o_icon.classList.remove("icon-rotate")
        } else {
            c_pre_o_icon.classList.add("icon-rotate")

        }
    })

    c_post_link.on("click", () => {
        c_post_content.toggle();

        if (c_post_o_icon.classList.contains("icon-rotate")) {
            c_post_o_icon.classList.remove("icon-rotate")
        } else {
            c_post_o_icon.classList.add("icon-rotate")

        }
    })

    navbar.hover(() => {
        return null;
    }, () => {
        medecins_nav.hide();
        cliniques_nav.hide();
    })

    // --------------------------------------
    //
    // Pathologies

    var pathologies = document.getElementsByClassName("chp_pathology");
    var i;

    for (i = 0; i < pathologies.length; i++) {
        pathologies[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("chp_pathology_active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

    // --------------------------------------
    //
    // Mobile Navigation

    var nav_1_mobile = document.getElementById("chp_nav_1_mobile");

    nav_1_mobile.addEventListener("click", function () {
        this.classList.toggle("chp_nav_1_mobile_active");

        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });

    var nav_main_mobile = document.getElementById("chp_mobile_nav_button");
    var nav_main_mobile_collapsible = document.getElementById("chp_mobile_navbar");

    nav_main_mobile.addEventListener("click", function () {
        this.classList.toggle("chp_mobile_nav_button_active");

        if (nav_main_mobile_collapsible.classList.contains("chp_mobile_navbar_show")) {
            nav_main_mobile_collapsible.classList.remove("chp_mobile_navbar_show")
        } else {
            nav_main_mobile_collapsible.classList.add("chp_mobile_navbar_show")
        }
    });

    var mobile_nav_medecins_link = document.getElementById("chp_mobile_nav_medecins_link");

    mobile_nav_medecins_link.addEventListener("click", function () {
        nav_main_mobile_collapsible.classList.remove("chp_mobile_navbar_show");
    });

    var mobile_nav_cliniques_link = document.getElementById("chp_mobile_nav_cliniques_link");

    mobile_nav_cliniques_link.addEventListener("click", function () {
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
});