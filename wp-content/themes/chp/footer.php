<?php
/*
    CHP Theme | Footer
    Copyright: 2021, Seculin, www.seculin.com
    Wordpress v5.6.2
*/
?>

<?php wp_footer(); ?>

</main>

<footer id="chp_footer" class="flex row main-start cross-center">
    <div class="container">
        <div class="flex row main-start cross-center">
            <span><strong>© CHIRURGIE DE LA PAUPIÈRE 2021</strong> | SITE WEB PAR SECULIN <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/seculin.png" alt="seculin-logo"></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/logo_light.png" class="chp_footer_logo" alt="site-logo-footer">
        </div>
    </div>
</footer>

<!--  Smooth Scrolling  -->

<script>
    jQuery('a[href]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = jQuery(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
</script>

</body>
</html>