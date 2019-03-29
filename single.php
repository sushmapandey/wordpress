<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rainbird
 */

get_header(); ?>

<main id="primary" class="site-main">
  <?php while ( have_posts() ) : the_post(); ?>

<section class="rb-single-blog container">
  <div>
    <?php 
      the_title( '<h1 class="entry-title">', '</h1>' );
    ?>
    <p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php echo get_avatar( get_the_author_meta('ID'), 60); ?></a> Written by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php echo esc_html( get_the_author() ) ?></a>
    </p>
  </div>
  <div>
    <?php 
      if ( has_post_thumbnail() ) :
        the_post_thumbnail();
      endif;
    ?>
  </div>
</section>
<div class="container">
  <div class="blog-content">
    <?php 
      the_content();
    ?>
  </div><!-- eo blog-content -->
</div>





<div class="post-nav container">
  <div class="prev-blog">
    <?php previous_post_link(' %link'); ?> 
  </div>
  <div class="next-blog">
    <?php next_post_link('%link'); ?> 
  </div>
</div>



    <div class="rb_homestay">
      <h2>Releated Blogs</h2>
    </div>
    <section class="pb-blog blogs">
      <div class="container">
        <div class="pb-blog-row">

          <?php $rainbirdBlogs = new WP_Query('category_name=blog&posts_per_page=3&orderby=date&order=ASC'); ?>
          <?php if ($rainbirdBlogs->have_posts() ) : while ($rainbirdBlogs->have_posts() ) : $rainbirdBlogs->the_post(); ?>

          <div class="pb-blog-col">
            <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
              <div class="blog-img">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="rainbird" />
              </div><!-- /.blog-img -->
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

<?php
endwhile; // End of the loop.
?>
</main><!-- #primary -->
	
	
	



<?php
get_footer();
