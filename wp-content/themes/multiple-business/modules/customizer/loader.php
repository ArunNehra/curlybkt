<?php
/**
* Loads all the components related to customizer 
*
* @since Multiple Business 1.0.0
*/
require get_parent_theme_file_path( '/modules/customizer/framework/customizer.php' );
require get_parent_theme_file_path( '/modules/customizer/panels/panels.php' );
require get_parent_theme_file_path( '/modules/customizer/sections/sections.php' );

require get_parent_theme_file_path( '/modules/customizer/settings/general.php' );
require get_parent_theme_file_path( '/modules/customizer/settings/frontpage.php' );
require get_parent_theme_file_path( '/modules/customizer/defaults/defaults.php' );


function multiple_business_modify_default_settings( $wp_customize ){

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Background', 'multiple-business' );
}
add_action( 'multiple_business_customize_register', 'multiple_business_modify_default_settings' );

function multiple_business_default_styles(){
	
	$site_title_color    = multiple_business_get_option( 'site_title_color' );
	$site_tagline_color  = multiple_business_get_option( 'site_tagline_color' );
	$primary_color       = multiple_business_get_option( 'site_primary_color' );
	$alternative_color   = multiple_business_get_option( 'site_alternative_color' );
	$hover_color         = multiple_business_get_option( 'site_hover_color' );
	
	?>
	<style type="text/css">
		.offcanvas-menu-open .kt-offcanvas-overlay {
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    background: rgba(0, 0, 0, 0.7);
		    opacity: 1;
		    z-index: 99991;
		    top: 0px;
		}
		.kt-offcanvas-overlay {
		    width: 0;
		    height: 0;
		    opacity: 0;
		    transition: opacity 0.5s;
		}
		.masonry-grid.wrap-post-list {
			width: 100% !important;
		}

		/*======================================*/
		/* Site title color */
		/*======================================*/
		.site-header .site-branding .site-title,
		.site-header .site-branding .site-title a {
			color: <?php echo esc_attr( $site_title_color ); ?>;
		}

		/*======================================*/
		/* Tagline color */
		/*======================================*/
		.site-header:not(.site-header-two) .site-branding .site-description {
			color: <?php echo esc_attr( $site_tagline_color ); ?>;
		}

		/*======================================*/
		/* Primary color */
		/*======================================*/

		/* Background */
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.default-button,
		.button-primary,
		.widget.widget_mc4wp_form_widget input[type="submit"],
		.woocommerce ul.products li.product .button,
		.wrap-detail-page form input[type="submit"],
		.wrap-detail-page .wpcf7 input[type="submit"],
		.woocommerce ul.products li.product a.added_to_cart,
		.wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"],
		.comments-area .comment-respond .comment-form .submit,
		.contact-form-section input[type="submit"],
		.woocommerce #respond input#submit,
		.woocommerce input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.woocommerce .cart .button,
		.woocommerce .cart input.button,
		.woocommerce button.button.alt,
		.woocommerce a.button.alt,
		.woocommerce input.button.alt,
		.kt-contact-form-area .form-group input.form-control[type="submit"],
		.wrap-detail-page form input[type="submit"],
		.wrap-detail-page .wpcf7 input[type="submit"],
		.header-bottom-right .cart-icon a .count,
		figcaption, .page-numbers.current, .page-numbers:hover.current, .page-numbers:focus.current, .page-numbers:active.current,
		.woocommerce ul.products li.product .onsale, body.single article.hentry .post-text a.wp-block-button__link, .page article.hentry .post-text a.wp-block-button__link, #blog-post article.hentry .post-text a.wp-block-button__link, .search article.hentry .post-text a.wp-block-button__link, .archive article.hentry .post-text a.wp-block-button__link, .tag article.hentry .post-text a.wp-block-button__link, .category article.hentry .post-text a.wp-block-button__link,
		article.hentry #ak-blog-post .post-text a.wp-block-button__link, body.single article.hentry .post-text .page-links > .page-number, .page article.hentry .post-text .page-links > .page-number, #blog-post article.hentry .post-text .page-links > .page-number, .search article.hentry .post-text .page-links > .page-number, .archive article.hentry .post-text .page-links > .page-number, .tag article.hentry .post-text .page-links > .page-number, .category article.hentry .post-text .page-links > .page-number,
		article.hentry #ak-blog-post .post-text .page-links > .page-number, article.hentry.sticky .post-thumb:before, article.hentry.sticky .post-format-outer > span a,
		body.single .post-footer span.cat-links:before, .comments-area .comment-list .reply a, .searchform .search-button,
		.block-testimonial .owl-pager .owl-dot.active span, .block-testimonial .owl-pager .owl-dot:hover span, .block-testimonial .owl-pager .owl-dot:focus span, .block-testimonial .owl-pager .owl-dot:active span, 
		.single-post-wrap .post-format-outer, #go-top span:hover, #go-top span:focus, #go-top span:active, .widget.widget_calendar tbody a, .block-contact .contact-details-wrap {
			background-color: <?php echo esc_attr( $primary_color ); ?>
		}

		/* Border */
		.button-primary,
		.button-outline,
		.wrap-detail-page .wpcf7 input[type="submit"],
		.woocommerce ul.products li.product .button,
		.woocommerce ul.products li.product a.added_to_cart,
		.wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"],
		.comments-area .comment-respond .comment-form .submit,
		.contact-form-section input[type="submit"],
		.kt-contact-form-area .form-group input.form-control[type="submit"],
		.wrap-detail-page .wpcf7 input[type="submit"],
		.page-numbers.current,
		.page-numbers:hover.current, .page-numbers:focus.current, .page-numbers:active.current,
		body.single article.hentry .post-text .page-links > .page-number, .page article.hentry .post-text .page-links > .page-number, #blog-post article.hentry .post-text .page-links > .page-number, .search article.hentry .post-text .page-links > .page-number, .archive article.hentry .post-text .page-links > .page-number, .tag article.hentry .post-text .page-links > .page-number, .category article.hentry .post-text .page-links > .page-number, .block-highlight .controls [class*="owl-"]:before,
		article.hentry #ak-blog-post .post-text .page-links > .page-number,
		#go-top span:hover, #go-top span:focus, #go-top span:active,
		.main-navigation nav ul ul, .block-service .post-content-inner .icon-content-area {
			border-color: <?php echo esc_attr( $primary_color ); ?>
		}

		/* Text */
		.woocommerce ul.products li.product .price .amount,
		.woocommerce ul.products li.product .price ins .amount,
		body.single article.hentry .post-text a, .page article.hentry .post-text a, #blog-post article.hentry .post-text a, .search article.hentry .post-text a, .archive article.hentry .post-text a, .tag article.hentry .post-text a, .category article.hentry .post-text a,
		article.hentry #ak-blog-post .post-text a,
		.comments-area .comment-respond .logged-in-as a,
		.widget.widget_calendar tfoot a,
		.widget.widget_rss li a, .block-highlight .controls [class*="owl-"]:before,
		.offcanvas-navigation li.current_page_item > a, 
		.offcanvas-navigation li.current-menu-item > a, 
		.offcanvas-navigation li.current_page_ancestor > a, 
		.offcanvas-navigation li.current-menu-ancestor > a {
			color: <?php echo esc_attr( $primary_color ); ?>
		}

		/*======================================*/
		/* Alternative color */
		/*======================================*/

		/* Background */
		.section-title:before,
		.section-title:after,
		.block-service .post-content-inner .icon-content-area:after {
			background-color: <?php echo esc_attr( $alternative_color ); ?>
		}

		/* Border */
		.accordion-section .card-header .btn,
		.accordion-section .card-header .btn.collapsed:hover {
			border-color: <?php echo esc_attr( $alternative_color ); ?>
		}

		/*======================================*/
		/* Hover color */
		/*======================================*/

		/* Background */
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover, .button:hover, .default-button:hover, .button-primary:hover, .button-light:hover, .button-outline:hover, .comments-area .comment-list .reply a:hover, input[type="button"]:focus,
		input[type="reset"]:focus,
		input[type="submit"]:focus, .button:focus, .default-button:focus, .button-primary:focus, .button-light:focus, .button-outline:focus, .comments-area .comment-list .reply a:focus, input[type="button"]:active,
		input[type="reset"]:active,
		input[type="submit"]:active, .button:active, .default-button:active, .button-primary:active, .button-light:active, .button-outline:active, .comments-area .comment-list .reply a:active,
		.wrap-detail-page form input[type="submit"]:hover, .wrap-detail-page form input[type="submit"]:focus, .wrap-detail-page form input[type="submit"]:active,
		.button-primary:hover, .button-primary:focus, .button-primary:active,
		.page-numbers:hover, .page-numbers:focus, .page-numbers:active,
		.wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"]:hover, .wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"]:focus, .wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"]:active,
		.wrap-detail-page .wpcf7 input[type="submit"]:hover, .wrap-detail-page .wpcf7 input[type="submit"]:active, .wrap-detail-page .wpcf7 input[type="submit"]:focus,
		.wrap-detail-page .wpcf7-form input.wpcf7-form-control[type="submit"]:hover, .wrap-detail-page .wpcf7-form input.wpcf7-form-control[type="submit"]:focus, .wrap-detail-page .wpcf7-form input.wpcf7-form-control[type="submit"]:active,
		.infinite-scroll #infinite-handle span:hover, .infinite-scroll #infinite-handle span:focus, .infinite-scroll #infinite-handle span:active,
		.widget.widget_mc4wp_form_widget input[type="submit"]:hover, .widget.widget_mc4wp_form_widget input[type="submit"]:focus, .widget.widget_mc4wp_form_widget input[type="submit"]:active,
		.woocommerce ul.products li.product .onsale:hover, .woocommerce ul.products li.product .onsale:focus, .woocommerce ul.products li.product .onsale:active,
		.woocommerce ul.products li.product .button:hover, .woocommerce ul.products li.product .button:active,
		.woocommerce ul.products li.product a.added_to_cart:hover, .woocommerce ul.products li.product a.added_to_cart:focus, .woocommerce ul.products li.product a.added_to_cart:active,
		.woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus, .woocommerce #respond input#submit:active,
		.woocommerce input#submit:hover, .woocommerce input#submit:focus, .woocommerce input#submit:active,
		.woocommerce a.button:hover, .woocommerce a.button:focus, .woocommerce a.button:active,
		.woocommerce button.button:hover, .woocommerce button.button:focus, .woocommerce button.button:active,
		.woocommerce input.button:hover, .woocommerce input.button:focus, .woocommerce input.button:active,
		.woocommerce .cart .button:hover, .woocommerce .cart .button:focus, .woocommerce .cart .button:active,
		.woocommerce .cart input.button:hover, .woocommerce .cart input.button:focus, .woocommerce .cart input.button:active,
		.woocommerce button.button.alt:hover, .woocommerce button.button.alt:focus, .woocommerce button.button.alt:active,
		.woocommerce a.button.alt:hover, .woocommerce a.button.alt:focus, .woocommerce a.button.alt:active,
		.woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus, .woocommerce input.button.alt:active,
		body.single article.hentry .post-text .page-links .page-number:hover, body.single article.hentry .post-text .page-links .page-number:focus, body.single article.hentry .post-text .page-links .page-number:active, .page article.hentry .post-text .page-links .page-number:hover, .page article.hentry .post-text .page-links .page-number:focus, .page article.hentry .post-text .page-links .page-number:active, #blog-post article.hentry .post-text .page-links .page-number:hover, #blog-post article.hentry .post-text .page-links .page-number:focus, #blog-post article.hentry .post-text .page-links .page-number:active, .search article.hentry .post-text .page-links .page-number:hover, .search article.hentry .post-text .page-links .page-number:focus, .search article.hentry .post-text .page-links .page-number:active, .archive article.hentry .post-text .page-links .page-number:hover, .archive article.hentry .post-text .page-links .page-number:focus, .archive article.hentry .post-text .page-links .page-number:active, .tag article.hentry .post-text .page-links .page-number:hover, .tag article.hentry .post-text .page-links .page-number:focus, .tag article.hentry .post-text .page-links .page-number:active, .category article.hentry .post-text .page-links .page-number:hover, .category article.hentry .post-text .page-links .page-number:focus, .category article.hentry .post-text .page-links .page-number:active,
		article.hentry #ak-blog-post .post-text .page-links .page-number:hover,
		article.hentry #ak-blog-post .post-text .page-links .page-number:focus,
		article.hentry #ak-blog-post .post-text .page-links .page-number:active,
		body.single article.hentry .post-text .page-links > .page-number:hover, body.single article.hentry .post-text .page-links > .page-number:focus, body.single article.hentry .post-text .page-links > .page-number:active, .page article.hentry .post-text .page-links > .page-number:hover, .page article.hentry .post-text .page-links > .page-number:focus, .page article.hentry .post-text .page-links > .page-number:active, #blog-post article.hentry .post-text .page-links > .page-number:hover, #blog-post article.hentry .post-text .page-links > .page-number:focus, #blog-post article.hentry .post-text .page-links > .page-number:active, .search article.hentry .post-text .page-links > .page-number:hover, .search article.hentry .post-text .page-links > .page-number:focus, .search article.hentry .post-text .page-links > .page-number:active, .archive article.hentry .post-text .page-links > .page-number:hover, .archive article.hentry .post-text .page-links > .page-number:focus, .archive article.hentry .post-text .page-links > .page-number:active, .tag article.hentry .post-text .page-links > .page-number:hover, .tag article.hentry .post-text .page-links > .page-number:focus, .tag article.hentry .post-text .page-links > .page-number:active, .category article.hentry .post-text .page-links > .page-number:hover, .category article.hentry .post-text .page-links > .page-number:focus, .category article.hentry .post-text .page-links > .page-number:active,
		article.hentry #ak-blog-post .post-text .page-links > .page-number:hover,
		article.hentry #ak-blog-post .post-text .page-links > .page-number:focus,
		article.hentry #ak-blog-post .post-text .page-links > .page-number:active,
		body.single .post-footer span.cat-links a:hover, body.single .post-footer span.cat-links a:focus, body.single .post-footer span.cat-links a:active,
		.comments-area .comment-respond .comment-form .submit:hover, .comments-area .comment-respond .comment-form .submit:focus, .comments-area .comment-respond .comment-form .submit:active,
		.searchform .search-button:hover, .searchform .search-button:focus, .searchform .search-button:active,
		.widget li:hover:before, .widget li:focus:before, .widget li:active:before,
		.widget.widget_calendar tbody a:hover, .widget.widget_calendar tbody a:focus, .widget.widget_calendar tbody a:active,
		.block-slider .controls .owl-prev:hover:before, .block-slider .controls .owl-prev:focus:before, .block-slider .controls .owl-prev:active:before,
		.block-slider .controls .owl-next:hover:before,
		.block-slider .controls .owl-next:focus:before,
		.block-slider .controls .owl-next:active:before,
		.block-slider #kt-slide-pager .owl-dot span:hover, .block-slider #kt-slide-pager .owl-dot span:focus, .block-slider #kt-slide-pager .owl-dot span:active,
		.block-slider #kt-slide-pager .owl-dot.active span:hover, .block-slider #kt-slide-pager .owl-dot.active span:focus, .block-slider #kt-slide-pager .owl-dot.active span:active,
		.top-footer .widget .search-button:hover, .top-footer .widget .search-button:focus, .top-footer .widget .search-button:active,
		.kt-contact-form-area .form-group input.form-control[type="submit"]:hover, .kt-contact-form-area .form-group input.form-control[type="submit"]:focus, .kt-contact-form-area .form-group input.form-control[type="submit"]:active,
		.block-slider .slide-item .cat a:hover, .block-slider .slide-item .cat a:focus, .block-slider .slide-item .cat a:active, {
			background-color: <?php echo esc_attr( $hover_color ); ?>
		}

		/* Border */
		.wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"]:hover, .wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"]:focus, .wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"]:active,
		.wrap-detail-page .wpcf7-form input.wpcf7-form-control[type="submit"]:hover, .wrap-detail-page .wpcf7-form input.wpcf7-form-control[type="submit"]:focus, .wrap-detail-page .wpcf7-form input.wpcf7-form-control[type="submit"]:active,
		.wrap-detail-page .wpcf7 input[type="submit"]:hover, .wrap-detail-page .wpcf7 input[type="submit"]:active, .wrap-detail-page .wpcf7 input[type="submit"]:focus,
		.wrap-detail-page form input[type="submit"]:hover, .wrap-detail-page form input[type="submit"]:focus, .wrap-detail-page form input[type="submit"]:active,
		.socialgroup a:hover, .socialgroup a:focus, .socialgroup a:active,
		.button-primary:hover, .button-primary:focus, .button-primary:active,
		.button-outline:hover, .button-outline:focus, .button-outline:active ,
		.page-numbers:hover, .page-numbers:focus, .page-numbers:active,
		.widget .bbp-login-links a:hover, .widget .bbp-login-links a:focus, .widget .bbp-login-links a:active,
		.widget.widget_mc4wp_form_widget input[type="submit"]:hover, .widget.widget_mc4wp_form_widget input[type="submit"]:focus, .widget.widget_mc4wp_form_widget input[type="submit"]:active,
		.woocommerce ul.products li.product .button:hover, .woocommerce ul.products li.product .button:active,
		.woocommerce ul.products li.product a.added_to_cart:hover, .woocommerce ul.products li.product a.added_to_cart:focus, .woocommerce ul.products li.product a.added_to_cart:active,
		.woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus, .woocommerce #respond input#submit:active,
		.woocommerce input#submit:hover, .woocommerce input#submit:focus, .woocommerce input#submit:active, 
		.woocommerce a.button:hover, .woocommerce a.button:focus, .woocommerce a.button:active,
		.woocommerce button.button:hover, .woocommerce button.button:focus, .woocommerce button.button:active,
		.woocommerce input.button:hover, .woocommerce input.button:focus, .woocommerce input.button:active,
		.woocommerce .cart .button:hover, .woocommerce .cart .button:focus, .woocommerce .cart .button:active,
		.woocommerce .cart input.button:hover, .woocommerce .cart input.button:focus, .woocommerce .cart input.button:active,
		.woocommerce button.button.alt:hover, .woocommerce button.button.alt:focus, .woocommerce button.button.alt:active,
		.woocommerce a.button.alt:hover, .woocommerce a.button.alt:focus, .woocommerce a.button.alt:active,
		.woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus, .woocommerce input.button.alt:active,
		body.single article.hentry .post-text .page-links .page-number:hover, body.single article.hentry .post-text .page-links .page-number:focus, body.single article.hentry .post-text .page-links .page-number:active, .page article.hentry .post-text .page-links .page-number:hover, .page article.hentry .post-text .page-links .page-number:focus, .page article.hentry .post-text .page-links .page-number:active, #blog-post article.hentry .post-text .page-links .page-number:hover, #blog-post article.hentry .post-text .page-links .page-number:focus, #blog-post article.hentry .post-text .page-links .page-number:active, .search article.hentry .post-text .page-links .page-number:hover, .search article.hentry .post-text .page-links .page-number:focus, .search article.hentry .post-text .page-links .page-number:active, .archive article.hentry .post-text .page-links .page-number:hover, .archive article.hentry .post-text .page-links .page-number:focus, .archive article.hentry .post-text .page-links .page-number:active, .tag article.hentry .post-text .page-links .page-number:hover, .tag article.hentry .post-text .page-links .page-number:focus, .tag article.hentry .post-text .page-links .page-number:active, .category article.hentry .post-text .page-links .page-number:hover, .category article.hentry .post-text .page-links .page-number:focus, .category article.hentry .post-text .page-links .page-number:active,
		article.hentry #ak-blog-post .post-text .page-links .page-number:hover,
		article.hentry #ak-blog-post .post-text .page-links .page-number:focus,
		article.hentry #ak-blog-post .post-text .page-links .page-number:active,
		body.single article.hentry .post-text .page-links > .page-number:hover, body.single article.hentry .post-text .page-links > .page-number:focus, body.single article.hentry .post-text .page-links > .page-number:active, .page article.hentry .post-text .page-links > .page-number:hover, .page article.hentry .post-text .page-links > .page-number:focus, .page article.hentry .post-text .page-links > .page-number:active, #blog-post article.hentry .post-text .page-links > .page-number:hover, #blog-post article.hentry .post-text .page-links > .page-number:focus, #blog-post article.hentry .post-text .page-links > .page-number:active, .search article.hentry .post-text .page-links > .page-number:hover, .search article.hentry .post-text .page-links > .page-number:focus, .search article.hentry .post-text .page-links > .page-number:active, .archive article.hentry .post-text .page-links > .page-number:hover, .archive article.hentry .post-text .page-links > .page-number:focus, .archive article.hentry .post-text .page-links > .page-number:active, .tag article.hentry .post-text .page-links > .page-number:hover, .tag article.hentry .post-text .page-links > .page-number:focus, .tag article.hentry .post-text .page-links > .page-number:active, .category article.hentry .post-text .page-links > .page-number:hover, .category article.hentry .post-text .page-links > .page-number:focus, .category article.hentry .post-text .page-links > .page-number:active,
		article.hentry #ak-blog-post .post-text .page-links > .page-number:hover,
		article.hentry #ak-blog-post .post-text .page-links > .page-number:focus,
		article.hentry #ak-blog-post .post-text .page-links > .page-number:active,
		body.single .post-footer span.cat-links a:hover, body.single .post-footer span.cat-links a:focus, body.single .post-footer span.cat-links a:active,
		.comments-area .comment-respond .comment-form .submit:hover, .comments-area .comment-respond .comment-form .submit:focus, .comments-area .comment-respond .comment-form .submit:active,
		.widget li:hover:before, .widget li:focus:before, .widget li:active:before,
		.widget.widget_tag_cloud .tagcloud a:hover, .widget.widget_tag_cloud .tagcloud a:focus, .widget.widget_tag_cloud .tagcloud a:active,
		.widget.widget_tag_cloud .tagcloud a:hover, .widget.widget_tag_cloud .tagcloud a:focus, .widget.widget_tag_cloud .tagcloud a:active,
		.header-bottom-right .cart-icon a:hover .count, .header-bottom-right .cart-icon a:focus .count, .header-bottom-right .cart-icon a:active .count,
		.header-bottom-right .header-search-wrap .search-icon:hover, .header-bottom-right .header-search-wrap .search-icon:focus, .header-bottom-right .header-search-wrap .search-icon:active,
		.site-header.site-header-two .header-bottom-right .header-search-wrap .search-icon:hover, .site-header.site-header-two .header-bottom-right .header-search-wrap .search-icon:focus, .site-header.site-header-two .header-bottom-right .header-search-wrap .search-icon:active,
		.block-slider .home-slider .post-title .button-outline:hover, .block-slider .home-slider .post-title .button-outline:focus, .block-slider .home-slider .post-title .button-outline:active,
		.block-slider .home-slider .content .button-outline:hover,
		.block-slider .home-slider .content .button-outline:focus,
		.block-slider .home-slider .content .button-outline:active,
		.block-slider .home-slider .button-container .button-outline:hover,
		.block-slider .home-slider .button-container .button-outline:focus,
		.block-slider .home-slider .button-container .button-outline:active,
		.block-slider #kt-slide-pager .owl-dot span:hover, .block-slider #kt-slide-pager .owl-dot span:focus, .block-slider #kt-slide-pager .owl-dot span:active,
		.site-footer .socialgroup ul li a:hover, .site-footer .socialgroup ul li a:focus, .site-footer .socialgroup ul li a:active,
		.block-callback .button-container .button-outline:hover, .block-callback .button-container .button-outline:focus, .block-callback .button-container .button-outline:active,
		.block-highlight .controls [class*="owl-"]:not(.disabled):hover:before, .block-highlight .controls [class*="owl-"]:not(.disabled):focus:before, .block-highlight .controls [class*="owl-"]:not(.disabled):active:before,
		.kt-contact-form-area .form-group input.form-control[type="submit"]:hover, .kt-contact-form-area .form-group input.form-control[type="submit"]:focus, .kt-contact-form-area .form-group input.form-control[type="submit"]:active {
			border-color: <?php echo esc_attr( $hover_color ); ?>
		}

		/* Text */
		a:hover, a:focus, a:active,
		.socialgroup a:hover, .socialgroup a:focus, .socialgroup a:active,
		a.button-text:hover, a.button-text:focus, a.button-text:active, .button-text:hover, .button-text:focus, .button-text:active,
		a.button-text:hover:after, a.button-text:focus:after, a.button-text:active:after, .button-text:hover:after, .button-text:focus:after, .button-text:active:after,
		h1 a:hover, h1 a:focus, h1 a:active, h2 a:hover, body.woocommerce.single-product .product_title a:hover, h2 a:focus, body.woocommerce.single-product .product_title a:focus, h2 a:active, body.woocommerce.single-product .product_title a:active, h3 a:hover, h3 a:focus, h3 a:active, h4 a:hover, h4 a:focus, h4 a:active, h5 a:hover, h5 a:focus, h5 a:active, h6 a:hover, h6 a:focus, h6 a:active,
		body.bbpress article.hentry .post-text a:hover, body.bbpress article.hentry .post-text a:focus, body.bbpress article.hentry .post-text a:active,
		.woocommerce ul.products li.product h2:hover, body.woocommerce.single-product ul.products li.product .product_title:hover, .woocommerce ul.products li.product h2:focus, body.woocommerce.single-product ul.products li.product .product_title:focus, .woocommerce ul.products li.product h2:active, body.woocommerce.single-product ul.products li.product .product_title:active, .woocommerce ul.products li.product .woocommerce-loop-product__title:hover,
		.woocommerce ul.products li.product .woocommerce-loop-product__title:focus, .woocommerce ul.products li.product .woocommerce-loop-product__title:active,
		.woocommerce ul.products li.product .price del .amount:hover, .woocommerce ul.products li.product .price ins .amount:hover, .woocommerce ul.products li.product .price del .amount:focus, .woocommerce ul.products li.product .price ins .amount:focus, .woocommerce ul.products li.product .price del .amount:active, .woocommerce ul.products li.product .price ins .amount:active,
		body.single article.hentry .post-text a.wp-block-button__link:hover, body.single article.hentry .post-text a.wp-block-button__link:focus, body.single article.hentry .post-text a.wp-block-button__link:active, .page article.hentry .post-text a.wp-block-button__link:hover, .page article.hentry .post-text a.wp-block-button__link:focus, .page article.hentry .post-text a.wp-block-button__link:active, #blog-post article.hentry .post-text a.wp-block-button__link:hover, #blog-post article.hentry .post-text a.wp-block-button__link:focus, #blog-post article.hentry .post-text a.wp-block-button__link:active, .search article.hentry .post-text a.wp-block-button__link:hover, .search article.hentry .post-text a.wp-block-button__link:focus, .search article.hentry .post-text a.wp-block-button__link:active, .archive article.hentry .post-text a.wp-block-button__link:hover, .archive article.hentry .post-text a.wp-block-button__link:focus, .archive article.hentry .post-text a.wp-block-button__link:active, .tag article.hentry .post-text a.wp-block-button__link:hover, .tag article.hentry .post-text a.wp-block-button__link:focus, .tag article.hentry .post-text a.wp-block-button__link:active, .category article.hentry .post-text a.wp-block-button__link:hover, .category article.hentry .post-text a.wp-block-button__link:focus, .category article.hentry .post-text a.wp-block-button__link:active,
		article.hentry #ak-blog-post .post-text a.wp-block-button__link:hover,
		article.hentry #ak-blog-post .post-text a.wp-block-button__link:focus,
		article.hentry #ak-blog-post .post-text a.wp-block-button__link:active,
		body.single article.hentry .post-text a:hover, body.single article.hentry .post-text a:focus, body.single article.hentry .post-text a:active, .page article.hentry .post-text a:hover, .page article.hentry .post-text a:focus, .page article.hentry .post-text a:active, #blog-post article.hentry .post-text a:hover, #blog-post article.hentry .post-text a:focus, #blog-post article.hentry .post-text a:active, .search article.hentry .post-text a:hover, .search article.hentry .post-text a:focus, .search article.hentry .post-text a:active, .archive article.hentry .post-text a:hover, .archive article.hentry .post-text a:focus, .archive article.hentry .post-text a:active, .tag article.hentry .post-text a:hover, .tag article.hentry .post-text a:focus, .tag article.hentry .post-text a:active, .category article.hentry .post-text a:hover, .category article.hentry .post-text a:focus, .category article.hentry .post-text a:active,
		article.hentry #ak-blog-post .post-text a:hover,
		article.hentry #ak-blog-post .post-text a:focus,
		article.hentry #ak-blog-post .post-text a:active,
		body.single article.hentry .post-text a.button-text:hover, body.single article.hentry .post-text a.button-text:focus, body.single article.hentry .post-text a.button-text:active, .page article.hentry .post-text a.button-text:hover, .page article.hentry .post-text a.button-text:focus, .page article.hentry .post-text a.button-text:active, #blog-post article.hentry .post-text a.button-text:hover, #blog-post article.hentry .post-text a.button-text:focus, #blog-post article.hentry .post-text a.button-text:active, .search article.hentry .post-text a.button-text:hover, .search article.hentry .post-text a.button-text:focus, .search article.hentry .post-text a.button-text:active, .archive article.hentry .post-text a.button-text:hover, .archive article.hentry .post-text a.button-text:focus, .archive article.hentry .post-text a.button-text:active, .tag article.hentry .post-text a.button-text:hover, .tag article.hentry .post-text a.button-text:focus, .tag article.hentry .post-text a.button-text:active, .category article.hentry .post-text a.button-text:hover, .category article.hentry .post-text a.button-text:focus, .category article.hentry .post-text a.button-text:active,
		article.hentry #ak-blog-post .post-text a.button-text:hover,
		article.hentry #ak-blog-post .post-text a.button-text:focus,
		article.hentry #ak-blog-post .post-text a.button-text:active,
		.wp-audio-playlist .wp-playlist-item a:hover, .wp-audio-playlist .wp-playlist-item a:focus, .wp-audio-playlist .wp-playlist-item a:active,
		.wp-audio-playlist .wp-playlist-item .wp-playlist-caption:hover,
		.wp-audio-playlist .wp-playlist-item .wp-playlist-caption:focus,
		.wp-audio-playlist .wp-playlist-item .wp-playlist-caption:active,
		.post-footer a:hover, .post-footer a:focus, .post-footer a:active,
		.cat-links > a:hover:before, .cat-links > a:focus:before, .cat-links > a:active:before,
		.tag-links > a:hover:before,
		.tag-links > a:focus:before,
		.tag-links > a:active:before,
		.comment-link > a:hover:before,
		.comment-link > a:focus:before,
		.comment-link > a:active:before,
		.posted-on > a:hover:before,
		.posted-on > a:focus:before,
		.posted-on > a:active:before,
		.nav-links .nav-previous a:hover, 
		.nav-links .nav-previous a:focus, 
		.nav-links .nav-previous a:active, 
		.nav-links .nav-next a:hover, 
		.nav-links .nav-next a:focus, 
		.nav-links .nav-next a:active,
		.nav-previous:hover:before, .nav-previous:focus:before, .nav-previous:active:before,
		.nav-next:hover:before,
		.nav-next:focus:before,
		.nav-next:active:before,
		.comments-area .comment-list .comment-metadata a:hover, .comments-area .comment-list .comment-metadata a:focus, .comments-area .comment-list .comment-metadata a:active,
		.related-post .related-post-list h3 a:hover, .related-post .related-post-list h3 a:focus, .related-post .related-post-list h3 a:active,
		.wrap-inner-banner .breadcrumbs .trail-items a:hover, .wrap-inner-banner .breadcrumbs .trail-items a:focus, .wrap-inner-banner .breadcrumbs .trail-items a:active,
		.post-content-overlay article.post-content .post-title h2 a:hover, .post-content-overlay article.post-content .post-title body.woocommerce.single-product .product_title a:hover, body.woocommerce.single-product .post-content-overlay article.post-content .post-title .product_title a:hover, .post-content-overlay article.post-content .post-title h2 a:focus, .post-content-overlay article.post-content .post-title body.woocommerce.single-product .product_title a:focus, body.woocommerce.single-product .post-content-overlay article.post-content .post-title .product_title a:focus, .post-content-overlay article.post-content .post-title h2 a:active, .post-content-overlay article.post-content .post-title body.woocommerce.single-product .product_title a:active, body.woocommerce.single-product .post-content-overlay article.post-content .post-title .product_title a:active,
		.post-content-overlay article.post-content .post-footer a:hover, .post-content-overlay article.post-content .post-footer a:focus, .post-content-overlay article.post-content .post-footer a:active, .post-content-overlay article.post-content .post-footer .divider:hover, .post-content-overlay article.post-content .post-footer .divider:focus, .post-content-overlay article.post-content .post-footer .divider:active,
		.widget li:hover > a, .widget li:focus > a, .widget li:active > a,
		.widget.widget_calendar tfoot a:hover, .widget.widget_calendar tfoot a:focus, .widget.widget_calendar tfoot a:active,
		.widget.widget_rss li a:hover, .widget.widget_rss li a:focus, .widget.widget_rss li a:active,
		.widget.widget_rss .widget-title .rsswidget:hover, .widget.widget_rss .widget-title .rsswidget:focus, .widget.widget_rss .widget-title .rsswidget:active,
		.widget.widget_text .textwidget a:hover, .widget.widget_text .textwidget a:focus, .widget.widget_text .textwidget a:active,
		.contact-details .list a:hover, .contact-details .list a:focus, .contact-details .list a:active,
		.site-header .site-branding .site-title:hover, .site-header .site-branding .site-title:active, .site-header .site-branding .site-title:focus,
		.site-header .site-branding .site-title a:hover,
		.site-branding .site-title:hover a, .site-branding .site-title:focus a, .site-branding .site-title:active a,
		.site-header .site-branding .site-title a:active,
		.site-header .site-branding .site-title a:focus,
		.header-bottom-right .cart-icon a:hover, .header-bottom-right .cart-icon a:focus, .header-bottom-right .cart-icon a:active,
		.header-bottom-right .header-search-wrap .search-icon:hover, .header-bottom-right .header-search-wrap .search-icon:focus, .header-bottom-right .header-search-wrap .search-icon:active,
		.site-header.site-header-two .site-branding .site-title a:hover, .site-header.site-header-two .site-branding .site-title a:focus, .site-header.site-header-two .site-branding .site-title a:active,
		.site-header.site-header-two .header-bottom-right .cart-icon a:hover, .site-header.site-header-two .header-bottom-right .cart-icon a:focus, .site-header.site-header-two .header-bottom-right .cart-icon a:active,
		.site-header.site-header-two .header-bottom-right .header-search-wrap .search-icon:hover, .site-header.site-header-two .header-bottom-right .header-search-wrap .search-icon:focus, .site-header.site-header-two .header-bottom-right .header-search-wrap .search-icon:active,
		.site-header.site-header-two .alt-menu-icon a span:hover, .site-header.site-header-two .alt-menu-icon a span:focus, .site-header.site-header-two .alt-menu-icon a span:active,
		body.fixed-nav-active .wrap-fixed-header .site-branding .site-title a:hover, body.fixed-nav-active .wrap-fixed-header .site-branding .site-title a:active, body.fixed-nav-active .wrap-fixed-header .site-branding .site-title a:focus,
		.block-slider .slide-item .author-name a:hover,
		.block-slider .slide-item .author-name a:focus,
		.block-slider .slide-item .author-name a:active,
		.block-slider .slide-item .button-container .post-footer-detail > a:hover, .block-slider .slide-item .button-container .post-footer-detail > a:focus, .block-slider .slide-item .button-container .post-footer-detail > a:active,
		.main-navigation nav ul > li > a:hover, .main-navigation nav ul > li > a:active, .main-navigation nav ul > li > a:focus,
		.main-navigation nav ul ul li a:hover, .main-navigation nav ul ul li a:focus, .main-navigation nav ul ul li a:active,
		.main-navigation nav ul li.current-menu-item > a, .main-navigation nav ul li.current-menu-parent > a,
		#offcanvas-menu .contact-details .list a:hover,
		#offcanvas-menu .top-header-right .socialgroup a:hover,
		.offcanvas-navigation a:hover, .offcanvas-navigation a:focus, .offcanvas-navigation a:active,
		.site-footer .site-branding a:hover, .site-footer .site-branding a:focus, .site-footer .site-branding a:active,
		.site-footer .socialgroup ul li a:hover, .site-footer .socialgroup ul li a:focus, .site-footer .socialgroup ul li a:active,
		.bottom-footer .copyright a:hover, .bottom-footer .copyright a:focus, .bottom-footer .copyright a:active,
		.top-footer .widget ul li a:hover, .top-footer .widget ul li a:focus, .top-footer .widget ul li a:active, .top-footer .widget ol li a:hover, .top-footer .widget ol li a:focus, .top-footer .widget ol li a:active,
		.top-footer .widget .textwidget a:hover, .top-footer .widget .textwidget a:focus, .top-footer .widget .textwidget a:active,
		.top-footer .widget.widget_rss li a:hover, .top-footer .widget.widget_rss li a:focus, .top-footer .widget.widget_rss li a:active,
		.top-footer .widget .rsswidget:hover, .top-footer .widget .rsswidget:focus, .top-footer .widget .rsswidget:active,
		.top-footer .widget .sb-right-thumb-widget .widget-content .post-footer span a:hover, .top-footer .widget .sb-right-thumb-widget .widget-content .post-footer span a:focus, .top-footer .widget .sb-right-thumb-widget .widget-content .post-footer span a:active,
		.top-footer .widget .sb-right-thumb-widget .widget-content a:hover, .top-footer .widget .sb-right-thumb-widget .widget-content a:focus, .top-footer .widget .sb-right-thumb-widget .widget-content a:active,
		.block-highlight .post .meta [class*="meta-"] a:hover,
		.block-highlight .controls [class*="owl-"]:not(.disabled):hover:before, .block-highlight .controls [class*="owl-"]:not(.disabled):focus:before, .block-highlight .controls [class*="owl-"]:not(.disabled):active:before,
		.kt-contact-form-area .form-group .cleaner:hover, .kt-contact-form-area .form-group .cleaner:active, .kt-contact-form-area .form-group .cleaner:focus,
		.kt-contact-form-area .form-group .cleaner:hover span, .kt-contact-form-area .form-group .cleaner:active span, .kt-contact-form-area .form-group .cleaner:focus span,
		.site-branding .site-title:hover a, .site-branding .site-title:focus a, .site-branding .site-title:active a,
		.widget.widget_calendar td a:hover,
		.top-footer .widget .calendar_wrap table td a:hover, .top-footer .widget .calendar_wrap table td a:focus, .top-footer .widget .calendar_wrap table td a:active {
			color: <?php echo esc_attr( $hover_color ); ?>
		}

	</style>
	<?php
}
add_action( 'wp_head', 'multiple_business_default_styles' );

/**
* Load customizer preview js file
*/
function multiple_business_customize_preview_js() {
	wp_enqueue_script( 'multiple-business-customize-preview', get_theme_file_uri( '/assets/js/customizer/customize-preview.js' ), array( 'jquery', 'customize-preview'), '1.0', true );
}
add_action( 'customize_preview_init', 'multiple_business_customize_preview_js' );