<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
   

</head>
<body <?php body_class();?>>
      
    <header>
      <div class="topBar">
        <div class="container">
        <?php if (has_nav_menu('secondary')) {
              wp_nav_menu([
                'theme_location'=>'secondary',
                'container'=>false,
                'fallback_cb'=>false,
                'depth'=>1
                //'menu-class'=>
              ]);
            }
            ?>
            <div class="topSocial">
              <ul>
                <?php 
                  if (get_theme_mod('hs_facebook_handle')){?>
                    <li><a href="https://facebook.com/<?php echo get_theme_mod('hs_facebook_handle');?>"><i class="fab fa-facebook-f"></i></a></li>
                  <?php 
                  }
                ?>
              </ul>
            </div>
       </div>
      </div>
      </div>
      
        <div class="sticky mainBar">
          <div class="container">
          <div class="logo"> 
           <?php if (has_custom_logo()) {
             the_custom_logo();
           }
           else {?>
           <a href="<?php echo home_url('/')?> " class="standard-logo">
              <?php bloginfo('name'); ?>
           </a>
           <?php } 
           ?>
           </div>
          <nav id="primaryMenu">
            <?php if (has_nav_menu('primary')) {
              wp_nav_menu([
                'theme_location'=>'primary',
                'container'=>false,
                'fallback_cb'=>false,
                'depth'=>2
                //'menu-class'=>
              ]);
            }
            ?>
          </nav>

          </div>
         
        </div>

        <div class="topAdvert container">
        <?php 
                    if( function_exists( 'quads_ad' ) ){
                        echo quads_ad([ 'location' => 'hs_header' ]);
                    }
                    ?>
        </div>
      </div>
    </header> 