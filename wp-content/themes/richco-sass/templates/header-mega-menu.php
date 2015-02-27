<div class="navbar navbar-default yamm">
    <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div id="navbar-collapse-grid" class="navbar-collapse collapse">
        <?php //the_field('mega_menu',OPTIONS_PAGE_ID); ?>

        <ul class="nav navbar-nav">
            <li class="item-100 menu-item-home<?php echo( is_front_page() ? ' active' : '' ); ?>"><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="item-101 menu-item-about-us<?php echo( is_tree('about-us') ? ' active' : '' ); ?>"><a href="<?php echo site_url('/about-us/'); ?>">About</a></li>
            <li class="dropdown yamm-fw item-102 menu-item-industry<?php echo( (is_page_template('template-industries.php') OR is_singular( 'richco_product' ) ) ? ' active' : '' ); ?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Industries</a>
				
                <ul class="dropdown-menu">
                    <div class="container">
                        <li class="grid-demo container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="submenu-box">
                                        
                                            <h2><a href="<?php echo site_url('/automotive/'); ?>">Automotive</a></h2>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/09-automotive.png" class="img-responsive img-rounded" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="submenu-box">
											<h2><a href="<?php echo site_url(); ?>/aviation">Aviation</a></h2>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/04-aviation.png" class="img-responsive img-rounded" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="submenu-box">
                                        <a href="<?php echo site_url(); ?>/concrete">
                                            <h2>Concrete</h2>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/11-concrete.png" class="img-responsive img-rounded" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="submenu-box">
                                        <a href="<?php echo site_url(); ?>/education">
                                            <h2>Education</h2>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/08-education.png" class="img-responsive img-rounded" alt="Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="submenu-box">
                                        <a href="<?php echo site_url(); ?>/food-and-beverage">
                                            <h2>Food &amp; Beverage</h2>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/06-food-and-beverage.png" class="img-responsive img-rounded" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="submenu-box">
                                        <a href="<?php echo site_url(); ?>/industrial-and-commercial">
                                            <h2>Industrial &amp; Commercial</h2>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/05-industrial-and-commercial.png" class="img-responsive img-rounded" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="submenu-box">
                                        <a href="<?php echo site_url(); ?>/marine-and-nautical">
                                            <h2>Marine &amp; Nautical</h2>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/07-marine-and-nautical.png" class="img-responsive img-rounded" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="submenu-box">
                                        <a href="<?php echo site_url(); ?>/residential">
                                            <h2>Residential</h2>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/10-residential.png" class="img-responsive img-rounded" alt="Image">
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="submenu-box">
                                            <a href="<?php echo site_url(); ?>/retail">
                                                <h2>Retail</h2>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/03-retail.png" class="img-responsive img-rounded" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="submenu-box">
                                            <a href="<?php echo site_url(); ?>/sport">
                                                <h2>Sport</h2>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/12-sport.png" class="img-responsive img-rounded" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="submenu-box">
                                            <a href="<?php echo site_url(); ?>/theme-and-leisure">
                                                <h2>Theme &amp; Leisure</h2>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/01-theme-and-leisure.png" class="img-responsive img-rounded" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="submenu-box">
                                            <a href="<?php echo site_url(); ?>/tv-and-film">
                                                <h2>TV &amp; Film</h2>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mega-menu/02-tv-and-film.png" class="img-responsive img-rounded" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="item-103 menu-item-brochures<?php echo( is_post_type_archive('richco_brochures') ? ' active' : '' ); ?>"><a href="<?php echo site_url('/brochures/'); ?>">Brochures</a></li>
                <li class="item-104 menu-item-case-studies<?php echo( ( is_post_type_archive('richco_case_studies') OR is_singular( 'richco_case_studies' ) ) ? ' active' : '' ); ?>"><a href="<?php echo site_url('/case-studies/'); ?>">Case Studies</a></li>
                <li class="item-105 menu-item-contact-us<?php echo( is_tree('contact-us') ? ' active' : '' ); ?>"><a href="<?php echo site_url('/contact-us/'); ?>">Contact Us</a></li>
            </ul>

        </div>
    </div>