<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */

get_header(); ?>

<div class="container">
	<main id="tp_content" role="main">
		<div id="primary" class="content-area">
			<section class="error-404 not-found">
				<h1 class="page-title text-center pt-3"><?php echo esc_html(get_theme_mod('automobile_hub_not_found_title',__('Oops! That page can&rsquo;t be found.','automobile-hub')));?></h1>
				<div class="page-content text-center">
					<p class="py-3"><?php echo esc_html(get_theme_mod('automobile_hub_not_found_text',__('It looks like nothing was found at this location. Maybe try a search?','automobile-hub')));?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
		</div>
	</main>
</div>

<?php get_footer();