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
	<div>
		
		<div class="row full-page hero">
			<div class="col-12">
				<?php get_template_part( 'global-templates/hero' ); ?>
			</div>
		</div>

		<div class="row full-page usps">
			<?php get_template_part( 'global-templates/jm_usp' ); ?>
		</div>
		<!--/row-->

		

		<div class="row full-page sites">
			<?php get_template_part( 'global-templates/jm_portfolio' ); ?>

		</div>
		
		<!--/row-->

		<div  class="speak">
			<?php get_template_part( 'global-templates/jm_speak' ); ?>
		</div>

		<?php get_template_part( 'global-templates/contact' ); ?>
			

			

			
	</div>
	
</div>

	<?php get_footer(); ?>
