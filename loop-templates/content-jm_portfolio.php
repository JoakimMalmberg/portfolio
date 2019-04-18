<?php $logo = get_field('logo'); ?>

<div class="flex col d-flex justify-content-center">
	<div class="portfolio-box usp">
		<div class="thumbnail text-center">
			
				<?php if($logo) : ?>
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo $logo['url'] ?>" class="img-fluid" alt="">
					</a>
				<?php endif;?>
				
				<h1><?php the_title(); ?></h1>

				<?php the_terms(get_the_ID(),
					'bransch',
					__('Branch: ', 'understrap')
				); ?>

				<p><?php the_excerpt(); ?></p>
		</div>
	</div>
</div>