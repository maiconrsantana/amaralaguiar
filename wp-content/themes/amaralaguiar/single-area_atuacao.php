<?php
/**
 * @package WordPress
 * @subpackage Amaral Aguiar
 *
 * Content Page for Post Type area_atuacao
 */

get_header(); ?>

  <!-- areas-atuacao-content -->
  <section class="main-atuacao">
    <div class="container">

      <?php echo wp_get_attachment_image( get_field('imagem_de_capa'), 'banner-atuacao', false, ['class' => 'img-fluid', 'title' => get_the_title()] ); ?>

      <h2 class="custom_amag"><?php the_title(); ?></h2>

      <div class="row text-justify no-gutters">
        <div class="col-md-12 col-lg-6">
            <?php the_field('texto_coluna_1'); ?>
        </div>

        <div class="col-md-12 col-lg-6">
            <?php the_field('texto_coluna_2'); ?>
        </div>
      </div>

    </div>
  </section>
  <!-- \/areas-atuacao-content\/ -->

<?php get_footer(); ?>
