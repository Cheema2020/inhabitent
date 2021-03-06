<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">

				<div class="nav-box">

				    <div class="nav-menue">
						<a href="<?php echo get_home_url(); ?>" class="logo"> 
							<img class="nav-logo-white" src="<?php echo get_template_directory_uri(); ?>/build/Images/inhabitent-logo-tent-white.svg" />
							<img class="nav-logo" src="<?php echo get_template_directory_uri(); ?>/build/Images/inhabitent-logo-tent.svg" />

							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						</a>
					        
				
                    </div>
					    <!-- <p class="site-description"><?php bloginfo( 'description' ); ?> -->
				</div><!-- .site-branding -->


				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			
			
		    <?php if ( is_front_page() ) {?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="site-banner">
						<?php the_post_thumbnail(); ?>
						 <div class="banner-content">
		 				 <img src="wp-content/themes/inhabitent-master/build/Images/inhabitent-logo-full.svg" alt="site-logo"/>
						 </div>
					</div>	
				<?php endif; ?>

			<?php } elseif ( is_page() ) { ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="about-banner">
					  <?php the_post_thumbnail(); ?>
					  <div class = "banner-content">
					     <h2><?php the_title(); ?></h2>
					     </div>
					</div>
				<?php endif; ?>
			
			<?php } else { ?>
			<!-- display no image -->
			<?php } ?> 
		    
			 
			
		<div id="content" class="site-content">


		