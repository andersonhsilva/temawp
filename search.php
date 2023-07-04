<?php get_header(); ?>
<?php get_template_part('template-parts/topo', 'pagina'); ?>

<main>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <h2>Buscar por: <b><?= get_search_query(); ?></b> </h1>
          <hr>
          <h3>Resultado da busca: </h3>
        </div>
      </div>
      <?php
      if (have_posts()){
        while (have_posts()){
          the_post();
          ?>
          <div class="row mt-5">
            <div class="col">
              <div class="section-title-3 mb-45 mrg-bottom-small">
                <h2><span><?php the_title(); ?></span></h2>
              </div>
              <p><?php the_content(); ?></p>
            </div>
          </div>
          <?php
        }
      } else { ?>
        <div class="row">
          <div class="col">
            <h2><span>Nenhum resultado encontrado!</span></h2>
            <hr>
            <h4>Tente uma nova busca com outras palavras.</h4>
          </div>
        </div>
      <?php } ?>
      <div class="row mt-5">
        <div class="col-12 text-center">
          <?php
          // paginação por numero de pagina
          the_posts_pagination(array('prev_text' => 'Voltar', 'next_text' => 'Próximo', 'screen_reader_text' => ' ')); ?>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>
