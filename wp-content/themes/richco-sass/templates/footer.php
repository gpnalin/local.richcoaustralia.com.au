<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 left">
                <div class="box">
                    <h5>Industries</h5>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        	<?php
								if (has_nav_menu('industries_navigation')) :
								  wp_nav_menu(array('theme_location' => 'industries_navigation', 'menu_class' => 'divide-half footer-industries'));
								endif;
							?>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 middle">
                <div class="box">
                    <h5>Downloads</h5>
                    <div class="row">
                        <div class="col-xs-12">
                            <?php
								if (has_nav_menu('downloads_navigation')) :
								  wp_nav_menu(array('theme_location' => 'downloads_navigation', 'menu_class' => 'footer-downloads'));
								endif;
							?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 right">
                <div class="box">
                    <h5>Get In Touch</h5>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="get-in">
                            	<?php the_field('get_in_touch',OPTIONS_PAGE_ID); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main-menu">
        <div class="container">
            <div class="row">
                <?php
					if (has_nav_menu('footer_navigation')) :
					  wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'footer-navigation'));
					endif;
				?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7  col-lg-7">
                <div class="branded">
                    <?php the_field('brands',OPTIONS_PAGE_ID); ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
                <p class="copyright"><?php the_field('copyright_text',OPTIONS_PAGE_ID); ?></p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
