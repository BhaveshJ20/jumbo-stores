<?php
/*
 * The footer for our theme
 */
?>
<?php
$contact_us_title = get_field('contact_us_title','option');
$add_contacts = get_field('add_contacts','option');
if($add_contacts && !is_404()): ?>
	<section class="contactus-slide-wrap">
		<div class="container-fluid">
			<div class="title red-text text-center">
				<h2 class="my-0"><?php echo ($contact_us_title) ? $contact_us_title : 'Contact Us'; ?></h2>
			</div>
			<div class="contactus-slide-blk">
				<div class="owl-carousel contact-slider owl-theme"><?php
					foreach($add_contacts as $contacts_value): ?>
						<div class="item">
							<div class="contactus-slide-content-blk">
								<div class="contactus-slide-content">
									<div class="contactus-slide-content-text">
										<?php if($contacts_value['contact_type_name']): ?> <h6><?php echo $contacts_value['contact_type_name']; ?></h6> <?php endif; ?>
										<?php if($contacts_value['contact_telephone']): ?><p>TEL: <?php echo $contacts_value['contact_telephone']; ?></p><?php endif; ?>
										<?php if($contacts_value['contact_whatsapp_no']): ?> <p>WHATSAPP: <?php echo $contacts_value['contact_whatsapp_no']; ?></p><?php endif; ?>
										<?php if($contacts_value['contact_email']): ?> <p><?php echo $contacts_value['contact_email']; ?></p> <?php endif; ?>
									</div>
								</div>
							</div>
						</div> <?php
					endforeach; ?>				
				</div>
			</div>
		</div>
	</section><?php
endif;

$subscribe_section_title = get_field('subscribe_section_title','option');
$subscribe_section_title = get_field('subscribe_section_title','option');
$add_form_shortcode = get_field('add_form_shortcode','option');
$subscribe_section_link =  get_field('subscribe_section_link', 'option');
if($add_form_shortcode && !is_404()): ?>
	<section class="container d-none d-lg-block d-xl-block">
	<div class="subscribe-now">
		<div class="mb-4">
			<a class="btn btn-pink" href="<?php echo $subscribe_section_link; ?>" target="_blank"><?php echo ($subscribe_section_title) ? $subscribe_section_title : 'JOIN OUR WHATSAPP AND SMS DATABASE TO RECEIVE OUR LATEST SPECIALS'; ?></a>
		</div>
		<div class="subscribe-form">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/email.svg' ?>" alt=""></div>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="175" title="Subscribe"]'); ?>
			</div>
		</div>
	</div>
</section><?php
endif; ?>

<footer class="footer">
	<section class="footer-top bg-red">
		<div class="container">
			<div class="row"><?php				
				$footer_menu_cnt = 2;				
				if( have_rows('footer_menu_section','option') ):						
					while ( have_rows('footer_menu_section','option') ) : the_row();
						$footer_menu_ext_class = 'd-none d-md-block d-lg-block';
						$footer_menu_title = get_sub_field('footer_menu_title','option');
						$select_footer_menu = get_sub_field('select_footer_menu');								
						if($footer_menu_cnt == 2): $footer_menu_ext_class = ''; endif; ?>
						<div class="col-lg-3 col-md-6 order-md-<?php echo $footer_menu_cnt.' '.$footer_menu_ext_class; ?>">
							<div class="heading-gray">
								<h5 class="mb-0"><?php echo ($footer_menu_title) ? $footer_menu_title : 'QUICK LINKS'; ?></h5>
							</div>
							<div class="footer-links">
								<?php echo $select_footer_menu; ?>
							</div>
						</div><?php
						$footer_menu_cnt++;
					endwhile;
					wp_reset_query();
				endif; 
				$footer_image_section = get_field('footer_image_section','option');
				if($footer_image_section): 
				if(wp_is_mobile()) : $ftExtClass = "order-md-1"; else: $ftExtClass = "order-md-1"; endif;  ?>
					<div class="col-lg-3 col-md-6 <?php echo $ftExtClass; ?>">
						<div class="masscash-logo"><img src="<?php echo $footer_image_section; ?>" alt=""></div>
						<!-- <div class="footer-search">
							<a href="#" class="btn btn-white-round d-block">Search</a>
						</div> -->
					</div><?php
				endif; ?>				
			</div>
			<div class="social-media">
				<ul><?php 				
					if( have_rows('add_social_media_details','option') ):						
						while ( have_rows('add_social_media_details','option') ) : the_row(); 
							$enable_social_icon = get_sub_field('enable_social_icon');
							if($enable_social_icon[0] == "Enable Social Icon"): ?>
								<li><a href="<?php the_sub_field('social_media_url'); ?>" target="_blank"><img src="<?php  the_sub_field('social_media_icon'); ?>" alt=""></a></li><?php
							endif;
						endwhile;
						wp_reset_query();
					endif; ?>
				</ul>

				<p><?php
                $page_cnt = count(get_field('add_footer_page_links','option'));                
                $i = 1;
                if( have_rows('add_footer_page_links','option') ):                        
                    while ( have_rows('add_footer_page_links','option') ) : the_row(); ?>
                        <a href="<?php the_sub_field('footer_page_link'); ?>" target="<?php the_sub_field('footer_page_link_target'); ?>"><?php the_sub_field('footer_page_title'); ?></a><span><?php
                        if($i != $page_cnt): echo '|'; endif;
                    $i++;
                    endwhile;
                    wp_reset_query();
                endif; ?>                
                </p>
			</div>
		</div>
	</section>
	<section class="copyright">
		<div class="container"><?php
			$footer_copyrights = get_field('footer_copyrights','option');
			if($footer_copyrights):
				echo '<p>'.$footer_copyrights.'</p>';
			endif; ?>		
		</div>
	</section>
</footer>
 <div class="modal fade" id="ContactModal" tabindex="-1" role="dialog" aria-labelledby="ContactModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-pink">
                <h3 class="modal-title text-white text-center" id="ContactModalLabel">Thank you</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Your message has been sent. A representative will be in touch.</p>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-pink" data-dismiss="modal">Okay</button>
            </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>
