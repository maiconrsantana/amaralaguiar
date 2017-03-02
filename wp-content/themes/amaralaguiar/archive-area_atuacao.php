<?php
/**
 * @package WordPress
 * @subpackage Amaral Aguiar */

get_header(); ?>

<!-- artigos-content -->
<section class="artigos-lista atuacao">
  <div class="container">
    <h2 class="custom_amag">Áreas de Atuação</h2>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="row">
        <?php

          if ( have_posts() ) :

        		// Start the Loop.
        		while ( have_posts() ) : the_post();
        ?>
            <div class="content-article col-sm-6">
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( get_field('imagem_de_capa'), 'banner-atuacao', false, ['class' => 'img-fluid', 'title' => get_the_title()] ); ?></a>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <div class="desc"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_field('texto_coluna_1'), $num_words = 20, $more = '[...] ' ); ?></a></div>

                <span class="category"><?php echo amrlagr_categoria( get_the_ID() ); ?></span>
              </article>
            </div>
        <?php
            endwhile;
          endif;
        ?>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- \/artigos-content\/ -->

<?php get_footer(); ?>
