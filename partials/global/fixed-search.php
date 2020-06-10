<i class="fas fa-search"></i>
<div id="fixed-search">
    <a href="#" id="top-search-trigger">
        <i class="icon-search3"></i><i class="icon-line-cross"></i>
    </a>
    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <input type="search" name="s" class="form-control" placeholder="<?php _e( 'Type &amp; Hit Enter..', 'hs' ); ?>"
            value="<?php the_search_query(); ?>">
    </form>
</div>