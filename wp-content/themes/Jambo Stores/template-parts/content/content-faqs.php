<?php echo get_template_part( 'template-parts/modules/common', 'banner' ); ?>
<section class="contentarea">
	<div class="container">
		<div class="faq-wrap">
			<?php
			$faqs_args = array(
		        'posts_per_page' => -1,
		        'post_type' => 'faq',
		        'post_status' => 'publish',
		        'orderby' => 'date', 
		        'order' => 'ASC'
		    );

		    $faq = new WP_Query($faqs_args);
		    $total_faq = $faq->found_posts;
		    $cnt = 1;
		    if($faq->have_posts()):
		    	while ($faq->have_posts()):
		    		$faq->the_post();
		    		$class = 'border-btm';
		    		if($cnt == $total_faq):
		    			$class = 'border-btm mb-0 d-none d-md-block';
		    		endif;
		    		?>
		    		<div class="title2 mb-2"><h2 class="red-text mb-0"><?php the_title(); ?></h2></div>
	            	<div class="content-text"><?php the_field('faq_contents'); ?></div>
	            	<div class="<?php echo $class; ?>"></div>
		    		<?php
		    		$cnt++;
		    	endwhile;
		    	wp_reset_query();
        		wp_reset_postdata();
		    endif;
			?>
		</div>
	</div>
</section>