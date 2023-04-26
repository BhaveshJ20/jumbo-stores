<?php echo get_template_part( 'template-parts/modules/common', 'banner' ); ?>
<section class="container">
   <div class="get-in-touch-wrap">
        <div class="row">
            <div class="col-lg-8 col-bor-r">
                <div class="left-part">
                    <?php echo do_shortcode(get_the_content()); ?>                    
                </div>
            </div>
            <?php echo get_template_part( 'template-parts/modules/common', 'facebook' ); ?>
        </div>
    </div>
</section>

<?php echo get_template_part( 'template-parts/modules/common', 'footer-banner' ); ?>