<?php
/**
 * @package WordPress
 * @subpackage Votorantim
 */

get_header(); ?>

<!-- main content -->
<section class="main-slider">
  <?php get_template_part('template-parts/content', 'slider'); ?>
</section>

<section class="main-carousel">
  <div class="container">

    <h2 class="custom_amag">Áreas de Atuação</h2>

    <?php get_template_part('template-parts/content', 'carousel'); ?>
  </div>
</section>
<!-- \/main-content\/ -->

<?php get_footer(); ?>
