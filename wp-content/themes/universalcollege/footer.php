    <footer>

		
         <div class="footer-content">

             <div class="container">

                <div class="row">

                    <div class="col-md-auto col-xs-auto">
                        <div class="form-content">
							<h3 class="text-dark">Stay In The Know !</h3>
                            <form class="form-inline">
                                <div class="form-group mb-2">
										<?php echo do_shortcode('[contact-form-7 id="409" title="Email"]'); ?>
                                </div>
                            </form>
                            <a class="text-secondary" href="#">To unsubscribe please click here >></a>
                        </div>
                    </div>

                    <div class="col-md-auto col-xs-auto">
                        <h3 class="text-dark">Lacus interdum</h3>
                        <?php
            				wp_nav_menu(
                    			array(
                        			'theme_location' => 'secondary',
                        			'container' => false,
                        			'menu_class' => '',
                    				 )
            				);?>
                    </div>

                    <div class="col-md-auto col-xs-auto">
                        <h3 class="text-dark">Lacus interdum</h3>
                        <?php
            				wp_nav_menu(
                    			array(
                        			'theme_location' => 'secondary',
                        			'container' => false,
                        			'menu_class' => '',
                    				 )
            				);?>
                    </div>

                </div>

             </div>

        </div>
        <div class="copyright col-xs-auto">
            <p id="sub-footer-p1">Copyright © 2013 Domain Name - All Rights Reserved</p>
            <p id="sub-footer-p2">Template by OS Templates</p>
        </div>
		

    </footer>


<?php wp_footer(); ?>
</body>
</html>