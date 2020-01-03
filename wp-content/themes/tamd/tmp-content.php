<?php
/**
 * Template Name: content
 */

get_header();
?>

<main id="main" class="site-main">


	<section class="hero hero--small">
		<?php
		$pagename = get_query_var('pagename');
		if ( !$pagename && $id > 0 ) {
	    	// If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
			$post = $wp_query->get_queried_object();
			$pagename = $post->post_name;
		}
		?>

		<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

		<?php endif; ?>


		<div class="hero__bg-container">
			<img src="<?= $image[0]; ?>" alt="" class="hero__bg" />
		</div>

		<div class="hero__container">
			<h1 class="hero__title"><?= get_the_title(); ?></h1>
		</div>

	</section>

	<section class="user-content js-nav-trigger">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="user-content__container">
				<?= the_content(); ?>
			</div>
		<?php endwhile;
		else: ?>
			<div class="user-content__container">
				<p class="user-content__sorry">Sorry, there are no content there, it will be, sometime. Its not your fault, it's us. We are not dumb we are a little bit lazy</p>
				<p class="user-content__sorry-smile">¯\_(ツ)_/¯</p>
			</div>
		<?php endif; ?>

	</section>



</main><!-- #main -->

<?php
get_footer();
