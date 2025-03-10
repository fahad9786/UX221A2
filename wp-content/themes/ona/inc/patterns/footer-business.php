<?php
/**
 * Footer business
 */

return array(
	'title'      => __( 'Footer business', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px"}}},"backgroundColor":"dark"} -->
			<div class="wp-block-group has-dark-background-color has-background" style="padding-top:100px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"80px"}}},"layout":{"contentSize":"1170px","type":"constrained"}} -->
			<div class="wp-block-group" style="padding-bottom:80px">

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.2"}},"textColor":"light","fontSize":"large"} -->
			<h2 class="wp-block-heading has-text-align-center has-light-color has-text-color has-large-font-size" style="line-height:1.2">' . esc_html__( 'Let’s get started on something great', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"48px"}}},"textColor":"light"} -->
			<p class="has-text-align-center has-light-color has-text-color" style="margin-bottom:48px;font-size:1.125rem">' . esc_html__( 'Join over 5876+ startups already growing with untitled.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"20px"}}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button">' . esc_html__( 'View Demos', 'ona' ) . '</a></div>
			<!-- /wp:button -->

			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Get Started', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"20px"}}},"layout":{"contentSize":"1170px","type":"constrained"}} -->
			<div class="wp-block-group" style="padding-bottom:20px">

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"20px","bottom":"40px"}},"color":{"background":"#e8e8e836"}},"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:20px;margin-bottom:40px;background-color:#e8e8e836;color:#e8e8e836"/>
			<!-- /wp:separator -->

			<!-- wp:columns {"verticalAlignment":"center"} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","className":"ona-copyright ona-sm-down-text-align-center","fontSize":"small"} -->
			<p class="ona-copyright ona-sm-down-text-align-center has-text-light-color has-text-color has-link-color has-small-font-size">' . sprintf( __( '© %d Powered by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com/wordpress-themes/ona-block-wordpress-theme/" style="color:inherit">' . esc_html__( 'Ona WordPress theme', 'ona' ) . '</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%">
			<!-- wp:navigation {"textColor":"text-light","overlayMenu":"never","className":"ona-sm-down-justify-content-center","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"20px"}},"fontSize":"small"} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Privacy Policy', 'ona' ) . '","url":"Privacy%20Policy","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Terms \u0026amp; Conditions', 'ona' ) . '","url":"Terms%20\u0026%20Conditions","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->			
			</div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			
			</div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
);



