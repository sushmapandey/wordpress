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
	<section class="rb_innerpage">
		<div class="rb_homestay">
			<h2>Malnad special food</h2>
			<p>We serve delicious malnad food made tasty with the warmth of perfect hospitality awaits you to relish. Checkout
				our Menu</p>
		</div>
		<img src="<?php echo get_template_directory_uri();?>/img/spices-png.png" alt="Special food" class="special-food">

		<div class="innerpage_section container">

			<div class="rb_left">
			<?php $num = 0;?>
				<?php $rainbirdBlogs = new WP_Query('category_name=food&posts_per_page=-1&orderby=date&order=ASC'); ?>
				<?php if ($rainbirdBlogs->have_posts() ) : while ($rainbirdBlogs->have_posts() ) : $rainbirdBlogs->the_post(); ?>
				<div class="navigation-img-wrapper">
					<div class="navigator" data-item="<?php echo $num++ ?>">
						<h2>
							<?php the_title(); ?>
						</h2>
					</div>
				</div>
				<?php endwhile; endif;  wp_reset_postdata(); ?>

			</div>

			<span class="line"></span>
			<div id="my-carousel" class="rb_right owl-carousel owl-theme">

				<?php $rainbirdBlogs = new WP_Query('category_name=food&posts_per_page=-1&orderby=date&order=ASC'); ?>
				<?php if ($rainbirdBlogs->have_posts() ) : while ($rainbirdBlogs->have_posts() ) : $rainbirdBlogs->the_post(); ?>
				<div class="item">
					<div class="rb-img">
						<?php the_post_thumbnail(); ?>
					</div>
					<h3>
						<?php the_title(); ?>
					</h3>
					<p>
						<?php the_content(); ?>
					</p>
				</div>
				<?php endwhile; endif;  wp_reset_postdata(); ?>
			</div><!-- /.rb_right -->

		</div>
	</section>

</main><!-- #primary -->

<?php
get_footer();
