<?php
/**
 * @package WordPress
 * @subpackage Amaral Aguiar
 */
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--favicon icons -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-57x57.png'; ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-60x60.png'; ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-72x72.png'; ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-76x76.png'; ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-114x114.png'; ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-120x120.png'; ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-144x144.png'; ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-152x152.png'; ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/files/img/favicon/apple-icon-180x180.png'; ?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri() . '/files/img/favicon/android-icon-192x192.png'; ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/files/img/favicon/favicon-32x32.png'; ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/files/img/favicon/favicon-96x96.png'; ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/files/img/favicon/favicon-16x16.png'; ?>">
	<link rel="manifest" href="<?php echo get_template_directory_uri() . '/files/img/favicon/manifest.json'; ?>">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/files/img/favicon/ms-icon-144x144.png'; ?>">
	<meta name="theme-color" content="#ffffff">


	<title><?php wp_title('&laquo;', true, 'right'); ?></title>

	<style type="text/css" media="screen">

<?php wp_head(); ?>
</head>
<body>

<?php get_template_part('template-parts/content', 'menu') ?>
