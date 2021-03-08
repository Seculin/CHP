<?php
/*
    Seculin Theme | Footer
	Copyright: 2017, Seculin, www.seculin.com
    Wordpress v5.4
*/
?>

<?php wp_footer(); ?>

    <footer>
        <div class="container-fluid">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
                <ul class="list-unstyled list-inline">
                    <li><a href="<?php echo site_url( '/les-liens-utiles' ) ?>">Les liens utiles</a></li>
                    <li><a href="<?php echo site_url( '/mentions-legales' ) ?>">Mentions légales</a></li>
                    <li><a href="http://congres.emmanueldelay.fr" target="_blank">Espace médecins</a></li>
                    <li><a href="<?php echo site_url( '/contact' ) ?>" target="_blank">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                <span class="copyright-tag">
                    Crée par <strong>Seculin</strong>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_seculin.png" id="seculin-logo" class="img-responsive" alt="seculin-logo">
                </span>
            </div>
        </div>
    </footer>

</main>

<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<script>
    jQuery( document ).ready(function() {
        AOS.init();
    });
</script>

<script>
    jQuery(window).on('load', function () {
        AOS.refresh();
    });
</script>

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

<script>
	jQuery(document).ready(function() {

            // get the current URL
            var url = jQuery(location).attr('href');

            // if the URL ends with the anchor #portfolioModal93 then we want to open the modal
            // 
            
			var interventions = ["la-chirurgie-esthetique-des-seins", "la-chirurgie-reparatrice-des-seins", "la-chirurgie-plastique-du-visage", "la-chirurgie-de-labdomen", "chirurgie-esthetique-les-cuisses-les-hanches-et-les-fesses", "la-chirurgie-genitale"];
		
			var modals = ["1", "2", ,"3" ,"4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14"];
		
			for (y of interventions) {
				for (x of modals) {
				current_url = 'http://emmanueldelay.fr/interventions/' + y + '/#intervention-modal-' + x;
			
				current_modal = '#intervention-modal-' + x;
				
				if(url == (current_url)) {
                	jQuery(current_modal).modal('show');
            	}
		    }
			}
        });
</script>

</body>
</html>