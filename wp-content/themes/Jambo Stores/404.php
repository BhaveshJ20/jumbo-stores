<?php
/*
 * The template for displaying 404 pages (not found)
 */

get_header();
$banner_image_404 = get_field('banner_image_404','option');
$page_content_404 = get_field('page_content_404','option');
if(!$banner_image_404):
	$banner_image_404 = get_template_directory_uri()."/assets/images/404-bg.jpg";
endif;
?>
	<section class="notfound-page">
		<div class="banner-wrap" style="background-image: url('<?php echo $banner_image_404; ?>');">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner-area-cont">
					<div class="banner-text text-center"><?php 
					if($page_content_404):
						echo '<h1>'.$page_content_404.'</h1>';
					else:	?>
						<h1>
						<span>LOOKS LIKE YOU FOUND AN EMPTY PAGE!</span>
						PLEASE GO BACK TO OUR HOME PAGE TO<br/>
						FIND WHAT YOU’RE LOOKING FOR.
						</h1><?php
					endif; ?>					
					<div class="lbl-red"><span>404</span></div>
					<h3>THIS PAGE IS NOT FOUND</h3>
					</div>
					<div class="back-to-home text-center"><a href="<?php echo home_url(); ?>" class="btn btn-red">Back To Home</a></div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
