 <?php
 /**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

 ?>
	
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
			<?php dynamic_sidebar( 'footer' ); ?>		             
			<img src="<?php echo get_template_directory_uri() . '/build/Images./inhabitent-logo-text.svg' ?>"class="text-logo">
			<a href="<?php echo esc_url( 'http.inhabitent.com' ); ?>"><?php printf( esc_html( 'COPYRIGHT %s' ), '© 2020 INHABITENT' ); ?></a>
			</div><!-- .site-info -->
			</footer><!-- #colophon -->
	
		
	<?php wp_footer(); ?>
 	
</body>
</html>