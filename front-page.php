<?php
/**
 * The template for displaying front pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' ); ?>

<div class="container-fluid">
	<div>
		
		<div class="row full-page hero">
			<div class="col-12">
				<?php get_template_part( 'global-templates/hero' ); ?>
			</div>
		</div>

		<div class="row full-page usps">
			<div class="col-12 col-lg-6">
				<h2>Usp 1</h2>
			</div>
			<!--/span-->
			<div class="col-12 col-lg-6">
				<h2>Usp 2</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
			<!--/span-->
		</div>
		<!--/row-->

		<div class="row full-page sites">
			<div class="col-12 col-md-6 col-lg-4">
				<h2>Site 1</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
			</div>
			<!--/span-->
			<div class="col-12 col-md-6 col-lg-4">
				<h2>Site 2</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
			</div>
			<!--/span-->
			<div class="col-12 col-lg-4">
				<h2>Site 3</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
			</div>
		</div>
		<!--/row-->

		<div class="row full-page speak">
			<div class="col-12">
				<h2>Speaks</h2>
			</div>
		</div>


		<div class="row full-page contact-form">
			<div class="col-12">
				<h2>Contact Form</h2>
			</div>
		</div>

			

	</div>
</div>
	<?php get_footer(); ?>
