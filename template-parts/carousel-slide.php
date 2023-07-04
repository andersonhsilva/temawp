<section>
    <?php
    // query dos posts no banco de dados
    $featured_inner = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'category__in' => array(get_cat_ID('slideshow')),
    ));
    ?>
    <div id="carouselNavTop" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $y = 0;
            while ($featured_inner->have_posts()) {
                $featured_inner->the_post();
            ?>
                <div class="carousel-item <?= ($y == 0) ? 'active' : ''; ?>">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', null)[0]; ?>" class="d-block w-100" alt="...">
                    </a>
                </div>
            <?php
                $y++;
            }
            wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselNavTop" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselNavTop" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</section>