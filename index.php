<?php get_header(); ?>

<main class="main">

  <!-- conteudo de exemplo para uso -->
  <?php get_template_part('template-parts/content', 'text'); ?>

  <section>
    <div class="container">
      <?php
      if (have_posts()) {
        $i_home = 0;
        while (have_posts()) {
          the_post();
          the_content();
          $i_home++;
        }
        wp_reset_postdata(); // para limpar os dados do laço wp
      }
      ?>
    </div>
  </section>

  <?php get_footer(); ?>