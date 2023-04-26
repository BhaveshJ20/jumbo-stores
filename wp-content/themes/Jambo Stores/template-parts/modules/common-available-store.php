<section class="box-slider-wrap">
    <div class="title black-text text-center px-1"><h4>ALSO AVAILABLE IN-STORE:</h4></div>
    <div class="container">
        <div class="mc_slider">
            <div class="owl-carousel mc_box_slider owl-theme"><?php
            if( have_rows('select_pages') ):
                while( have_rows('select_pages') ): the_row();
                    $select_page_link = get_sub_field('select_page_link');
                    $thumb_image = wp_get_attachment_image_src(get_sub_field('thumb_image')['id'],'');
                    $button_text = get_sub_field('button_text'); ?>
                    <div class="item">
                        <div class="box-slide">
                            <div class="box-slide-content">
                                <div class="box-slide-content-blk" style="background-image: url('<?php echo $thumb_image[0]; ?>');">
                                    <div class="box-slide-content-text">                                        
                                        <div class="box-slide-btn top">
                                            <?php if($select_page_link): ?>
                                                <a href="<?php echo $select_page_link; ?>" class="btn btn-red"><span><?php echo $button_text; ?></span></a>
                                                <?php else: ?>
                                                <div class="heading-red">
                                                    <div class="heading-text"><h5 class="mb-0"><?php echo $button_text; ?></h5></div>
                                                </div>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div><?php                    
                    endwhile;
                    wp_reset_query();
                endif; ?>
            </div>
        </div>
    </div>
</section>