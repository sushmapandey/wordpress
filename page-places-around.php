<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rainbird
 */

get_header(); ?>

<main id="primary" class="site-main">

	<section class="rb-inner-page">
		<div class="rb_homestay">
			<h2>Places Around Us</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
				dolore </p>
		</div>

		<div class="inner-places rb-places-wraper">
		<?php $rainbirdPlaces = new WP_Query('category_name=places&posts_per_page=-1&orderby=date&order=ASC'); ?>
				<?php if ($rainbirdPlaces->have_posts() ) : while ($rainbirdPlaces->have_posts() ) : $rainbirdPlaces->the_post(); ?>
			<div class="rb-places-wraper">
				<a href="<?php echo home_url('places') ?>">
					<?php the_post_thumbnail(); ?>
					 
					<div class="place-info">
						<h3><?php the_title(); ?></h3>
						<!-- <h3>Bettada byraveshwara temple</h3> -->
						<p><?php the_excerpt(); ?></p>
						<!-- <p>22km away from Homestay</p> -->
					</div>
				</a>
			</div>
			<?php endwhile; endif;  wp_reset_postdata(); ?>

		</div>
	</section>

</main><!-- #primary -->

<?php
get_footer();
