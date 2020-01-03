<?php
/**
 * Template Name: famous people
 */

get_header();
?>

<div class="page-full">

	<h1 class="page-full__container-title"><?= get_the_title(); ?></h1>

	<div class="page-full__container page-full__container--timeline container">

		<div class="page-full__timeline"></div>

		<?php if( have_rows('famous-repeater') ): ?>
			<?php while( have_rows('famous-repeater') ): the_row(); ?>

				<div class="page-full__item js-accordeon-item">
					<div class="page-full__date page-full__date--start"><?php the_sub_field('famous-ruletime-begin'); ?></div>
					<div class="page-full__date page-full__date--end"><?php the_sub_field('famous-ruletime-end'); ?></div>
					<div class="page-full__item-container">
						<div class="page-full__avatar-container">
							<img src="<?php the_sub_field('famous-avatar'); ?>" class="page-full__avatar"></img>
						</div>
						<div class="page-full__box">
							<div class="page-full__title"><?php the_sub_field('famous-name'); ?></div>
							<div class="page-full__subtitle"><?php the_sub_field('famous-lifetime'); ?></div>


							<?php if( have_rows('famous-additional-repeater') ): ?>
								<?php while( have_rows('famous-additional-repeater') ): the_row(); ?>
									<div class="page-full__info"><?php the_sub_field('famous-additional-text'); ?></div>
								<?php endwhile; ?>
							<?php endif; ?>

							<?php if( have_rows('famous-content-repeater') ): ?>
								<?php while( have_rows('famous-content-repeater') ): the_row(); ?>
									<div class="page-full__action js-accordeon-action"></div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<?php if( have_rows('famous-content-repeater') ): ?>
						<?php while( have_rows('famous-content-repeater') ): the_row(); ?>
							<div class="page-full__item-content js-accordeon-action-trigger">
								<span><?php the_sub_field('famous-content'); ?></span>
								<div class="page-full__action js-accordeon-action"></div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

				</div>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
