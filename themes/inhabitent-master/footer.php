 <?php
 /**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

 ?>


			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'COPYRIGHT %s' ), '© 2019 INHABITENT' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
		

	<?php wp_footer(); ?>
 	<?php get_sidebar();?>
</body>
</html>