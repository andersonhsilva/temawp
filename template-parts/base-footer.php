<!-- widgets do rodape site -->
<section>
    <div class="container">        
        <div class="row">
            <?php if (is_active_sidebar('widget-1')) { ?>
                <div class="col-lg-4">
                    <?php dynamic_sidebar('widget-1'); ?>
                </div>
            <?php } ?>
            <?php if (is_active_sidebar('widget-2')) { ?>
                <div class="col-6 col-md-3">
                    <?php dynamic_sidebar('widget-2'); ?>
                </div>
            <?php } ?>
            <?php if (is_active_sidebar('widget-3')) { ?>
                <div class="col">
                    <?php dynamic_sidebar('widget-3'); ?>
                </div>
            <?php } ?>
            <?php if (is_active_sidebar('widget-4')) { ?>
                <div class="col">
                    <?php dynamic_sidebar('widget-4'); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- rodape do site -->
<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
      <span class="text-body-secondary">Place sticky footer content here.</span>
    </div>
  </footer>

<?php // echo get_theme_mod('footer_copyright'); ?>

