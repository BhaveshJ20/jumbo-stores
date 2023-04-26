<?php
/**
* Header Logo
*
**/

$company_logo = get_field('company_logo','option');
$company_logo_text_image = get_field('company_logo_text_image','option');
$company_logo_sub_text_image = get_field('company_logo_sub_text_image','option');
if($company_logo){
    $logo_image = wp_get_attachment_image_src($company_logo['id'], 'logo');	    
}
if($company_logo_text_image){
    $logo_text_image = wp_get_attachment_image_src($company_logo_text_image['id'], '');	    
}
if($company_logo_sub_text_image){
    $logo_sub_text_image = wp_get_attachment_image_src($company_logo_sub_text_image['id'], '');	    
} ?>
<div class="logo">
    <a href="<?php echo get_site_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
    <img src="<?php echo ($logo_image[0]) ? $logo_image[0] : get_stylesheet_directory_uri().'/assets/images/logo.png'; ?>" alt="<?php bloginfo( 'name' ); ?>">
    </a>
    <div class="bg-gray wholesale-logo">
        <img src="<?php echo ($logo_text_image[0]) ? $logo_text_image[0] : get_stylesheet_directory_uri().'/assets/images/wholesale-logo.svg'; ?>" alt="WHOLESALE">
    </div>
    <div class="logo-tagline">
        <img src="<?php echo ($logo_sub_text_image[0]) ? $logo_sub_text_image[0] : get_stylesheet_directory_uri().'/assets/images/the-giant-africa-logo.svg'; ?>" alt="THE GIANT OF AFRICA">
    </div>
</div>