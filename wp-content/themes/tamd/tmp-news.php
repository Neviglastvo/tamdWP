<?php
/**
 * Template Name: news
 */

get_header();
?>

<section class="section-grid">
	<div class="section-grid__container">

		<div class="section-grid__title section-grid__title--gradient"><?= get_the_title(); ?></div>

		<div class="section-grid__list ">

			<?php
				$query = new WP_Query( 'cat=4&nopaging=0&orderby=date&order=DESC&suppress_filters=true' );
				if( $query->have_posts() ){
					while( $query->have_posts() ){
						$query->the_post();
						?>

					<div class="section-grid__list-item">

						<a href="<?php the_permalink(); ?>" class="post-card post-card--events">
							<div class="post-card__top">
								<div class="post-card__date">
									<div class="post-card__day"><?php echo get_the_date('d'); ?></div>
									<div class="post-card__month"><?php echo get_the_date('M-y'); ?></div>
								</div>
							</div>
							<div class="post-card__bottom">
								<p href="<?php the_permalink(); ?>" class="post-card__title"><?php wp_trim_words( the_title(), $num_words = 3, $more = null ) ?></p>
								<div class="post-card__content"><?php wp_trim_words( the_excerpt(), $num_words = 3, $more = null ) ?></div>
							</div>
						</a>

					</div>

					<?php
					}
					wp_reset_postdata();
				}
				else
					echo 'Записей нет.';
				?>

		</div>


	</div>
</section>



<?php
get_footer();
