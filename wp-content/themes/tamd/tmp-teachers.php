<?php
/**
 * Template Name: teachers
 */

get_header();
?>

<div class="page-full">
	<h1 class="page-full__container-title"><?= get_the_title(); ?></h1>

	<div class="page-full__container container">

		<?php if( have_rows('teacher-repeater') ): ?>
			<?php while( have_rows('teacher-repeater') ): the_row(); ?>

				<div class="page-full__item js-accordeon-item">
					<div class="page-full__item-container">
						<div class="page-full__avatar-container">
							<img src="<?php the_sub_field('teacher-avatar'); ?>" class="page-full__avatar"></img>
						</div>
						<div class="page-full__box">
							<div class="page-full__title"><?php the_sub_field('teacher-name'); ?></div>
							<div class="page-full__subtitle"><?php the_sub_field('teacher-post'); ?></div>

							<?php if( have_rows('teacher-additional-repeater') ): ?>
								<?php while( have_rows('teacher-additional-repeater') ): the_row(); ?>
									<div class="page-full__info"><?php the_sub_field('teacher-additional-text'); ?></div>
								<?php endwhile; ?>
							<?php endif; ?>

							<?php if( have_rows('teacher-mail-repeater') ): ?>
								<?php while( have_rows('teacher-mail-repeater') ): the_row(); ?>
									<a href="mailto:<?php the_sub_field('teacher-mail-item'); ?>" class="page-full__link"><?php the_sub_field('teacher-mail-item'); ?></a>
								<?php endwhile; ?>
							<?php endif; ?>

							<?php if( have_rows('teacher-social-repeater') ): ?>
								<div class="page-full__social-container">
									<?php while( have_rows('teacher-social-repeater') ): the_row(); ?>
										<a href="<?php the_sub_field('teacher-social-link'); ?>" class="page-full__social-item">
											<i class="page-full__social-icon <?php the_sub_field('teacher-social-icon'); ?>" aria-hidden="true"></i>
										</a>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>

							<?php if( have_rows('teacher-content-repeater') ): ?>
								<?php while( have_rows('teacher-content-repeater') ): the_row(); ?>
									<div class="page-full__action js-accordeon-action"></div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<?php if( have_rows('teacher-content-repeater') ): ?>
						<?php while( have_rows('teacher-content-repeater') ): the_row(); ?>
							<div class="page-full__item-content js-accordeon-action-trigger">
								<span><?php the_sub_field('teacher-content'); ?></span>
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
