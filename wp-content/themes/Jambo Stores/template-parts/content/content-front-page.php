<?php echo get_template_part( 'template-parts/modules/common', 'banner' ); ?>

<?php echo get_template_part( 'template-parts/modules/common', 'our-latest-specials' ); ?>

<!-- Who We Are Section Start -->
<?php
$who_we_are_title = get_field('who_we_are_title');
$who_we_are_description = get_field('who_we_are_description');
//$who_we_are_image = wp_get_attachment_image_src(get_field('who_we_are_image')['id'],'who_we_are_image');
$read_more_button_text = get_field('read_more_button_text');
$read_more_button_link = get_field('read_more_button_link');
$who_we_are_brand_images = get_field('who_we_are_brand_images');
$who_we_are_sub_description = get_field('who_we_are_sub_description');
?>
<section class="who-we-are-wrap com_grid_wrap">
	<div class="container mb-2">
        <div class="row">
            <div class="col-lg-8">
				<div class="left-part">
					<div class="who-we-are">
						<div class="who-we-are-top">
							<div class="title red-text">
								<h2 class="mt-0"><?php echo ($who_we_are_title) ? $who_we_are_title : 'Who Are We?' ?></h2>
							</div>
							<?php if($who_we_are_description): echo '<p>'.$who_we_are_description.'</p>'; endif; ?>
							<a href="<?php echo $read_more_button_link; ?>" class="btn btn-gray-red medium"><?php echo ($read_more_button_text) ? $read_more_button_text : 'Read More'; ?> </a>
						</div>
						<div class="who-we-brand"><?php
						if( have_rows('who_we_are_brand_images') ):
						   while ( have_rows('who_we_are_brand_images') ) : the_row(); $brand_url = get_sub_field('brand_url'); 
						   		if($brand_url): echo '<a href="'.$brand_url.'" target="_blank">'; endif; ?>
									<span><img class="img-full" src="<?php the_sub_field('add_brand_logo'); ?>" alt=""></span>
								<?php if($brand_url): echo '</a>'; endif; 
						   endwhile;
						   wp_reset_query();
					   	endif; ?>
						</div>
						<?php if($who_we_are_sub_description): echo '<p>'.$who_we_are_sub_description.'</p>'; endif;

						if( have_rows('add_who_are_banner_images') ):
							echo '<div class="owl-carousel who-we-are-slider owl-theme">';
							while ( have_rows('add_who_are_banner_images') ) : the_row();
								$who_we_are_image = wp_get_attachment_image_src(get_sub_field('banner_slider_image')['id'],'who_we_are_image'); ?>
								<div class="item">
									<img src="<?php echo ($who_we_are_image) ? $who_we_are_image[0] :  get_stylesheet_directory_uri() . '/assets/images/who-we-bg.jpg' ?>" alt="">
								</div><?php
							endwhile;
							echo '</div>';
						endif; ?>									
					</div>
				</div>
			</div>
			<?php echo get_template_part( 'template-parts/modules/common', 'facebook' ); ?>
		</div>
	</div>
</section>

<!-- Who We Are Section End -->

<!-- Page Carousel Section Start -->
<?php
if( have_rows('select_pages') ): ?>
<section class="box-slider-wrap">
	<div class="container">
		<div class="home-box-slider">
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
	</div>
</section><?php
endif; ?>
<!-- Page Carousel Section End -->
<?php
if( have_rows('add_footer_banner_images') ):
	echo '<section class="home-footer-slider-wrap"><div class="owl-carousel home-footer-slider owl-theme">';
    while ( have_rows('add_footer_banner_images') ) : the_row();
		$footer_banner_image = wp_get_attachment_image_src(get_sub_field('footer_banner_image')['id'],'home_footer_banner');
		$banner_url = get_sub_field('banner_url'); ?>
		<div class="item">
			<div class="banner-wrap">
				<div class="container-fluid p-0">
					<div class="banner-area">
						<?php
						if($banner_url): echo '<a href="'.$banner_url.'">';	endif;
						if($footer_banner_image[0]): echo '<img src="'.$footer_banner_image[0].'" alt="Homepage Footer Banner">'; endif;
						if($banner_url): echo '</a>'; endif; ?>
					</div> 
				</div>
			</div>
		</div>
		<?php
	endwhile;
	echo '</div></section>';
endif;?>

<?php echo get_template_part( 'template-parts/modules/common', 'footer-banner' ); ?>