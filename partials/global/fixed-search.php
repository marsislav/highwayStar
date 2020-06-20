
  <div class="search-box">
  <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
  <input type="search" name="s" class="input" placeholder="<?php _e( 'Type &amp; Hit Enter..', 'hs' ); ?>"
            value="<?php the_search_query(); ?>">
</form>
     <div class="btn">
       <i class="fa fa-search" aria-hidden="true"></i>
     </div>
  </div>


