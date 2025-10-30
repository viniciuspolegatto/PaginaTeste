<?php
/**
 * Title: Header Simple
 * Slug: portfolio-wp/header-simple
 * Categories: portfolio-wp-headers
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["portfolio-wp-headers"],"patternName":"portfolio-wp/header-simple","name":"Header Simple"},"className":"header-wrapper","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"32px","right":"32px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group header-wrapper has-white-background-color has-background" style="padding-top:24px;padding-right:32px;padding-bottom:24px;padding-left:32px"><!-- wp:group {"align":"wide","className":"site-nav-bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide site-nav-bar"><!-- wp:group {"className":"site-logo-wrapper","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group site-logo-wrapper"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false} /-->

<!-- wp:site-title /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"site-nav-wrapper","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group site-nav-wrapper"><!-- wp:html -->
<i class="fa-regular fa-envelope has-medium-font-size" style="margin-top: 4px;"></i>
<!-- /wp:html -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><a href="<?php echo esc_url( 'mailto:yourname@email.com' ); ?>">yourname@email.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
