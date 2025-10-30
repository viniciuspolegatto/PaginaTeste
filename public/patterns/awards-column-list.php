<?php
/**
 * Title: Awards Column List
 * Slug: portfolio-wp/awards-column-list
 * Categories: portfolio-wp-awards
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"award-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull award-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"10%"} -->
        <div class="wp-block-column" style="flex-basis:10%">
            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><strong><?php echo esc_html__( 'Awards', 'portfolio-wp' ); ?></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"","style":{"border":{"right":{"width":"2px"}}}} -->
        <div class="wp-block-column" style="border-right-width:2px"></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"90%"} -->
        <div class="wp-block-column" style="flex-basis:90%">
            <!-- wp:paragraph {"fontSize":"medium-large"} -->
            <p class="has-medium-large-font-size"><?php echo esc_html__( 'Typewolf: site of the day', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'Hover States', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'Awwwards Honorable Mention', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'Awwwards Honorable Mention', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'Webby Awards Honoree', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'Mindsparkle Mag', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'CSS Winner', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'CSS Design Awards Nominee', 'portfolio-wp' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
