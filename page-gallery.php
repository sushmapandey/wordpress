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
			<h2><?php the_field('gallery_title')  ?></h2>
			<p><?php the_field('gallery_description') ?></p>

		</div>
		<div class="inner-places ">

		<?php $gallery = new WP_Query('post_type=gallery_type&posts_per_page=-1&orderby=date&order=DESC'); ?>
			<?php if ($gallery->have_posts() ) : while ($gallery->have_posts() ) : $gallery->the_post(); ?>

			<img src="<?php the_post_thumbnail_url(); ?>" alt="rainbird" data-darkbox="<?php the_post_thumbnail_url(); ?>" data-darkbox-group="one" />

		<?php endwhile; endif;  wp_reset_postdata(); ?>
		
		</div>
		</section>

	</main><!-- #primary -->

<?php
get_footer();
