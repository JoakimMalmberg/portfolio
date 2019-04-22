<?php
/**
 * Speak.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$port = new WP_Query([
	'post_type' => 'speak',
	'posts_per_page' => -1,
]);


if ($port->have_posts()) { ?>
	<div>
		<div class="row d-flex justify-content-center">
			<h1>Speak</h1>
		</div>
		<?php while ($port->have_posts()) {
			$port->the_post();	
			get_template_part('loop-templates/content', 'jm_speak');
		}
		wp_reset_postdata(); ?>
	</div>
<?php } ?>
