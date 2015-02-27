<form role="search" method="get" class="search search-form form-inline" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <img src="<?php echo( get_template_directory_uri() ); ?>/assets/img/search.jpg" class="img-responsive" alt="Image">
                </button>
            </span>
        <input type="search" name="s"  class="form-control" placeholder="<?php _e('Search Here', 'roots'); ?>" value="<?php if (is_search()) { echo get_search_query(); } ?>" >
    </div>
</form>