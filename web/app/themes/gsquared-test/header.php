<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gsquared_Test
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/./css/bundle-min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/./css/style.min.css" />

  <!-- Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <?php wp_head(); ?>

  <!-- Icon -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <div class="sitewrapper">

    <!-- header -->
    <header class="header">
      <div class="header-top">
        <p>for any enquires and booking call <a href="tel:0452 139 110">0452 139 110</a></p>
      </div>
      <div class="header-main">
        <div class="container">
          <div class="header-main-row">
            <div class="header-main-hamburger app-md">
              <div class="nav-toggle side-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="header-main-logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
						echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
				?>
              </a>
			  
            </div>

            <div class="header-main-nav">
              <nav id="menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class' => 'navul',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
              </nav>
            </div>
            <div class="header-main-btns">
              <a data-toggle="modal" data-target="#modalSearch" href="#"
                class="header-btn-search modal-trigger-search"><img src="images/icons/search.svg" alt=""></a>
              <div class="header-main-social dis-sm">
                <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.svg" alt=""></a></span>
                <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.svg" alt=""></a></span>
                <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/youtube.svg" alt=""></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="sitecontent">


