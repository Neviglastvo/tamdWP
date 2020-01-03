<?php
/**
 * Template Name: home
 */

get_header();
?>

<main id="main" class="site-main">

	<section class="hero">
		<div class="hero__container js-main-hero-slider">

			<?php if( have_rows('home-hero') ): ?>
				<?php while( have_rows('home-hero') ): the_row(); ?>

					<div class="hero__item">

						<div class="hero__bg-container">
							<img src="<?php the_sub_field('bg'); ?>" alt="" class="hero__bg" />
						</div>

						<div class="hero__box">
							<h1 class="hero__title"><?php the_sub_field('title'); ?></h1>
							<h2 class="hero__subtitle"><?php the_sub_field('subtitle'); ?></h2>

							<?php if( have_rows('action') ): ?>
								<?php while( have_rows('action') ): the_row(); ?>

									<a href="<?php the_sub_field('link'); ?>" class="hero__action"><?php the_sub_field('link-title'); ?></a>

								<?php endwhile; ?>
							<?php endif; ?>
						</div>

						<!-- <div class="hero-grid js-hero-slider">

							<?php  //if( have_rows('repeater') ): ?>
								<?php  //while( have_rows('repeater') ): the_row(); ?>

									<div class="hero-grid__item js-same-height">
										<div class="hero-grid__title "><?php // the_sub_field('repeater-title'); ?></div>
										<div class="hero-grid__text "><?php // the_sub_field('repeater-subtitle'); ?></div>
									</div>

								<?php  //endwhile; ?>
							<?php  //endif; ?>

						</div> -->

					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

	<section class="section-grid js-nav-trigger">
		<div class="section-grid__container">

			<div class="section-grid__title"><?php the_field('home-what-is-mechanic__title'); ?></div>

			<div class="section-grid__list section-grid__list--slider section-grid__list--3-items js-slider-what-is-mechanics">

				<?php if( have_rows('home-what-is-mechanic__repeater') ): ?>
					<?php while( have_rows('home-what-is-mechanic__repeater') ): the_row(); ?>
						<div class="section-grid__list-item">

							<div class="card-small">
								<div class="card-small__img-container">
									<img class="card-small__img" src="<?php the_sub_field('home-what-is-mechanic__repeater-img'); ?>">
								</div>
								<div class="card-small__item-title"><?php the_sub_field('home-what-is-mechanic__repeater-title'); ?></div>
							</div>

						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>

		</div>
	</section>


	<section class="section-grid section-grid--bg-dark">
		<div class="section-grid__container">

			<div class="section-grid__title section-grid__title--white"><?php the_field('home-students-learn__title'); ?></div>

			<div class="section-grid__list section-grid__list--slider section-grid__list--4-items js-slider-student-learn">

				<?php if( have_rows('home-students-learn__repeater') ): ?>
					<?php while( have_rows('home-students-learn__repeater') ): the_row(); ?>

						<div class="section-grid__list-item">

							<div class="card-simple">
								<div class="card-simple__img-container">
									<img class="card-simple__img" src="<?php the_sub_field('home-students-learn__repeater-img'); ?>">
								</div>
								<div class="card-simple__title"><?php the_sub_field('home-students-learn__repeater-title'); ?></div>
							</div>

						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
			<div class="slider-control js-slider-control">
				<div class="slider-control__container">
					<div class="slider-control__item slider-control__item--prev js-slider-control-prev">
						<div class="slider-control__icon"></div>
					</div>
					<div class="slider-control__item slider-control__item--next js-slider-control-next">
						<div class="slider-control__icon"></div>
					</div>
				</div>
			</div>

			<div class="section-grid__action">
				<a href="<?php the_field('home-students-learn__action-link'); ?>" class="btn"><?php the_field('home-students-learn__action-text'); ?></a>
			</div>

		</div>
	</section>

	<div class="section-horizontal-slider section-horizontal-slider--events">
		<div class="section-horizontal-slider__container js-events-slider">
			<ul class="section-horizontal-slider__slider">

				<li class="section-horizontal-slider__item">
					<div class="section-horizontal-slider__item-title"><?php the_field('home-events-title'); ?></div>
					<div class="section-horizontal-slider__item-text"><?php the_field('home-events-subtitle'); ?></div>
					<a href="<?php echo esc_url( home_url( '/about-us/events/' ) ); ?>" class="section-horizontal-slider__item-link"><?php the_field('home-events-link-title'); ?></a>
				</li>

				<?php
				$query = new WP_Query( 'cat=5&posts_per_page=6&orderby=date&order=ASC&suppress_filters=true' );
				if( $query->have_posts() ){
					while( $query->have_posts() ){
						$query->the_post();
						?>

						<li class="section-horizontal-slider__item">
							<div class="post-card post-card--events">
								<div class="post-card__top">
									<div class="post-card__date">
										<div class="post-card__day"><?php echo get_the_date('d'); ?></div>
										<div class="post-card__month"><?php echo get_the_date('M-y'); ?></div>
									</div>
									<a href="<?php the_permalink(); ?>" class="post-card__link">
										<span>See inside</span>
										<i class="fas fa-arrow-alt-circle-right"></i>
									</a>
								</div>
								<div class="post-card__bottom">
									<a href="<?php the_permalink(); ?>" class="post-card__title"><?php wp_trim_words( the_title(), $num_words = 3, $more = null ) ?></a>
									<div class="post-card__content"><?php wp_trim_words( the_excerpt(), $num_words = 3, $more = null ) ?></div>
								</div>
							</div>
						</li>

						<?php
					}
					wp_reset_postdata();
				}
				else
					?>

				<?php
				?>

			</ul>
		</div>
		<div class="scrollbar">
			<div class="handle">
				<div class="mousearea"></div>
			</div>
		</div>
	</div>

	<div class="section-horizontal-slider section-horizontal-slider--news">
		<div class="section-horizontal-slider__container js-news-slider">

			<ul class="section-horizontal-slider__slider section-horizontal-slider__slider--news">

				<li class="section-horizontal-slider__item section-horizontal-slider__item--news">
					<div class="section-horizontal-slider__item-title"><?php the_field('home-news-title'); ?></div>
					<div class="section-horizontal-slider__item-text"><?php the_field('home-news-subtitle'); ?></div>
					<a href="<?php echo esc_url( home_url( '/about-us/news/' ) ); ?>" class="section-horizontal-slider__item-link"><?php the_field('home-news-link-title'); ?></a>
				</li>

				<?php
				$query = new WP_Query( 'cat=4&posts_per_page=6&orderby=date&order=DESC&suppress_filters=true' );
				if( $query->have_posts() ){
					while( $query->have_posts() ){
						$query->the_post();
						?>

						<li class="section-horizontal-slider__item">
							<div class="post-card post-card--news">
								<div class="post-card__top">
									<div class="post-card__date">
										<div class="post-card__day"><?php echo get_the_date('d'); ?></div>
										<div class="post-card__month"><?php echo get_the_date('M-y'); ?></div>
									</div>
									<a href="<?php the_permalink(); ?>" class="post-card__link">
										<span>See inside</span>
										<i class="fas fa-arrow-alt-circle-right"></i>
									</a>
								</div>
								<div class="post-card__bottom">
									<a href="<?php the_permalink(); ?>" class="post-card__title"><?= mb_strimwidth(the_title(), 0, 1, "..."); ?></a>
									<div class="post-card__content"><?= mb_strimwidth(the_excerpt(), 0, 1, "..."); ?></div>
								</div>
							</div>
						</li>

						<?php
					}
					wp_reset_postdata();
				}
				else
					?>

				<?php
				?>

			</ul>
		</div>
		<div class="scrollbar">
			<div class="handle">
				<div class="mousearea"></div>
			</div>
		</div>
	</div>


	<section class="section-grid section-grid--bg-dark">
		<div class="section-grid__container">

			<div class="section-grid__title section-grid__title--white"><?php the_field('enrollees-block-title'); ?></div>

			<div class="section-grid__list section-grid__list--slider section-grid__list--4-items js-slider-enrollees">

				<?php if( have_rows('enrollees-repeater') ): ?>
					<?php while( have_rows('enrollees-repeater') ): the_row(); ?>

						<div class="section-grid__list-item">

							<div class="card-person">
								<div class="card-person__img-container">
									<img src="<?php the_sub_field('enrollees-avatar'); ?>" alt="" class="card-person__img">
								</div>
								<div class="card-person__title"><?php the_sub_field('enrollees-name'); ?></div>
								<div class="card-person__subtitle"><?php the_sub_field('enrollees-description'); ?></div>
								<div class="card-person__box">
									<div class="card-person__year"><?php the_sub_field('enrollees-ruletime-begin'); ?></div>
									<span> - </span>
									<div class="card-person__year"><?php the_sub_field('enrollees-ruletime-end'); ?></div>
								</div>
							</div>

						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
			<div class="slider-control js-slider-control">
				<div class="slider-control__container">
					<div class="slider-control__item slider-control__item--prev js-slider-control-prev">
						<div class="slider-control__icon"></div>
					</div>
					<div class="slider-control__item slider-control__item--next js-slider-control-next">
						<div class="slider-control__icon"></div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="section-grid section-grid--bg-dark">
		<div class="section-grid__container">

			<div class="section-grid__title section-grid__title--white"><?php the_field('famous-block-title'); ?></div>

			<div class="section-grid__list section-grid__list--slider section-grid__list--4-items js-slider-famous">

				<?php if( have_rows('famous-repeater') ): ?>
					<?php while( have_rows('famous-repeater') ): the_row(); ?>

						<div class="section-grid__list-item">

							<div class="card-person">
								<div class="card-person__img-container">
									<img src="<?php the_sub_field('famous-avatar'); ?>" alt="" class="card-person__img">
								</div>
								<div class="card-person__title"><?php the_sub_field('famous-name'); ?></div>
								<div class="card-person__subtitle"><?php the_sub_field('famous-description'); ?></div>
								<div class="card-person__box">
									<div class="card-person__year"><?php the_sub_field('famous-ruletime-begin'); ?></div>
									<span> - </span>
									<div class="card-person__year"><?php the_sub_field('famous-ruletime-end'); ?></div>
								</div>
							</div>

						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
			<div class="slider-control js-slider-control">
				<div class="slider-control__container">
					<div class="slider-control__item slider-control__item--prev js-slider-control-prev">
						<div class="slider-control__icon"></div>
					</div>
					<div class="slider-control__item slider-control__item--next js-slider-control-next">
						<div class="slider-control__icon"></div>
					</div>
				</div>
			</div>

			<div class="section-grid__action">
				<a href="<?php the_field('famous-block__action-link'); ?>" class="btn"><?php the_field('famous-block__action-text'); ?></a>
			</div>

		</div>
	</section>

	<section class="section-grid">
		<div class="section-grid__container">

			<div class="section-grid__title"><?php the_field('teacher-block-title'); ?></div>

			<div class="section-grid__list section-grid__list--slider js-slider-lectures">

				<?php if( have_rows('teacher-repeater') ): ?>
					<?php while( have_rows('teacher-repeater') ): the_row(); ?>

						<div class="section-grid__list-item">

							<div class="section-lectures__item">
								<div class="section-lectures__item-box">


									<div class="section-lectures__img-container">
										<img src="<?php the_sub_field('teacher-avatar'); ?>" alt="" class="section-lectures__img">
									</div>

									<div class="section-lectures__title"><?php the_sub_field('teacher-name'); ?></div>
									<div class="section-lectures__subtitle"><?php the_sub_field('teacher-post'); ?></div>

									<div class="section-lectures__box">
										<div class="section-lectures__social">

											<?php if( have_rows('teacher-mail-repeater') ): ?>
												<?php while( have_rows('teacher-mail-repeater') ): the_row(); ?>

													<a class="section-lectures__social-item" href="mailto:<?php the_sub_field('teacher-mail-item'); ?>" class="section-lectures__social-link"><i class="lectors__social-icon fas fa-at" aria-hidden="true"></i></a>

												<?php endwhile; ?>
											<?php endif; ?>

											<?php if( have_rows('teacher-social-repeater') ): ?>
												<?php while( have_rows('teacher-social-repeater') ): the_row(); ?>

													<a class="section-lectures__social-item" href="<?php the_sub_field('teacher-social-link'); ?>" class="section-lectures__social-link"><i class="lectors__social-icon <?php the_sub_field('teacher-social-icon'); ?>" aria-hidden="true"></i></a>

												<?php endwhile; ?>
											<?php endif; ?>

										</div>
									</div>

								</div>
							</div>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
			<div class="slider-control js-slider-control">
				<div class="slider-control__container">
					<div class="slider-control__item slider-control__item--prev js-slider-control-prev">
						<div class="slider-control__icon"></div>
					</div>
					<div class="slider-control__item slider-control__item--next js-slider-control-next">
						<div class="slider-control__icon"></div>
					</div>
				</div>
			</div>

			<div class="section-grid__action">
				<a href="<?php the_field('teacher-block__action-link'); ?>" class="btn"><?php the_field('teacher-block__action-text'); ?></a>
			</div>

		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
