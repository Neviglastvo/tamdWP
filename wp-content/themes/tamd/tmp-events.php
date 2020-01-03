<?php
/**
 * Template Name: events
 */

get_header();
?>





<section class="section-grid">
	<div class="section-grid__container">

		<div class="section-grid__title section-grid__title--gradient"><?= get_the_title(); ?></div>

		<div class="section-grid__list ">

			<?php
				// $query = new WP_Query( 'cat=20&nopaging=0' );
			$query = new WP_Query(array(
				'cat' => '5',
					// 'posts_per_page' => '1',
					// 'paged' => get_query_var('paged') ?: 1
				'paged' => '0',
				'orderby' => 'date',
				'order' => 'ASC',
				'suppress_filters' => 'true'
			));
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
					// posts_nav_link();
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
