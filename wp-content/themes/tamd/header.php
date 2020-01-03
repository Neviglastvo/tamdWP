<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tamd
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="site">

		<header class="header2 <?php if ( !is_front_page()){ ?> fixed <?php } ?>">
			<div class="header2__container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header2__logo">
					<div class="header2__logo-icon">
						<img src="<?php echo get_field('global-logo-icon', 'option'); ?>" alt="" class="header__logo-img ">
					</div>
					<div class="header2__logo-box">
						<div class="header2__logo-title"><?php echo get_bloginfo( 'name' ); ?></div>
						<!-- <div class="header2__logo-subtitle">Кафедра теоретичної <br /> та прикладної механіки</div> -->
					</div>
				</a>

				<div class="header2__nav js-nav-mobile">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
				</div>


				<div class="header2__info">

					<div class="header2__info-text"><?php echo get_field('global-contacts-title', 'option'); ?></div>

					<i class="header2__info-icon header2__info-icon--large fas fa-info-circle"></i>

					<div class="header2__info-container">

						<?php if( have_rows('global-contacts', 'option') ): ?>
							<?php while( have_rows('global-contacts', 'option') ): the_row(); ?>

								<a href="<?php the_sub_field('global-contacts-link'); ?>" class="header2__info-item">
									<div class="header2__info-title"><?php the_sub_field('global-contacts-title'); ?></div>
									<i class="header2__info-icon <?php the_sub_field('global-contacts-icon'); ?>"></i>
								</a>

							<?php endwhile; ?>
						<?php endif; ?>

					</div>

				</div>

				<div class="header2__lang">
					<?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher ('dropdown', 'flag'); ?>
				</div>

				<div class="hamburger"></div>
			</div>
		</header>

		<!-- #masthead -->


