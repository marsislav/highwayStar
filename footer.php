
      <footer>
      <div class="container">
                 <div class="footerSocial">
              <ul>
                <?php 
                  if (get_theme_mod('hs_facebook_handle')){?>
                    <li><a href="https://facebook.com/<?php echo get_theme_mod('hs_facebook_handle');?>"><i class="fab fa-facebook-f"></i></a></li>
                  <?php 
                  }
                ?>
              </ul>
              <div class="copyright">
              <?php echo get_theme_mod( 'hs_footer_copyright_text'); ?>  
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
       
     
        </div>
         </footer>
      <?php wp_footer(); ?>
      </body>
      </html>
      
</body>
</html>