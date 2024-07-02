<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gsquared_Test
 */

?>

</div>

<footer class="footer background-white">
  <div class="footer-top">
	<div class="container">
	  <div class="footer-top-row row">
		<div class="footer-top-col col-lg-3">
		  <div class="footer-about text-center">
			<div class="logowrap">
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
			<div class="footer-social">
			  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.svg" alt=""></a>
			  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.svg" alt=""></a>
			  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/youtube.svg" alt=""></a>
			</div>
		  </div>
		</div>
		<div class="footer-top-col col-lg-3">
		  <p>School of Fine Art (SoFA) is the studio art school of Kristin Coburn, situated in the spectacular
			Headland Park at Georges Heights Middle Head, on the Lower North Shore suburb of Mosman.</p>
		</div>
		<div class="footer-top-col col-lg-2">
		  <ul class="footer-list">
			<li><a href="./">home</a></li>
			<li><a href="./ateliers-courses.html">ateliers courses</a></li>
			<li><a href="./online-courses.html">online courses</a></li>
			<li><a href="./teachers.html">teachers</a></li>
			<li><a href="./community.html">community</a></li>
			<li><a href="">about</a></li>
			<li><a href="./contact.html">contact</a></li>
		  </ul>
		</div>
		<div class="footer-top-col col-lg-4">
		  <div class="footer-img-collection">
			<div class="footer-img footer-img-1">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/Web-Gemma-Shot-1.jpg" alt="">
			</div>
			<div class="footer-img footer-img-2">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/Web-Gemma-Shot.jpg" alt="">
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="footer-bot background-gray">
	<div class="container">
	  <div class="footer-bot-row row text-center">
		<div class="footer-bot-col col-lg-6 text-md-left">
		  <span>© 2020 SOFA, All right reserved - Legal</span>
		</div>
		<div class="footer-bot-col col-lg-6 text-md-right">
		  <span>Website carefully created by Spicy Broccoli Media</span>
		</div>
	  </div>
	</div>
  </div>
</footer>
</div>


<!-- Modal  search -->
<div class="modal fade custom-modal custom-modal-search" id="modalSearch" tabindex="-1" role="dialog">
<div class="custom-modal-bg" data-dismiss="modal">
  <img src="images/icons/close.svg" alt="">
</div>
<div class="modal-dialog" role="document">
  <div class="modal-content custom-modal-content">
	<div class="search-box">
	  <input type="text" name="search" placeholder="Search">
	  <button><img src="images/icons/search-white.svg" alt=""></button>
	</div>
  </div>
</div>
</div>

<!-- Modal  Course -->
<div class="modal fade custom-modal custom-modal-course" id="modalCourse" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
	<div class="modal-content custom-modal-content">
		<div class="custom-modal-exit" data-dismiss="modal">
		<img src="images/icons/exit.svg" alt="">
		</div>
		<div class="purchase-modal">
		<div class="purchase-modal-hero">
			<img src="images/Class_Penny_3-lg.jpg" alt="">
		</div>
		<div class="purchase-modal-cont">
			<div class="purchase-modal-head dotted-border-bot">
			<h2 class="purchase-modal-title heading">Beginners painting</h2>
			<p class="price">
				<span class="heading color-price">$395</span>
				for 8 wks term
			</p>
			</div>
			<div class="purchase-modal-body">
			<div class="purchase-modal-desc">
				<p>This course is for anyone wanting to learn the skills of art no matter how little
				previous experience
				you’ve had. The class is designed for beginners and will take you through the
				absolute basics of line,
				shape, tone, and composition as well as how to use acrylic paints. It’s the perfect
				class to take if
				you
				have never had any art experience but have always promised yourself you willl one
				day. Start at the
				beginning and learn basic techniques and fundamentals of art making. You will be
				surprised how quickly
				you
				will develop basic painting skills.</p>
			</div>
			<div class="purchase-modal-details">
				<a href="#" class="link-box"><img src="images/icons/plus.svg" alt=""> Book Now</a>

				<p><span>Teacher</span><span>Penny Harkness</span></p>
				<p><span>Day</span><span>Monday</span></p>
				<p><span>Time</span><span>9.30 - 12.30</span></p>
				<p class="purchase-modal-notice">Please ring <a href="tel:0407257943">0407257943</a> to
				check
				availability</p>
			</div>
			</div>
		</div>
		</div>
	</div>
	</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/./js/bundle-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/./js/custom.js" defer></script>
<?php wp_footer(); ?>

</body>

</html>
	