<?php echo get_template_part( 'template-parts/modules/common', 'banner' ); ?>

<?php echo get_template_part( 'template-parts/modules/common', 'overview' ); ?>

<section class="container pt-5 mb-5">
        <div class="row">
            <div class="col-lg-8 col-bor-r">
                <div class="left-part">
					<?php the_content(); ?>
				</div>
			</div>
            <?php echo get_template_part( 'template-parts/modules/common', 'facebook' ); ?>
		</div>
</section>

<?php echo get_template_part( 'template-parts/modules/common', 'footer-banner' ); ?>