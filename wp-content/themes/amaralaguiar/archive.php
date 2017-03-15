<?php
/**
 * @package WordPress
 * @subpackage Amaral Aguiar */

get_header(); ?>

<!-- artigos-content -->
<section class="artigos-lista">
  <div class="container">
    <img src="<?php echo get_template_directory_uri().'/files/img/banner-artigos.jpg'; ?>" class="img-fluid" />

    <h2 class="custom_amag">Artigos & Informativos - <?php single_cat_title(); ?></h2>
  </div>

  <div class="container">
    <div class="row">
      <div class="push-xs-0 push-md-8 push-lg-9 col-md-4 col-lg-3">
        <?php get_template_part('template-parts/content', 'sidebar-category'); ?>
      </div>

      <div class="pull-xs-0 pull-md-4 pull-lg-3 col-sm">
        <div class="row">
        <?php

          if ( have_posts() ) :

        		// Start the Loop.
        		while ( have_posts() ) : the_post();
        ?>
            <div class="content-article col-sm-6">
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <span class="author">por <?php the_author(); ?>,  <?php echo get_the_date(); ?></span>

                <div class="desc"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>

                <span class="category"><?php echo amrlagr_categoria( get_the_ID() ); ?></span>
              </article>
            </div>
        <?php
            endwhile;
          else:

          echo '<div class="col-sm-12"> <h2>Nenhum conteúdo encontrado</h2> </div>';

          endif;
        ?>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- \/artigos-content\/ -->

<?php get_footer(); ?>
