<?php
/**
 * Contact Section fo Front Page
 */

?>

<section id="front-page-contact">
	<div class="container" id="contact-form-wrapper">
			<h1><?php the_field('contact_title'); ?></h1>		
		<div class="">
			<?php the_field('contact_form'); ?>
		</div>
	</div>
</section>