<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$usps = new WP_Query([
	'post_type' => 'usp',
	'posts_per_page' => 2,

]);


if ($usps->have_posts()) { ?>

		<div class="wrapper" id="wrapper-usps">
			<div class="container">
				<div class="row">

					<?php while ($usps->have_posts()) {
						$usps->the_post();	
						get_template_part('loop-templates/content', 'jm_usp');
					}
					wp_reset_postdata(); ?>
				</div>
			</div>
		</div>

<?php } ?>