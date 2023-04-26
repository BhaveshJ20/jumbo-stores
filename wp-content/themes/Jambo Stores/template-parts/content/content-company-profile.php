<?php echo get_template_part( 'template-parts/modules/common', 'banner' ); ?>

<section class="contentarea">

    <?php echo get_template_part( 'template-parts/modules/common', 'overview' ); ?>

    <section class="container com_grid_wrap mb-5">
        <div class="row">
            <div class="col-lg-8 col-bor-r">
                <div class="left-part">
                    <div class="title"><h2 class="red-text">GET TO KNOW US!</h2></div><?php
                    if( have_rows('add_company_profile_data') ):                        
                        while ( have_rows('add_company_profile_data') ) : the_row();
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');
                            
                            $do_you_want_to_add_button = get_sub_field('do_you_want_to_add_button');
                            $button_text = get_sub_field('button_text');
                            $button_link = get_sub_field('button_link');
                            
                            $do_want_to_add_image = get_sub_field('do_want_to_add_image');
                            $add_image = wp_get_attachment_image_src(get_sub_field('add_image')['id'],'company_profile_data_image');

                            $do_want_to_add_partner_logo = get_sub_field('do_want_to_add_partner_logo');
                            $add_partner_logo = wp_get_attachment_image_src(get_field('add_partner_logo')['id'],''); ?>

                            <div class="content-text mb-4">
                                <div class="title2">
                                    <h2 class="red-text"><?php echo $title; ?></h2>
                                </div>
                                <?php echo $description; ?>
                            </div><?php
                            if($do_you_want_to_add_button[0] == "Yes"): ?>
                                <div class="mb-4">
                                    <a href="<?php echo $button_link; ?>" class="btn btn-gray-red"><?php echo $button_text ?></a>
                                </div><?php
                            endif;
                            if($do_want_to_add_image[0] == "Yes"): ?>
                                <div class="mb-4">
                                    <img src="<?php echo $add_image[0]; ?>" alt="<?php echo $title; ?>">                                    
                                </div><?php
                            endif;
                            if($do_want_to_add_partner_logo[0] == "Yes"):
                                if( have_rows('add_partner_logo') ): 
                                    echo '<div class="who-we-brand trusted-partner d-flex justify-content-between align-items-center pl-0">';
                                    while ( have_rows('add_partner_logo') ) : 
                                        the_row(); 
                                        $partner_logo = wp_get_attachment_image_src(get_sub_field('partner_logo')['id'],'');
                                        $partner_logo_link = get_sub_field('partner_logo_link');
                                        if($partner_logo_link):
                                         ?>
                                        <span><a href="<?php echo $partner_logo_link; ?>" target="_blank"><img class="img-full" src="<?php echo $partner_logo[0]; ?>" alt=""></a></span>
                                        <?php else: ?>
                                            <span><img class="img-full" src="<?php echo $partner_logo[0]; ?>" alt=""></span>
                                        <?php
                                    endif;
                                    endwhile;
                                    echo '</div>';
                                    wp_reset_query();
                                endif;
                            endif;
                        endwhile;
                        wp_reset_query();
                    endif; ?>
                </div>
            </div>
            <?php echo get_template_part( 'template-parts/modules/common', 'facebook' ); ?>
        </div>
    </section>
    <!-- Page Carousel Section Start -->
    <?php
    if( have_rows('select_pages') ): ?>
    <section class="box-slider-wrap home-box-slider">
        <div class="container">
            <div class="owl-carousel box-slider owl-theme"><?php
                while ( have_rows('select_pages') ) : the_row(); 
                    $select_page = get_sub_field('select_page');
                    $thumb_image = wp_get_attachment_image_src(get_sub_field('thumb_image')['id'],'page_carsoul');
                    $button_text = get_sub_field('button_text');
                    ?>
                    <div class="item">
                        <div class="box-slide">
                            <div class="box-slide-content">
                                <div class="box-slide-content-blk" style="background-image: url('<?php echo $thumb_image[0]; ?>');">
                                    <div class="box-slide-content-text">									
                                        <div class="box-slide-btn bottom"><a href="<?php echo $select_page; ?>" class="btn btn-white"><span><?php echo $button_text; ?></span></a></div>
                                    </div>														
                                </div>
                            </div>
                        </div>
                    </div><?php
                endwhile; 
                wp_reset_query();
                ?>
            </div>
        </div>
    </section><?php
    endif; ?>
    <!-- Page Carousel Section End -->
    <?php echo get_template_part( 'template-parts/modules/common', 'footer-banner' ); ?>

    <?php
    $our_product_title = get_field('our_product_title');
    $our_product_description = get_field('our_product_description');
    $our_product_button_text = get_field('our_product_button_text');
    $our_product_button_link = get_field('our_product_button_link');
    if($our_product_title || $our_product_description || $our_product_button_text || $our_product_button_link): ?>
        <section class="container">
            <div class="content-text mb-4">
                <div class="title2">
                    <h2 class="red-text"><?php echo $our_product_title; ?></h2>
                </div>
                <?php echo $our_product_description; ?>
            </div>
            <div class="mb-4">
                <a href="<?php echo $our_product_button_link; ?>" class="btn btn-gray"><?php echo ($our_product_button_text) ? $our_product_button_text : 'CLICK HERE FOR OUR SPECIALS'; ?></a>
            </div>
        </section><?php
    endif; ?>    
</section>