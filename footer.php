
      <footer>
      <div class="container">
            
              <div class="copyright">
              <?php echo get_theme_mod( 'hs_footer_copyright_text'); ?>  
              </div>
              <div class="footerSocial">
              <ul>
                <?php 
                  if (get_theme_mod('hs_facebook_handle')){?>
                    <li><a href="https://facebook.com/<?php echo get_theme_mod('hs_facebook_handle');?>"><i class="fab fa-facebook-f"></i></a></li>
                  <?php 
                  }
                ?>
                       <?php 
                  if (get_theme_mod('hs_twitter_handle')){?>
                    <li><a href="https://twitter.com/<?php echo get_theme_mod('hs_twitter_handle');?>"><i class="fab fa-twitter"></i></a></li>
                  <?php 
                  }
                ?>
                       <?php 
                  if (get_theme_mod('hs_instagram_handle')){?>
                    <li><a href="https://instagram.com/<?php echo get_theme_mod('hs_instagram_handle');?>"><i class="fab fa-instagram"></i></a></li>
                  <?php 
                  }
                ?>
                       <?php 
                  if (get_theme_mod('hs_email')){?>
                    <li><a href="mailto:<?php echo get_theme_mod('hs_email');?>"><i class="far fa-envelope"></i></a></li>
                  <?php 
                  }
                ?>
                       <?php 
                  if (get_theme_mod('hs_phone_number')){?>
                    <li><a href="tel:<?php echo get_theme_mod('hs_phone_number');?>"><i class="fas fa-phone"></i></a></li>
                  <?php 
                  }
                ?>
              </ul>
            </div>
              <div class="defPages">
                  <?php
                    if (get_theme_mod('hs_footer_tos_page')){?>
                    <a href="<?php the_permalink (get_theme_mod( 'hs_footer_tos_page'));?>">TOS</a>
                   <?php }
                  ?>
                  <?php
                    if (get_theme_mod('hs_footer_privacy_page')){?>
                    <a href="<?php the_permalink (get_theme_mod( 'hs_footer_privacy_page'));?>">PPP</a>
                   <?php }
                  ?>
              </div>
            </div>
         </footer>
      <?php wp_footer(); ?>   
</body>
</html>