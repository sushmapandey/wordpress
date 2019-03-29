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
			<h2><?php the_field('activity_title'); ?></h2>
			<p><?php the_field('activity_content'); ?></p>
		</div>

		<div class="rb_activity container">
		<?php if(have_rows('activity')) : while(have_rows('activity')) : the_row();?>
			<div class="rb_activitybox">
				<div class="activityimg">
					<img src="<?php the_sub_field('activity_image'); ?>" alt="Activities">
				</div>
				<div class="rb-activitycontent">
				<?php if(have_rows('activity_title')) : while(have_rows('activity_title')) : the_row();?>
					<div class="rb-activitytitle">
						<div class="activity-img">
							<img src="<?php the_sub_field('activity_icon'); ?>" alt="Activities Icon">
						</div>
						<?php the_sub_field('activity_title'); ?>
					</div>
					<?php endwhile; endif; ?>
					<p><?php the_sub_field('activity_description'); ?></p>
				</div>
			</div>

			<?php endwhile; endif; ?>



		</div>

	</section>

</main><!-- #primary -->

<?php
get_footer();
