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


	<title><?php wp_title('&laquo;', true, 'right'); ?></title>

	<style type="text/css" media="screen">

<?php wp_head(); ?>
</head>
<body>

<?php get_template_part('template-parts/content', 'menu') ?>
