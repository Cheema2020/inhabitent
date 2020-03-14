<?php
/**
 * The template for displaying front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">	
		
		

		<?php  ?>

			<h1>SHOP STUFF</h1>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			
			
			<?php $args = array(
				'numberposts' => 3 
			); ?>

			<?php $homepage_posts = get_posts($args); ?>

			<?php foreach($homepage_posts as $post) : setup_postdata($post);?>

			<artical class="homepost">
			
				<img><?php the_post_thumbnail( array(350, 250) ); ?>
				<h3><?php the_title(); ?></h3>
			</artical>
		<?php endforeach; ?>

		<?php wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
