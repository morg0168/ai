         <ul class="social">
                <?php 
                $fb = myprefix_get_theme_option( 'facebook_url' );
                $tw = myprefix_get_theme_option( 'twitter_url' );
                $in = myprefix_get_theme_option( 'linkedin_url' );
                ?>
                
                <?php   if (! empty(  $fb )){ ?>
                  <li>
                  <a href="<?php echo $fb ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <?php } ?>
                 <?php   if (! empty(  $tw )){ ?>
                    <li>
                  <a href="<?php echo $tw ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <?php } ?>
                 <?php   if (! empty(  $in )){ ?>
                    <li>
                  <a href="<?php echo $in?>">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <?php } ?>
                
              
              </ul>