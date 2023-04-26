<!-- Banner Section Start -->
<?php
$banner_type = get_field('banner_type');
if($banner_type):
    if($banner_type == "Full Width Image Slider"):
        if( have_rows('add_slider_images') ):
            echo '<section class="owl-carousel hero-slider owl-theme">';
            while ( have_rows('add_slider_images') ) : the_row();
                $do_you_want_to_add_white_border = get_sub_field('do_you_want_to_add_white_border')[0];
                $slider_image_text_1 = get_sub_field('slider_image_text_1');
                $slider_image_text_2 = get_sub_field('slider_image_text_2');
                $slider_image_text_3 = get_sub_field('slider_image_text_3');
                $slider_text_position = trim(get_sub_field('slider_text_position'));
                $slider_image = wp_get_attachment_image_src(get_sub_field('slider_image')['id'],''); ?>
                <div class="item">
                    <div class="banner-wrap" style="background-image: url('<?php echo $slider_image[0]; ?>');">
                        <div class="overlay"></div>
                        <div class="container-fluid p-0">
                            <div class="banner-area">
                                <div class="banner-area-cont">
                                    <div class="banner-text">                                        
                                       <div class="<?php echo $slider_text_position; ?> <?php if($do_you_want_to_add_white_border == "Yes"){ echo 'banner-text-top';}else{ echo 'banner-no-line'; } ?> ">
                                            <div class="row">
                                                <div class="col">
                                                <?php 
                                                    if($slider_image_text_1):
                                                        echo '<h1>'.$slider_image_text_1.'</h1>';
                                                    endif;
                                                    if($slider_image_text_2):
                                                        echo '<h2>'.$slider_image_text_2.'</h2>';
                                                    endif;?>
                                                </div>
                                            </div>  
                                        </div>
                                        <?php 
                                        if($slider_image_text_3): ?>
                                        <div class="banner-text-bottom <?php echo $slider_text_position; ?>">
                                            <?php echo '<p>'.$slider_image_text_3.'</p>'; ?>
                                        </div>
                                        <?php endif; ?>                                        
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div><?php                
            endwhile;
            echo '</section>';
        endif;
    elseif ($banner_type == "Full Width Single Image"):
        $do_you_want_to_add_white_border = get_sub_field('do_you_want_to_add_white_border')[0];
        $add_banner_image_text = get_field('add_banner_image_text');        
        $add_banner_image = wp_get_attachment_image_src(get_field('add_banner_image')['id'],''); ?>
        <section class="hero-banner inner-banner">
            <div class="banner-wrap" style="background-image: url('<?php echo ($add_banner_image) ? $add_banner_image[0] : get_stylesheet_directory_uri() . '/images/hero-slide1.jpg'; ?>');">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="banner-area-cont">
                        <div class="banner-text"><?php 
                            if($add_banner_image_text):?>
                            <div class="banner-text-top text-center <?php if($do_you_want_to_add_white_border == "Yes"){ echo 'banner-text-top';}else{ echo 'banner-no-line'; } ?>">                                
                                    <div class="row">
                                        <div class="col"><?php                                     
                                            echo '<h1>'.$add_banner_image_text.'</h1>'; ?>                                        
                                        </div>
                                    </div>  
                                </div><?php
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><?php
    endif;                
endif;
?>
<!-- Banner Section End -->
