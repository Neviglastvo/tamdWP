<?php
/**
 * Template Name: schools
 */

get_header();
?>

<main id="main" class="site-main">

	<div class="page-full">

		<h1 class="page-full__container-title"><?= get_the_title(); ?></h1>

		<div class="page-full__container container">

			<?php if( have_rows('home-students-learn__repeater') ): ?>
				<?php while( have_rows('home-students-learn__repeater') ): the_row(); ?>

					<div class="page-full__item js-accordeon-item">
						<div class="page-full__item-container">
							<div class="page-full__avatar-container page-full__avatar-container--square">
								<img src="<?php the_sub_field('home-students-learn__repeater-img'); ?>" class="page-full__avatar"></img>
							</div>
							<div class="page-full__box">
								<div class="page-full__title"><?php the_sub_field('home-students-learn__repeater-title'); ?></div>
								<div class="page-full__action js-accordeon-action"></div>

							</div>
						</div>

						<div class="page-full__item-content js-accordeon-action-trigger">
							<span><?php the_sub_field('home-students-learn__repeater-description'); ?></span>
							<div class="page-full__action js-accordeon-action"></div>
						</div>

					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
