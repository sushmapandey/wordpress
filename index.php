<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rainbird
 */

get_header(); ?>

<main id="primary" class="site-main">


	<section class="rb-blog">
		<div class="rb_homestay">
			<h2>Read Our Latest Blogs</h2>
			<!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
				dolore magna aliquyam </p> -->
		</div>


		<section class="pb-blog blogs">
			<div class="container">
			
				<div class="pb-blog-row">
				<?php $rainbirdBlogs = new WP_Query('category_name=blog&posts_per_page=-1&orderby=date&order=DESC'); ?>
        <?php if ($rainbirdBlogs->have_posts() ) : while ($rainbirdBlogs->have_posts() ) : $rainbirdBlogs->the_post(); ?>
				<div class="pb-blog-col">
					<a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
						<div class="blog-img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="blog-info">
							<span><?php echo get_the_date('M j, Y') ?></span>
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
						</div><!-- /.blog-info -->
					</a>
				</div><!-- /.pb-blog-col -->
				<?php endwhile; endif;  wp_reset_postdata(); ?>
				</div><!-- /.pb-blog-row -->
			</div><!-- /.container -->
		</section><!-- /.pb-blog -->

	</section>
</main><!-- #primary -->

<?php
get_footer();
