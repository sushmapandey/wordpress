<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rainbird
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <header class="site-header">
      <div class="container">
      <div class="site-branding">
        <div class="site-title site-titles" >
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/rainbird homestay logo.svg" alt="Rainbird homestay"></a>
        </div>
  
      </div><!-- .site-branding -->
      <nav id="site-navigation" class="main-navigation right-menu">
          <div class="top-menu">
            <ul>
              <li> <a href="mailto:stay@rainbirdhomestay.in "> <i class="icon-message"></i> <span>stay@rainbirdhomestay.in </span></a></li>
              <li> <a href="tel:+91 9901753301"><i class="icon-call"></i> <span>+91 9901753301</span></a> </li>
            </ul>
          </div>
          <div class="ham">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="rb-main-menu">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              ) );
            ?>
            <a href="<?php echo home_url('contact-us'); ?>" class="btn btn-outline"> Book Now</a>
          </div>
      
      </nav><!-- #site-navigation -->
      </div>
    </header><!-- #masthead -->
