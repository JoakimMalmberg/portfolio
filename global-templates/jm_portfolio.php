<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$port = new WP_Query([
	'post_type' => 'portfolio',
	'posts_per_page' => -1,
]);


if ($port->have_posts()) { ?>

		<div class="wrapper" id="wrapper-usps">
			<h1>Portfolio</h1>
			<div class="container mt-2 port">
				<div class="row d-flex justify-content-center">
					
					<?php while ($port->have_posts()) {
						$port->the_post();	
						get_template_part('loop-templates/content', 'jm_portfolio');
					}
					wp_reset_postdata(); ?>

				</div>
			</div>
		</div>

<?php } ?>