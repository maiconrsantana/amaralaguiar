<!-- nav-menu -->
<div class="container-full">
  <div class="container">
  <nav class="navbar navbar-toggleable-md navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri().'/files/img/logo.png'; ?>" alt="Amaral Aguiar - Sociedade de Advogados"></a>


    <div class="row collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="col-md-12 justify-content-md-end navbar-nav hidden-md-down">
          <li class="nav-item">
            <a class="nav-link-top" href="tel: 11 4568-9012">(11) 4568-9012</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-top" href="#">Ligamos para você</a>
          </li>
        </ul>
        <ul class="col-md-12 justify-content-md-end navbar-nav">
        <li class="nav-item <?php if(amrlagr_active() == 'home'){?>active<?php }?>">
          <a class="nav-link" href="<?php echo site_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Escritório</a>
        </li>
        <li class="nav-item dropdown <?php if(amrlagr_active() == 'atuacao'){?>active<?php }?>">
          <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Atuação
          </a>

          <?php // exibe páginas de atuação
            $atuacao = amrlagr_atuacao();
            if ($atuacao->have_posts()) :
          ?>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <?php while ( $atuacao->have_posts() ) : $atuacao->the_post(); ?>
                <a class="dropdown-item" href="<?php the_permalink($atuacao->ID) ?>"><?php the_title($atuacao->ID); ?></a>
              <?php endwhile; ?>

              </div>
          <?php wp_reset_query(); endif;?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artigos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dúvidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>

    </div>
  </nav>
</div>
</div>
<!-- \/nav-menu\/ -->
