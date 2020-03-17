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

			<div class="homepost">
				<div class="post-image">
				   <img><?php the_post_thumbnail( array() ); ?>
					<div class="post-title">
					<h3><?php the_title(); ?></h3>
					<button class="front-post">"READ ENTERY"</button>
					</div>		
		        </div>
		        
		    </div>
		<?php endforeach; ?>

		<?php wp_reset_postdata(); ?>
		
		
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>



