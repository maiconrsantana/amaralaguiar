<?php
/**
 * @package WordPress
 * @subpackage Amaral Aguiar
 * Sidebar Category
 */
?>

<section class="cat_sidebar">
  <h3>Por Atuação</h3>
  <?php
      $current = get_the_category();
      if(isset($current[0])){ $cat = $current[0]; }else{ $cat = false; }
  ?>
  <?php echo amrlagr_categoria(false, $cat); ?>
</section>
