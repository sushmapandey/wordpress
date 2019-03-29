<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rainbird
 */

?>

<footer id="colophon" class="site-footer">
<div class="site-info footer">
    <div class="container contain">
      <div class="col">
      <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><img src="<?php echo get_template_directory_uri(); ?>/img/rainbird homestay logo.svg" alt="Rainbird homestay"></a></h2>
        <ul>
          <li>Address: Jambaradi village, Kyamanahalli post, Saklespura. Hassan, Karnataka 573134</li>
          <li>GSTIN 29BDTPD2133A1ZW</li>
          
        </ul>
      </div><!-- /.col -->
      <div class="col">
        <div class="footer-menu-link">
          <ul>
            <li><a href="<?php echo home_url('terms-and-conditions'); ?>">Terms and Conditions</a></li>
            <li><a href="<?php echo home_url('tariff'); ?>">Tariff</a></li>
            <li><a href="<?php echo home_url(''); ?>">Food</a></li>
            <li><a href="<?php echo home_url('activities'); ?>">Activities</a></li>
          </ul>

          <ul>
            <li><a href="<?php echo home_url('gallery'); ?>"> Gallery</a></li>
            <li><a href="<?php echo home_url('places-around'); ?>">Places around</a></li>
            <li><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
            <li><a href="<?php echo home_url('contact-us'); ?>">Contact us</a></li>
          </ul>
          </div><!-- /.footer-menu-link -->
        </div><!-- /.col -->
      <div class="col social-section">
        <!-- <h2>SUBSCRIBE TO OUR INSIGHTS</h2> -->
        <div class="social-media">
          <ul>
            <li><a href="#" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="icon-youtube"></i></a></li>
            <li><a href="#" target="_blank"><i class="icon-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="icon-instagram"></i></a></li>
          </ul>
        </div>
        <ul>
          <li class="booking">Book Your Homestay <a href="<?php echo home_url('contact-us'); ?>" class="btn btn-outline"> Book Now</a></li>
          <li>Email: <a href="mailto:stay@rainbirdhomestay.in ">stay@rainbirdhomestay.in </a></li>
          <li>Call us:<a href="tel:9901753301"> 9901753301</a></li>
        </ul>
      </div><!-- /.col -->
    </div><!-- /.container -->
  </div><!-- .site-info -->
  <section class="bottom-footer">
    <div class="container">
      <p>Copyright &copy; <?php echo date('Y'); ?>, All Rights Reserved. Rainbird Homestay </p>
      <p>Powered by <a href="https://dzineden.com/" rel="nofollow" target="blank">dzineden</a></p>
    </div><!-- /.container -->
  </section><!-- /.bottom-footer -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src='https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js'></script>
</body>
</html>
