<?php
/**
 * Template Name: contacts
 */

get_header();
?>

<div class="page-contacts">
	<div class="page-contacts__container">
		<section class="map" id="google-map">
			<!-- <div class="map__container" id="google-container"></div> -->
			<!-- <div class="map__zoom-in" id="zoom-in"></div> -->
			<!-- <div class="map__zoom-out" id="zoom-out"></div> -->
			<?php

			$location = get_field('contacts-map');

			if( !empty($location) ):
				?>
				<div class="map__container acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			<?php endif; ?>
		</section>


		<div class="page-contacts__box">
			<?php if( have_rows('contacts-repeater') ): ?>
				<?php while( have_rows('contacts-repeater') ): the_row(); ?>

					<a href="<?php the_sub_field('contacts-repeater-link'); ?>" class="header2__info-item">
						<div class="header2__info-title"><?php the_sub_field(''); ?></div>
						<i class="header2__info-icon <?php the_sub_field('contacts-repeater-icon'); ?>"></i>
					</a>

					<div class="page-contacts__item">
						<div class="page-contacts__title"><i class="<?php the_sub_field('contacts-icon'); ?>"></i><?php the_sub_field('contacts-title'); ?></div>
						<div class="page-contacts__link-container">
							<?php if( have_rows('contacts-item-repeater') ): ?>
								<?php while( have_rows('contacts-item-repeater') ): the_row(); ?>
									<a href="<?php the_sub_field('contacts-item-link'); ?>" class="page-contacts__link"><?php the_sub_field('contacts-item-text'); ?></a>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR_bmVgb5uGDvT2J-uYto6qbB1DBPLtYg"></script>
<script type="text/javascript">
	(function($) {


		function new_map( $el ) {

			var $markers = $el.find('.marker');

			var args = {
				zoom		: 16,
				center		: new google.maps.LatLng(0, 0),
				mapTypeId	: google.maps.MapTypeId.ROADMAP
			};

			var map = new google.maps.Map( $el[0], args);

			map.markers = [];

			$markers.each(function(){

				add_marker( $(this), map );

			});

			center_map( map );

			return map;

		}

		function add_marker( $marker, map ) {

			var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

			var marker = new google.maps.Marker({
				position	: latlng,
				map			: map
			});

			map.markers.push( marker );

			if( $marker.html() )
			{
				var infowindow = new google.maps.InfoWindow({
					content		: $marker.html()
				});

				google.maps.event.addListener(marker, 'click', function() {

					infowindow.open( map, marker );

				});
			}

		}

		function center_map( map ) {

			var bounds = new google.maps.LatLngBounds();

			$.each( map.markers, function( i, marker ){

				var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

				bounds.extend( latlng );

			});

			if( map.markers.length == 1 )
			{
				map.setCenter( bounds.getCenter() );
				map.setZoom( 16 );
			}
			else
			{
				map.fitBounds( bounds );
			}

		}


		var map = null;

		$(document).ready(function(){

			$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

		});

	})(jQuery);
</script>
<?php
get_footer();
