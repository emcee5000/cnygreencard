<?php get_header(); ?>
        
                <div id="container">    
                        <div id="content">
                                
                                <div id="post-0" class="post error404 not-found">
                                        <h1 class="entry-title"><?php _e( '<img width="237" height="70" alt="" src="/images/404.png" /><br />
', 'your-theme' ); ?></h1>
                                        <div class="entry-content">
                                                <p><?php _e( 'Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'your-theme' ); ?></p>
        <?php get_search_form(); ?>
                                        </div><!-- .entry-content -->
                                </div><!-- #post-0 -->

                        </div><!-- #content -->         
                </div><!-- #container -->
                
<?php get_sidebar(); ?> 
<?php get_footer(); ?>