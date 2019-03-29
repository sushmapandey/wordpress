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
			<h2><?php the_field('contact_title') ?></h2>
			<p><?php the_field('contact_description') ?></p>
		</div>
		<div class="rb-contact-page">
			<div class="get-in-touch">
				<ul>
					<li><span>Address: </span> <?php the_field('address') ?></li>
					<li><span>Mail: </span><a href="<?php the_field('mail') ?> "><?php the_field('mail') ?></a></li>
					<li><span>Call: </span> <a href="tel:<?php the_field('call') ?>"> <?php the_field('call') ?></a></li>
				</ul>
			</div>
			<div class="contact-form">
				<!-- <form action="">
					<div>
						<input type="text" class="name" placeholder="First Name">
					</div>
					<div>
						<input type="text" class="name" placeholder="Last Name">
					</div>
					<div>
						<input type="email" class="email" placeholder="Email">
					</div>
					<div>
						<input type="text" class="phone" placeholder="Mobile">
					</div>
					<div class="message">
						<textarea name="message"  placeholder="Message"></textarea>
					</div>
					<div>
					<input type="submit" value="Submit" class="btn btn-outline plr">
					</div>
				</form> -->
				<?php 
					$its=new WP_Query('pagename=contact-form');
					while($its->have_posts()):
						$its->the_post();?>
						<?php the_content(); ?>
						<?php
					endwhile;
					wp_reset_postdata();
          ?> 

			</div>
		</div>



		<div class="rb_homestay">
			<h2>Terms and Conditions</h2>
		</div>
		<div class="rb-tc">
		<?php if(have_rows('terms_and_conditions')) : while(have_rows('terms_and_conditions')) : the_row();?>
			<div class="rb-img">
				<img src="<?php the_sub_field('image'); ?>" alt="rainbird" >
			</div>
			
			<ul>
			<?php if(have_rows('details')) : while(have_rows('details')) : the_row();?>
				<li><?php the_sub_field('conditions'); ?></li>				
				<?php endwhile; endif; ?>
			</ul>
			<?php endwhile; endif; ?>
		</div>

		<section class="rb-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d248822.26705311!2d75.5776347!3d12.981577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4d7ee55555555%3A0xa1e22f928293828a!2sRainbird+Homestay!5e0!3m2!1sen!2sin!4v1549365363612" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
	</section>

</main><!-- #primary -->

<?php
get_footer();
