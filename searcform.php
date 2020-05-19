<?php $unique_id = esc_attr( uniqid( 'searchForm-' ) ); ?>

<form role="search" method="get" class="searchForm"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="inputGroup">
        <input type="search" id="<?php echo $unique_id; ?>"
               class="formControl" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Searrrrch', 'hs' ); ?>"/>
        <span class="inputGroupBtn">
            <button type="submit" class="searchBtn"><i class="icon-search"></i></button>
        </span>
    </div>
</form>