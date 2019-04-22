<?php $logo = get_field('logo');

$bransch_query = new WP_query([
    'post_type' => 'portfolio',
]); ?>

<div class="flex col d-flex justify-content-center">
	<div class="portfolio-box usp ">
		<div class="thumbnail text-center">
			
			<?php if($logo) : ?>
				<a href="<?php the_field('link') ?>" target="_blank">
					<figure>
						<img src="<?php echo $logo['url'] ?>" class="img-fluid" alt="Responsive image">
					</figure>
				</a>
			<?php endif;?>
			
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			
			<p>
				<?php the_terms(get_the_ID(),
					'branch',
					__('Branch: ', 'understrap')
				); ?>
			</p>
			
			<p>
				<?php the_terms(get_the_ID(),
					'used',
					__('Used: ', 'understrap')
				); ?>
			</p>

			<?php the_field('date_created'); ?>
		</div>
	</div>
</div>