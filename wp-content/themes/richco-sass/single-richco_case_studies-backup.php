<?php while (have_posts()) : the_post(); ?>
    <div class="container container-space">
        <div class="container4">
            <div class="row">
                <div class="col-xs-12">
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="case-filter">
                        <div class="row case-filters">                        
                            <div class="col-xs-12 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label" for="inputPassword">Search by :</label>
                                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-5">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                                <select class="form-control" onchange='document.location.href=this.options[this.selectedIndex].value;'>
                                                    <option>Please select...</option>
                                                    <?php 
                                                    $args = array( 'post_type' => 'richco_case_studies' , 'orderby' => 'title', 'order' => 'ASC' );
                                                    $case_studies = get_posts( $args );
                                                    foreach ( $case_studies as $case_study ) :
                                                        ?>                                                        
                                                    <option value="<?php echo( $case_study->guid ); ?>"><?php echo( $case_study->post_title ); ?></option>
                                                    <?php
                                                    endforeach; 
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <!--
                                                <select class="form-control" onchange='document.location.href=this.options[this.selectedIndex].value;'>
                                                    <option>Sectors 1</option>
                                                    <option>Sectors 2</option>
                                                    <option>Sectors 3</option>
                                                    <option>Sectors 4</option>
                                                    <option>Sectors 5</option>
                                                </select>
                                            -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        
                        <div class="col-xs-12 col-sm-4">
                            <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6 pull-right">
                                <div class="row">
                                 <a href="<?php echo( site_url('/case-studies/') ); ?>" class="btn btn-default btn-back">Back</a>
                             </div>
                         </div>
                     </div>
                     
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
        <div class="case-detail-col">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12">


                        <?php if( have_rows('sub_case_studies') ): $cs_itr = 1;// check for rows (parent repeater) ?>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" id="caseTab">

                                <?php while( have_rows('sub_case_studies') ): the_row(); // loop through rows (parent repeater) ?>

                                    <?php $case_study_title = get_sub_field('case_study_title'); ?>

                                    <li><a id="btn-tab-<?php echo($cs_itr); ?>" href="#tab-<?php echo($cs_itr); ?>" role="tab" data-toggle="tab"><?php echo $cs_itr .' - '. $case_study_title; ?></a></li>

                                    <?php $cs_itr++; ?>
                                <?php endwhile; // while( has_sub_field('sub_case_studies') ): ?>

                            </ul>
                        <?php endif; // if( get_field('sub_case_studies') ): ?>



                        <?php if( have_rows('sub_case_studies') ): // check for rows (parent repeater) ?>
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <?php $cs_itr = 1; ?>

                                <?php while( have_rows('sub_case_studies') ): the_row(); // loop through rows (parent repeater) ?>
                                    
                                    <?php
                                    $case_study_title = get_sub_field('case_study_title'); 
                                    $case_study_content = get_sub_field('case_study_content'); 
                                    ?>

                                    <div class="tab-pane" id="tab-<?php echo($cs_itr); ?>">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-7">

                                                <?php if( have_rows('case_study_slider') ): // check for rows (sub repeater) ?>
                                                    <ul class="bxslider" id="bxslider-<?php echo($cs_itr); ?>">
                                                        <?php 
                                                        /* loop through rows (sub repeater) */
                                                        while( have_rows('case_study_slider') ): the_row(); // display each slide as a list - with image url ?>
                                                        <li><img src="<?php echo( get_template_directory_uri() ); ?>/assets/img/detail-image.jpg" class="img-responsive" /></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; //if( get_sub_field('case_study_slider') ): ?>                                            

                                            <?php if( have_rows('case_study_slider') ): // check for rows (sub repeater) ?>
                                                <div class="slider-controlers">
                                                    <div class="bx-pager" id="bx-pager-<?php echo($cs_itr); ?>">
                                                        <?php 
                                                        $slide_index = 0;
                                                        /* loop through rows (sub repeater) */
                                                        while( have_rows('case_study_slider') ): the_row();
                                                        ?>
                                                        <a data-slide-index="<?php echo($slide_index); ?>" href="#"><img class="img-responsive-b" src="<?php echo( get_template_directory_uri() ); ?>/assets/img/detail-thumb.jpg" /></a>
                                                        <?php 
                                                        $slide_index++; 
                                                        endwhile; 
                                                        ?>
                                                    </div>

                                                    <div class="slider-arrows">
                                                        <span class="slider-prev" id="slider-prev-<?php echo($cs_itr); ?>"></span>
                                                        <span class="slider-next" id="slider-next-<?php echo($cs_itr); ?>"></span>
                                                    </div>
                                                </div>
                                                
                                            <?php endif; //if( get_sub_field('case_study_slider') ): ?>                                             

                                        </div>

                                        <div class="col-xs-12 col-sm-5">

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="custom-col">
                                                        <div class="scrollbox3">
                                                            <?php echo wpautop( $case_study_content ); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="buttons">
                                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                                        <a href="<?php echo get_page_link(108); //Request a Quote Link ?>" class="btn btn-default btn-button">Request a Quote</a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                                        <a href="<?php echo get_page_link(12); //Contact Us Link ?>" class="btn btn-default btn-button">Contact Us</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php $cs_itr++; ?>
                            <?php endwhile; // while( has_sub_field('sub_case_studies') ): ?>
                        </div>
                    <?php endif; // if( get_field('sub_case_studies') ): ?>



                </div>
                
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
<?php endwhile; ?>

<script type="text/javascript">
    $( document ).ready(function() {
        // Handler for .ready() called.

        // case studies first tab auto select
        $('#caseTab a:first').tab('show'); // Select first tab

        //custom scrollbar on case studies
        $('.scrollbox3').enscroll({
          showOnHover: false,
          verticalTrackClass: 'track3',
          verticalHandleClass: 'handle3'
      });
    });
</script>

<?php if( have_rows('sub_case_studies') ): $cs_itr = 1;// check for rows (parent repeater) ?>
    <script type="text/javascript">
        $( document ).ready(function() {
        // case studies slider

        <?php /* loop through rows (sub repeater) */
        while( have_rows('sub_case_studies') ): the_row(); 
        // display each slide as a list - with image url ?>

        <?php if ( $cs_itr != 1 ): ?>

        $('#btn-tab-<?php echo($cs_itr); ?>').click(function() {

            setTimeout(function(){

            <?php endif; ?>
            
            if ( typeof( slider_<?php echo($cs_itr); ?> ) == 'undefined' ) {   

                slider_<?php echo($cs_itr); ?> = $('#bxslider-<?php echo($cs_itr); ?>').bxSlider({
                    nextSelector: '#slider-next-<?php echo($cs_itr); ?>',
                    prevSelector: '#slider-prev-<?php echo($cs_itr); ?>',
                    pagerCustom : '#bx-pager-<?php echo($cs_itr); ?>'
                });

            }
            <?php if ( $cs_itr != 1 ): ?>

        }, 500 );

        });

    <?php endif; ?>

    <?php $cs_itr++; ?>
<?php endwhile; // while( has_sub_field('sub_case_studies') ): ?>
});
</script>
<?php endif; // if( get_field('sub_case_studies') ): ?>



















