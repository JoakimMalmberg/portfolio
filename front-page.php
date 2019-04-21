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

		
		<div class="row full-page hero">
			<div class="col-12">
				<?php get_template_part( 'global-templates/hero' ); ?>
			</div>
		</div>

		
		<?php get_template_part( 'global-templates/jm_usp' ); ?>

	
		<?php get_template_part( 'global-templates/jm_portfolio' ); ?>
		
		<!--/row-->

		
			<?php get_template_part( 'global-templates/jm_speak' ); ?>


		<?php get_template_part( 'global-templates/contact' ); ?>
			

	<?php get_footer(); ?>
