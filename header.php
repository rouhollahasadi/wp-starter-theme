<?php
/**
 * The template for displaying header
 *
 * @package ThunderWP
 * @since 1.0.0
 */

get_template_part( 'template-parts/head' );
?>

<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) : ?>

	<header id="header">

	</header><!--#header-->

<?php endif; ?>
