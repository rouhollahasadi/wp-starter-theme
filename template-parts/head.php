<?php
/**
 * Template for displaying head
 *
 * @package ThunderWP
 * @since 1.0.0
 */

global $thunderwp;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="<?php echo esc_url( $thunderwp['site_favicon']['url'] ); ?>">
	<meta name="keywords" content="<?php echo esc_attr( $thunderwp['site_keywords'] ); ?>">
	<meta name="fontiran.com:license" content="QQESA4">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
