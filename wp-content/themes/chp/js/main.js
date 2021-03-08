// main.js

// Webpack
require('./bootstrap.min');
require('../css/aos.css');
require('../css/bootstrap-theme.min.css');
require('../css/bootstrap.min.css');
require('../style.less');
require('./bmi');

jQuery(document).ready(function () {
    var x, i, j, l, ll, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName("ed-custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    /* If the user clicks anywhere outside the select box,
    then close all select boxes: */
    document.addEventListener("click", closeAllSelect);


    jQuery('#actualite-close').on('click', function () {
        jQuery('#hp-actualite-alert').hide(300);
        jQuery('#hp-actualite-alert').attr("data-aos", "");
    });

    jQuery('#actualite-close-2').on('click', function () {
        jQuery('#hp-actualite-covid-alert').hide(300);
        jQuery('#hp-actualite-covid-alert').attr("data-aos", "");
    });

    jQuery('#actualite-close-mobile').on('click', function () {
        jQuery('#hp-actualite-covid-alert').hide(300);
        jQuery('#hp-actualite-covid-alert').attr("data-aos", "");
    });

    jQuery('#international-close').on('click', function () {
        jQuery('#hp-international-alert').hide(300);
        jQuery('#hp-international-alert').attr("data-aos", "");
    });

    // Mobile Navigation Toggle
    jQuery('#navbar-collapse').on('click', function () {
        jQuery('#navbar-collapse-nav').slideToggle(300);
        jQuery('#hp-actualite-alert').hide(300);
    });

    jQuery('#bmi-button').on('click', function () {
        bmiPoids = jQuery('#bmi-weight').val();
        bmiTaille = jQuery('#bmi-height').val();
        bmiResult = jQuery('#bmi-result');
        bmiResults = jQuery('#bmi-results');
        bmiValue = jQuery('#bmi-value');
        bmiClass = "green";

        bmi = calculateBmi(bmiPoids, bmiTaille);

        if (bmi < 18.5) {
            bmiStatus = "Corpulence normale";
            bmiClass = "green";
        } else if (18.5 < bmi && bmi < 25) {
            bmiStatus = "Corpulence normale";
            bmiClass = "green";

        } else if (25 < bmi && bmi < 30) {
            bmiStatus = "Surpoids";
            bmiClass = "orange";

        } else if (30 < bmi && bmi < 35) {
            bmiStatus = "Obésité modérée";
            bmiClass = "orange";

        } else if (35 < bmi && bmi < 40) {
            bmiStatus = "Obésité sévère";
            bmiClass = "red";

        } else if (40 < bmi) {
            bmiStatus = "Obésité morbide";
            bmiClass = "red";
        }

        bmiResult.html(bmiStatus);
        bmiResult.attr("class", bmiClass);
        bmiValue.html(bmi + " IMC");

        bmiResults.show(300);
    });


    function calculateBmi(poids, taille) {
        return Math.round((poids / Math.pow((taille / 100), 2)) * 100) / 100;
    }
});

jQuery(window).load(function () {

});