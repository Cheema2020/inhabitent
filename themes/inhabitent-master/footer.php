 <?php
 /**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

 ?>
	
		<footer id="colophon" class="site-footer" role="contentinfo">
			
 			<section class="footer-box1">
			  <?php dynamic_sidebar( 'footer' ); ?>
			 
			  <div class="text-logo">
			       <img src="<?php echo get_template_directory_uri() . "/build/Images/inhabitent-logo-text.svg" ?>" id="">	
			  </div>
            </section>

			<div class="site-info">	
			 <a href="<?php echo esc_url( 'http.inhabitent.com' ); ?>"><?php printf( esc_html( 'COPYRIGHT %s' ), '© 2020 INHABITENT' ); ?>
			</div><!-- .site-info -->
				
		</footer><!-- #colophon -->
	
		
	<?php wp_footer(); ?>
 	
</body>
</html>

