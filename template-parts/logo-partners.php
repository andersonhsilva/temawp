<?php
// query dos posts no banco de dados
$featured_inner = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'category__in' => array(get_cat_ID('parceiros')),
    'orderby' => 'rand',
));
if ($featured_inner->have_posts()) {
?>
    <section class="py-3 bg-white shadow-sm">
        <div class="container" id="logos_partiners">
            <div class="row flex-center">
                <?php
                $y = 0;
                while ($featured_inner->have_posts()) {
                    global $post;
                    $featured_inner->the_post();
                    $title = $post->post_title ?? '';
                ?>
                    <div onclick="javascript:window.location  = '<?php the_permalink(); ?>';" style="cursor: pointer;" class="logo_partiners col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', null)[0]; ?>" alt="" title="<?= $title; ?>" /></div>
                <?php
                    $y++;
                }
                wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
                ?>
            </div>
        </div>
    </section>
<?php } ?>