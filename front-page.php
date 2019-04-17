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

<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">

		<div class="col-12 full-page hero">
			<div>
				<h2>Joakim Malmberg</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>

			</div>
		</div>

		<div class="row full-page usps">
			<div class="col-6">
				<h2>Usp 1</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
			<!--/span-->
			<div class="col-6">
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
			<div class="col-6 col-lg-4">
				<h2>Site 1</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
			<!--/span-->
			<div class="col-6 col-lg-4">
				<h2>Site 2</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
			<!--/span-->
			<div class="col-6 col-lg-4">
				<h2>Site 3</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
		</div>
		<!--/row-->

		<div class="col-12 full-page speak">
			<div>
				<h2>Speak</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
		</div>


		<div class="col-12 full-page contact-form">
			<div>
				<h2>Contact Form</h2>
				<p>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui. 
				</p>
			</div>	
		</div>
		<!--/span-->
			

	</div>
	<!--/row-->

	<?php get_footer(); ?>
