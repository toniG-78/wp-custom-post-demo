<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
/* 	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after();  */
?>

		<!-- MY CUSTOM FOOTER -->
	<!-- GOOGLE MAP -->

	<div style="text-align:center; margin-bottom: 6rem;">
		<iframe style="width:86%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115053.06402114451!2d-80.31850344932779!3d25.69090377576371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b78e141efa21%3A0x511093dc4495a9d6!2sCoral%20Gables%2C%20Florida%2C%20Stati%20Uniti!5e0!3m2!1sit!2sit!4v1619803842649!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

	<div id="copyright">
		<p style="text-align:center; font-weight:bold">Copyright 2021 | <a href="https://github.com/toniG-78" target="_blank">Design by Ag</a></p>
	</div>
	
	</body>
</html>

	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>


