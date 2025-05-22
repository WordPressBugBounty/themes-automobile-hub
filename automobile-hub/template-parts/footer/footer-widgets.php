<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */
?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$automobile_hub_no_of_footer_col = get_theme_mod('automobile_hub_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$automobile_hub_col_lg_footer_class = 'col-lg-' . (12 / $automobile_hub_no_of_footer_col);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$automobile_hub_col_md_footer_class = 'col-md-' . (12 / $automobile_hub_no_of_footer_col);
?>
<div class="container">
    <aside class="widget-area row py-2 pt-3" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'automobile-hub' ); ?>">
        <?php
        $automobile_hub_default_widgets = array(
            1 => 'search',
            2 => 'archives',
            3 => 'meta',
            4 => 'categories'
        );

        for ($automobile_hub_i = 1; $automobile_hub_i <= $automobile_hub_no_of_footer_col; $automobile_hub_i++) :
            $automobile_hub_lg_class = esc_attr($automobile_hub_col_lg_footer_class);
            $automobile_hub_md_class = esc_attr($automobile_hub_col_md_footer_class);
            echo '<div class="col-12 ' . $automobile_hub_lg_class . ' ' . $automobile_hub_md_class . '">';

            if (is_active_sidebar('footer-' . $automobile_hub_i)) {
                dynamic_sidebar('footer-' . $automobile_hub_i);
            } else {
                // Display default widget content if not active.
                switch ($automobile_hub_default_widgets[$automobile_hub_i] ?? '') {
                    case 'search':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Search', 'automobile-hub'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Search', 'automobile-hub'); ?></h3>
                            <?php get_search_form(); ?>
                        </aside>
                        <?php
                        break;

                    case 'archives':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Archives', 'automobile-hub'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Archives', 'automobile-hub'); ?></h3>
                            <ul><?php wp_get_archives(['type' => 'monthly']); ?></ul>
                        </aside>
                        <?php
                        break;

                    case 'meta':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Meta', 'automobile-hub'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Meta', 'automobile-hub'); ?></h3>
                            <ul>
                                <?php wp_register(); ?>
                                <li><?php wp_loginout(); ?></li>
                                <?php wp_meta(); ?>
                            </ul>
                        </aside>
                        <?php
                        break;

                    case 'categories':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Categories', 'automobile-hub'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Categories', 'automobile-hub'); ?></h3>
                            <ul><?php wp_list_categories(['title_li' => '']); ?></ul>
                        </aside>
                        <?php
                        break;
                }
            }

            echo '</div>';
        endfor;
        ?>
    </aside>
</div>