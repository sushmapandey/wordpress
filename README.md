# wordpress

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

  <section class="satic-areas">
    <div class="satic-area">
      <div class="dynamic-area1"></div>
      <div class="dynamic-area2"></div>
      <div class="rb-homestay-content">
        <h1>
          <?php the_field('homestay_highlight_text'); ?>
        </h1>
        <img src="<?php the_field('banner'); ?>" alt="rainbird-homestay">
      </div>
    </div>
  </section>
  <section class="rb_banner">
    <div class="rb_homestay">
      <h2>
        <?php the_field('homestay_title'); ?>
      </h2>
      <p>
        <?php the_field('homestay_title_content'); ?>
      </p>

    </div>
    <div class="rb-icons container">
      <?php if(have_rows('homestay_icons')) : while(have_rows('homestay_icons')) : the_row();?>
      <div class="icons">
        <img src="<?php the_sub_field('icon_image'); ?>" alt="icons">
        <h3>
          <?php the_sub_field('icon_text'); ?>
        </h3>
      </div>
      <?php endwhile; endif; ?>

    </div>

    <?php if(have_rows('book_now')) : while(have_rows('book_now')) : the_row();?>
    <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-outline">
      <?php the_sub_field('button_text'); ?></a>
    <?php endwhile; endif; ?>

  </section>

  <section class="rb-paradise">

    <div class="owl-carousel owl-theme">
      <?php if(have_rows('owl_carousel')) : while(have_rows('owl_carousel')) : the_row();?>
      <div class="item">
        <img src="<?php the_sub_field('carousel_image'); ?>" alt="rainbir d homestay">
        <p>
          <?php the_sub_field('carousel_text'); ?>
        </p>
      </div>
      <?php endwhile; endif; ?>
    </div>

  </section>

  <section class="rb-activities">
    <div class="rb_homestay">
      <h2>
        <?php the_field('activity_title'); ?>
      </h2>
      <p>
        <?php the_field('activity_content'); ?>
      </p>
    </div>
    <div class="rb-icons container">
      <?php if(have_rows('activity_icons')) : while(have_rows('activity_icons')) : the_row();?>
      <div class="icons">
        <img src="<?php the_sub_field('activity_icons'); ?>" alt="icons">
        <h3>
          <?php the_sub_field('activity_text'); ?>
        </h3>
      </div>
      <?php endwhile; endif; ?>

    </div>

    <img src="<?php the_field('activity_image'); ?>" alt="rainbird-homestay" class="activity-img">
  </section>

  <section class="rb-rooms container">
    <div class="rb_homestay">
      <h2><?php the_field('our_rooms'); ?></h2>
      <p><?php the_field('room_content'); ?></p>
    </div>
    <div class="rb-room-details">
    <?php if(have_rows('rooms')) : while(have_rows('rooms')) : the_row();?>

      <div class="rb-room">
        <div class="room">
          <img src="<?php the_sub_field('room_image'); ?>" alt="Room">
          <div class="room-details">
            <div class="room-title">
              <p><?php the_sub_field('room_title'); ?></p>
              <p>
              <?php if(have_rows('book_now')) : while(have_rows('book_now')) : the_row();?>
                <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-outline">
                  <?php the_sub_field('button_text'); ?></a>
                <?php endwhile; endif; ?>
              </p>
            </div>
            <ul>
              <li><?php the_sub_field('capacity'); ?></li>
              <li><?php the_sub_field('room_size'); ?></li>
              <li><?php the_sub_field('bathroom'); ?></li>
              <li><?php the_sub_field('air_conditioning'); ?></li>
            </ul>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>

    </div>
  </section>

  <section class="rb-special-food">
    <div class="rb_homestay">
      <h2>Malnad special food</h2>
      <p>We serve delicious malnad food made tasty with the warmth of perfect hospitality awaits you to relish. Checkout
        our Menu</p>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/img/spices-png.png" alt="Special food" class="special-food">

    <div class="rb-icons container">
      <?php $rainbirdBlogs = new WP_Query('category_name=food&posts_per_page=-1&orderby=date&order=ASC'); ?>
      <?php if ($rainbirdBlogs->have_posts() ) : while ($rainbirdBlogs->have_posts() ) : $rainbirdBlogs->the_post(); ?>

      <div class="icons">

        <a href="<?php echo home_url('food'); ?>" title="<?php the_title_attribute(); ?>">
          <div class="rb-img">
            <?php the_post_thumbnail(); ?>
          </div>
          <h3>
            <?php the_title(); ?>
          </h3>
        </a>
      </div>


      <?php endwhile; endif;  wp_reset_postdata(); ?>
    </div>
  </section>

  <section class="rb-gallery container">
    <div class="rb_homestay">
      <h2>Gallery</h2>
      <p>Embark on a visual journey of Rainbird Homestay in Sakleshpur</p>
    </div>
    <div class="filters">
      <ul>
        <li class="active" data-filter="*">All</li>
        <li data-filter=".garden">Garden</li>
        <li data-filter=".indoor">Indoor</li>
        <li data-filter=".outdoor">Outdoor</li>
      </ul>
      <div class="rb-item grid ">
        <div class="all garden">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery1.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery1.png"
           alt="Gallery" data-darkbox-group="one">
        </div>
        <div class="all garden outdoor">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery2.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery2.png"
           alt="Gallery" data-darkbox-group="one">
        </div>
        <div class="all indoor">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery3.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery3.png"
           alt="Gallery" data-darkbox-group="one">
        </div>
        <div class="all garden outdoor">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery4.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery4.png"
           alt="Gallery" data-darkbox-group="one">
        </div>
        <div class="all indoor">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery5.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery5.png"
           alt="Gallery" data-darkbox-group="one">
        </div>
        <div class="all garden outdoor">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery6.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery6.png"
           alt="Gallery" data-darkbox-group="one">
        </div>
        <div class="all garden outdoor">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery7.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery7.png"
           alt="Gallery" data-darkbox-group="one">
        </div>
        <div class="all ">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery8.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery8.png"
           alt="Gallery" data-darkbox-group="one">
        </div>
        <div class="all indoor">
          <img src="<?php echo get_template_directory_uri();?>/img/gallery9.png" data-darkbox="<?php echo get_template_directory_uri();?>/img/gallery9.png"
           alt="Gallery" data-darkbox-group="one">
        </div>

      </div>

    </div>

  </section>

  <section class="rb-testimonials">
    <div class="rb_homestay">
      <h2>Customer Reviews</h2>
      <p>Listen to what our customer says</p>
    </div>
    <div class="owl-carousel owl-theme">
      <?php if(have_rows('customer_reviews')) : while(have_rows('customer_reviews')) : the_row();?>
      <div class="testimonial item">
        <div class="rb-img">
          <img src="<?php the_sub_field('customer_image'); ?>" alt="Testimonials">
        </div>
        <h3><?php the_sub_field('customer_name'); ?></h3>
        <p><?php the_sub_field('details'); ?></p>
      </div>
      <?php endwhile; endif; ?>
      
    </div>
  </section>

  <section class="rb-blog">
    <div class="rb_homestay">
      <h2>Our Blogs</h2>
    </div>
    <section class="pb-blog blogs">
      <div class="container">
        <div class="pb-blog-row">

          <?php $rainbirdBlogs = new WP_Query('page_name=blog&posts_per_page=3&orderby=date&order=ASC'); ?>
          <?php if ($rainbirdBlogs->have_posts() ) : while ($rainbirdBlogs->have_posts() ) : $rainbirdBlogs->the_post(); ?>

          <div class="pb-blog-col">
            <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
              <div class="blog-img">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="rainbird" />
              </div><!-- /.blog-img -->
              <div class="blog-info">
                <span>
                  <?php echo get_the_date('M j, Y') ?></span>
                <h3>
                  <?php the_title(); ?>
                </h3>
                <p>
                  <?php the_excerpt(); ?>
                </p>
              </div><!-- /.blog-info -->
            </a>
          </div><!-- /.pb-blog-col -->
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div><!-- /.pb-blog-row -->
      </div><!-- /.container -->
    </section><!-- /.pb-blog -->

  </section><!-- /.rb-blog -->


  </body>



</main><!-- #primary -->

<?php
get_footer();
