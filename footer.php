<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<style>
	/*
Theme Name: artwebsite theme
Theme URI: https://wordpress.org/themes/twentysixteen/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Twenty Sixteen is a modernized take on an ever-popular WordPress layout — the horizontal masthead with an optional right sidebar that works perfectly for blogs and websites. It has custom color options with beautiful default color schemes, a harmonious fluid grid using a mobile-first approach, and impeccable polish in every detail. Twenty Sixteen will make your WordPress look beautiful everywhere.
Version: 1.3
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: one-column, two-columns, right-sidebar, accessibility-ready, custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images, flexible-header, microformats, post-formats, rtl-language-support, sticky-post, threaded-comments, translation-ready, blog
Text Domain: twentysixteen

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

	/**
 * Table of Contents
 *
 * 1.0 - Normalize
 * 2.0 - Genericons
 * 3.0 - Typography
 * 4.0 - Elements
 * 5.0 - Forms
 * 6.0 - Navigation
 *   6.1 - Links
 *   6.2 - Menus
 * 7.0 - Accessibility
 * 8.0 - Alignments
 * 9.0 - Clearings
 * 10.0 - Widgets
 * 11.0 - Content
 *    11.1 - Header
 *    11.2 - Posts and pages
 *    11.3 - Post Formats
 *    11.4 - Comments
 *    11.5 - Sidebar
 *    11.6 - Footer
 * 12.0 - Media
 *    12.1 - Captions
 *    12.2 - Galleries
 * 13.0 - Multisite
 * 14.0 - Media Queries
 *    14.1 - >= 710px
 *    14.2 - >= 783px
 *    14.3 - >= 910px
 *    14.4 - >= 985px
 *    14.5 - >= 1200px
 * 15.0 - Print
 */

	/**
 * 1.0 - Normalize
 *
 * Normalizing styles have been helped along thanks to the fine work of
 * Nicolas Gallagher and Jonathan Neal http://necolas.github.com/normalize.css/
 */

	html {
		font-family: sans-serif;
		-webkit-text-size-adjust: 100%;
		-ms-text-size-adjust: 100%;
	}

	body {
		margin: 0;
	}

	article,
	aside,
	details,
	figcaption,
	figure,
	footer,
	header,
	main,
	menu,
	nav,
	section,
	summary {
		display: block;
	}

	audio,
	canvas,
	progress,
	video {
		display: inline-block;
		vertical-align: baseline;
	}

	audio:not([controls]) {
		display: none;
		height: 0;
	}

	[hidden],
	template {
		display: none;
	}

	a {
		background-color: transparent;
	}

	abbr[title] {
		border-bottom: 1px dotted;
	}

	b,
	strong {
		font-weight: 700;
	}

	small {
		font-size: 80%;
	}

	sub,
	sup {
		font-size: 75%;
		line-height: 0;
		position: relative;
		vertical-align: baseline;
	}

	sup {
		top: -0.5em;
	}

	sub {
		bottom: -0.25em;
	}

	img {
		border: 0;
	}

	svg:not(:root) {
		overflow: hidden;
	}

	figure {
		margin: 0;
	}

	hr {
		-webkit-box-sizing: content-box;
		-moz-box-sizing: content-box;
		box-sizing: content-box;
	}

	code,
	kbd,
	pre,
	samp {
		font-size: 1em;
	}

	button,
	input,
	optgroup,
	select,
	textarea {
		color: inherit;
		font: inherit;
		margin: 0;
	}

	select {
		text-transform: none;
	}

	button {
		overflow: visible;
	}

	button,
	input,
	select,
	textarea {
		max-width: 100%;
	}

	button,
	html input[type="button"],
	input[type="reset"],
	input[type="submit"] {
		-webkit-appearance: button;
		cursor: pointer;
	}

	button[disabled],
	html input[disabled] {
		cursor: default;
		opacity: .5;
	}

	button::-moz-focus-inner,
	input::-moz-focus-inner {
		border: 0;
		padding: 0;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		margin-right: 0.4375em;
		padding: 0;
	}

	input[type="date"]::-webkit-inner-spin-button,
	input[type="date"]::-webkit-outer-spin-button,
	input[type="time"]::-webkit-inner-spin-button,
	input[type="time"]::-webkit-outer-spin-button,
	input[type="datetime-local"]::-webkit-inner-spin-button,
	input[type="datetime-local"]::-webkit-outer-spin-button,
	input[type="week"]::-webkit-inner-spin-button,
	input[type="week"]::-webkit-outer-spin-button,
	input[type="month"]::-webkit-inner-spin-button,
	input[type="month"]::-webkit-outer-spin-button,
	input[type="number"]::-webkit-inner-spin-button,
	input[type="number"]::-webkit-outer-spin-button {
		height: auto;
	}

	input[type="search"] {
		-webkit-appearance: textfield;
	}

	input[type="search"]::-webkit-search-cancel-button,
	input[type="search"]::-webkit-search-decoration {
		-webkit-appearance: none;
	}

	fieldset {
		border: 1px solid #d1d1d1;
		margin: 0 0 1.75em;
		min-width: inherit;
		padding: 0.875em;
	}

	fieldset > :last-child {
		margin-bottom: 0;
	}

	legend {
		border: 0;
		padding: 0;
	}

	textarea {
		overflow: auto;
		vertical-align: top;
	}

	optgroup {
		font-weight: bold;
	}

	/**
 * 2.0 - Genericons
 */

	.menu-item-has-children a:after,
	.social-navigation a:before,
	.dropdown-toggle:after,
	.bypostauthor > article .fn:after,
	.comment-reply-title small a:before,
	.pagination .prev:before,
	.pagination .next:before,
	.pagination .nav-links:before,
	.pagination .nav-links:after,
	.search-submit:before {
		-moz-osx-font-smoothing: grayscale;
		-webkit-font-smoothing: antialiased;
		display: inline-block;
		font-family: "Genericons";
		font-size: 16px;
		font-style: normal;
		font-variant: normal;
		font-weight: normal;
		line-height: 1;
		speak: none;
		text-align: center;
		text-decoration: inherit;
		text-transform: none;
		vertical-align: top;
	}

	/**
 * 3.0 - Typography
 */

	body,
	button,
	input,
	select,
	textarea {
		color: #1a1a1a;
		font-family: Merriweather, Georgia, serif;
		font-size: 16px;
		font-size: 1rem;
		line-height: 1.75;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		clear: both;
		font-weight: 700;
		margin: 0;
		text-rendering: optimizeLegibility;
	}

	p {
		margin: 0 0 1.75em;
	}

	dfn,
	cite,
	em,
	i {
		font-style: italic;
	}

	blockquote {
		border: 0 solid #1a1a1a;
		border-left-width: 4px;
		color: #686868;
		font-size: 19px;
		font-size: 1.1875rem;
		font-style: italic;
		line-height: 1.4736842105;
		margin: 0 0 1.4736842105em;
		overflow: hidden;
		padding: 0 0 0 1.263157895em;
	}

	blockquote,
	q {
		quotes: none;
	}

	blockquote:before,
	blockquote:after,
	q:before,
	q:after {
		content: "";
	}

	blockquote p {
		margin-bottom: 1.4736842105em;
	}

	blockquote cite,
	blockquote small {
		color: #1a1a1a;
		display: block;
		font-size: 16px;
		font-size: 1rem;
		line-height: 1.75;
	}

	blockquote cite:before,
	blockquote small:before {
		content: "\2014\00a0";
	}

	blockquote em,
	blockquote i,
	blockquote cite {
		font-style: normal;
	}

	blockquote strong,
	blockquote b {
		font-weight: 400;
	}

	blockquote > :last-child {
		margin-bottom: 0;
	}

	address {
		font-style: italic;
		margin: 0 0 1.75em;
	}

	code,
	kbd,
	tt,
	var,
	samp,
	pre {
		font-family: Inconsolata, monospace;
	}

	pre {
		border: 1px solid #d1d1d1;
		font-size: 16px;
		font-size: 1rem;
		line-height: 1.3125;
		margin: 0 0 1.75em;
		max-width: 100%;
		overflow: auto;
		padding: 1.75em;
		white-space: pre;
		white-space: pre-wrap;
		word-wrap: break-word;
	}

	code {
		background-color: #d1d1d1;
		padding: 0.125em 0.25em;
	}

	abbr,
	acronym {
		border-bottom: 1px dotted #d1d1d1;
		cursor: help;
	}

	mark,
	ins {
		background: #007acc;
		color: #fff;
		padding: 0.125em 0.25em;
		text-decoration: none;
	}

	big {
		font-size: 125%;
	}

	/**
 * 4.0 - Elements
 */

	html {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	*,
	*:before,
	*:after {
		/* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
		-webkit-box-sizing: inherit;
		-moz-box-sizing: inherit;
		box-sizing: inherit;
	}

	body {
		background: #1a1a1a;
		/* Fallback for when there is no custom background color defined. */
	}

	hr {
		background-color: #d1d1d1;
		border: 0;
		height: 1px;
		margin: 0 0 1.75em;
	}

	ul,
	ol {
		margin: 0 0 1.75em 1.25em;
		padding: 0;
	}

	ul {
		list-style: disc;
	}

	ol {
		list-style: decimal;
		margin-left: 1.5em;
	}

	li > ul,
	li > ol {
		margin-bottom: 0;
	}

	dl {
		margin: 0 0 1.75em;
	}

	dt {
		font-weight: 700;
	}

	dd {
		margin: 0 0 1.75em;
	}

	img {
		height: auto;
		/* Make sure images are scaled correctly. */
		max-width: 100%;
		/* Adhere to container width. */
		vertical-align: middle;
	}

	del {
		opacity: 0.8;
	}

	table,
	th,
	td {
		border: 1px solid #d1d1d1;
	}

	table {
		border-collapse: separate;
		border-spacing: 0;
		border-width: 1px 0 0 1px;
		margin: 0 0 1.75em;
		table-layout: fixed;
		/* Prevents HTML tables from becoming too wide */
		width: 100%;
	}

	caption,
	th,
	td {
		font-weight: normal;
		text-align: left;
	}

	th {
		border-width: 0 1px 1px 0;
		font-weight: 700;
	}

	td {
		border-width: 0 1px 1px 0;
	}

	th,
	td {
		padding: 0.4375em;
	}

	/* Placeholder text color -- selectors need to be separate to work. */
	::-webkit-input-placeholder {
		color: #686868;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
	}

	:-moz-placeholder {
		color: #686868;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
	}

	::-moz-placeholder {
		color: #686868;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		opacity: 1;
		/* Since FF19 lowers the opacity of the placeholder by default */
	}

	:-ms-input-placeholder {
		color: #686868;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
	}

	/**
 * 5.0 - Forms
 */

	input {
		line-height: normal;
	}

	button,
	button[disabled]:hover,
	button[disabled]:focus,
	input[type="button"],
	input[type="button"][disabled]:hover,
	input[type="button"][disabled]:focus,
	input[type="reset"],
	input[type="reset"][disabled]:hover,
	input[type="reset"][disabled]:focus,
	input[type="submit"],
	input[type="submit"][disabled]:hover,
	input[type="submit"][disabled]:focus {
		background: #1a1a1a;
		border: 0;
		border-radius: 2px;
		color: #fff;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-weight: 700;
		letter-spacing: 0.046875em;
		line-height: 1;
		padding: 0.84375em 0.875em 0.78125em;
		text-transform: uppercase;
	}

	button:hover,
	button:focus,
	input[type="button"]:hover,
	input[type="button"]:focus,
	input[type="reset"]:hover,
	input[type="reset"]:focus,
	input[type="submit"]:hover,
	input[type="submit"]:focus {
		background: #007acc;
	}

	button:focus,
	input[type="button"]:focus,
	input[type="reset"]:focus,
	input[type="submit"]:focus {
		outline: thin dotted;
		outline-offset: -4px;
	}

	input[type="date"],
	input[type="time"],
	input[type="datetime-local"],
	input[type="week"],
	input[type="month"],
	input[type="text"],
	input[type="email"],
	input[type="url"],
	input[type="password"],
	input[type="search"],
	input[type="tel"],
	input[type="number"],
	textarea {
		background: #f7f7f7;
		background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
		border: 1px solid #d1d1d1;
		border-radius: 2px;
		color: #686868;
		padding: 0.625em 0.4375em;
		width: 100%;
	}

	input[type="date"]:focus,
	input[type="time"]:focus,
	input[type="datetime-local"]:focus,
	input[type="week"]:focus,
	input[type="month"]:focus,
	input[type="text"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="password"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="number"]:focus,
	textarea:focus {
		background-color: #fff;
		border-color: #007acc;
		color: #1a1a1a;
		outline: 0;
	}

	.post-password-form {
		margin-bottom: 1.75em;
	}

	.post-password-form label {
		color: #686868;
		display: block;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		letter-spacing: 0.076923077em;
		line-height: 1.6153846154;
		margin-bottom: 1.75em;
		text-transform: uppercase;
	}

	.post-password-form input[type="password"] {
		margin-top: 0.4375em;
	}

	.post-password-form > :last-child {
		margin-bottom: 0;
	}

	.search-form {
		position: relative;
	}

	input[type="search"].search-field {
		border-radius: 2px 0 0 2px;
		width: -webkit-calc(100% - 42px);
		width: calc(100% - 42px);
	}

	.search-submit:before {
		content: "\f400";
		font-size: 24px;
		left: 2px;
		line-height: 42px;
		position: relative;
		width: 40px;
	}

	.search-submit {
		border-radius: 0 2px 2px 0;
		bottom: 0;
		overflow: hidden;
		padding: 0;
		position: absolute;
		right: 0;
		top: 0;
		width: 42px;
	}

	/**
 * 6.0 - Navigation
 */

	/**
 * 6.1 - Links
 */

	a {
		color: #007acc;
		text-decoration: none;
	}

	a:hover,
	a:focus,
	a:active {
		color: #686868;
	}

	a:focus {
		outline: thin dotted;
	}

	a:hover,
	a:active {
		outline: 0;
	}

	.entry-content a,
	.entry-summary a,
	.taxonomy-description a,
	.logged-in-as a,
	.comment-content a,
	.pingback .comment-body > a,
	.textwidget a,
	.entry-footer a:hover,
	.site-info a:hover {
		box-shadow: 0 1px 0 0 currentColor;
	}

	.entry-content a:hover,
	.entry-content a:focus,
	.entry-summary a:hover,
	.entry-summary a:focus,
	.taxonomy-description a:hover,
	.taxonomy-description a:focus,
	.logged-in-as a:hover,
	.logged-in-as a:focus,
	.comment-content a:hover,
	.comment-content a:focus,
	.pingback .comment-body > a:hover,
	.pingback .comment-body > a:focus,
	.textwidget a:hover,
	.textwidget a:focus {
		box-shadow: none;
	}

	/**
 * 6.2 - Menus
 */

	.site-header-menu {
		display: none;
		-webkit-flex: 0 1 100%;
		-ms-flex: 0 1 100%;
		flex: 0 1 100%;
		margin: 0.875em 0;
	}

	.site-header-menu.toggled-on,
	.no-js .site-header-menu {
		display: block;
	}

	.main-navigation {
		font-family: Montserrat, "Helvetica Neue", sans-serif;
	}

	.site-footer .main-navigation {
		margin-bottom: 1.75em;
	}

	.main-navigation ul {
		list-style: none;
		margin: 0;
	}

	.main-navigation li {
		border-top: 1px solid #d1d1d1;
		position: relative;
	}

	.main-navigation a {
		color: #1a1a1a;
		display: block;
		line-height: 1.3125;
		outline-offset: -1px;
		padding: 0.84375em 0;
	}

	.main-navigation a:hover,
	.main-navigation a:focus {
		color: #007acc;
	}

	.main-navigation .current-menu-item > a,
	.main-navigation .current-menu-ancestor > a {
		font-weight: 700;
	}

	.main-navigation ul ul {
		display: none;
		margin-left: 0.875em;
	}

	.no-js .main-navigation ul ul {
		display: block;
	}

	.main-navigation ul .toggled-on {
		display: block;
	}

	.main-navigation .primary-menu {
		border-bottom: 1px solid #d1d1d1;
	}

	.main-navigation .menu-item-has-children > a {
		margin-right: 56px;
	}

	.dropdown-toggle {
		background-color: transparent;
		border: 0;
		border-radius: 0;
		color: #1a1a1a;
		content: "";
		height: 48px;
		padding: 0;
		position: absolute;
		right: 0;
		text-transform: none;
		top: 0;
		width: 48px;
	}

	.dropdown-toggle:after {
		border: 0 solid #d1d1d1;
		border-left-width: 1px;
		content: "\f431";
		font-size: 24px;
		left: 1px;
		position: relative;
		width: 48px;
	}

	.dropdown-toggle:hover,
	.dropdown-toggle:focus {
		background-color: transparent;
		color: #007acc;
	}

	.dropdown-toggle:focus {
		outline: thin dotted;
		outline-offset: -1px;
	}

	.dropdown-toggle:focus:after {
		border-color: transparent;
	}

	.dropdown-toggle.toggled-on:after {
		content: "\f432";
	}

	.site-header .main-navigation + .social-navigation {
		margin-top: 1.75em;
	}

	.site-footer .social-navigation {
		margin-bottom: 1.75em;
	}

	.social-navigation ul {
		list-style: none;
		margin: 0 0 -0.4375em;
	}

	.social-navigation li {
		float: left;
		margin: 0 0.4375em 0.4375em 0;
	}

	.social-navigation a {
		border: 1px solid #d1d1d1;
		border-radius: 50%;
		color: #1a1a1a;
		display: block;
		height: 35px;
		position: relative;
		width: 35px;
	}

	.social-navigation a:before {
		content: "\f415";
		height: 33px;
		line-height: 33px;
		text-align: center;
		width: 33px;
	}

	.social-navigation a:hover:before,
	.social-navigation a:focus:before {
		color: #007acc;
	}

	.social-navigation a[href*="codepen.io"]:before {
		content: "\f216";
	}

	.social-navigation a[href*="digg.com"]:before {
		content: "\f221";
	}

	.social-navigation a[href*="dribbble.com"]:before {
		content: "\f201";
	}

	.social-navigation a[href*="dropbox.com"]:before {
		content: "\f225";
	}

	.social-navigation a[href*="facebook.com"]:before {
		content: "\f203";
	}

	.social-navigation a[href*="flickr.com"]:before {
		content: "\f211";
	}

	.social-navigation a[href*="foursquare.com"]:before {
		content: "\f226";
	}

	.social-navigation a[href*="plus.google.com"]:before {
		content: "\f206";
	}

	.social-navigation a[href*="github.com"]:before {
		content: "\f200";
	}

	.social-navigation a[href*="instagram.com"]:before {
		content: "\f215";
	}

	.social-navigation a[href*="linkedin.com"]:before {
		content: "\f208";
	}

	.social-navigation a[href*="path.com"]:before {
		content: "\f219";
	}

	.social-navigation a[href*="pinterest.com"]:before {
		content: "\f210";
	}

	.social-navigation a[href*="getpocket.com"]:before {
		content: "\f224";
	}

	.social-navigation a[href*="polldaddy.com"]:before {
		content: "\f217";
	}

	.social-navigation a[href*="reddit.com"]:before {
		content: "\f222";
	}

	.social-navigation a[href*="skype.com"]:before {
		content: "\f220";
	}

	.social-navigation a[href*="stumbleupon.com"]:before {
		content: "\f223";
	}

	.social-navigation a[href*="tumblr.com"]:before {
		content: "\f214";
	}

	.social-navigation a[href*="twitter.com"]:before {
		content: "\f202";
	}

	.social-navigation a[href*="vimeo.com"]:before {
		content: "\f212";
	}

	.social-navigation a[href*="wordpress.com"]:before,
	.social-navigation a[href*="wordpress.org"]:before {
		content: "\f205";
	}

	.social-navigation a[href*="youtube.com"]:before {
		content: "\f213";
	}

	.social-navigation a[href^="mailto:"]:before {
		content: "\f410";
	}

	.social-navigation a[href*="spotify.com"]:before {
		content: "\f515";
	}

	.social-navigation a[href*="twitch.tv"]:before {
		content: "\f516";
	}

	.social-navigation a[href$="/feed/"]:before {
		content: "\f413";
	}

	.post-navigation {
		border-top: 4px solid #1a1a1a;
		border-bottom: 4px solid #1a1a1a;
		clear: both;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		margin: 0 7.6923% 3.5em;
	}

	.post-navigation a {
		color: #1a1a1a;
		display: block;
		padding: 1.75em 0;
	}

	.post-navigation span {
		display: block;
	}

	.post-navigation .meta-nav {
		color: #686868;
		font-size: 13px;
		font-size: 0.8125rem;
		letter-spacing: 0.076923077em;
		line-height: 1.6153846154;
		margin-bottom: 0.5384615385em;
		text-transform: uppercase;
	}

	.post-navigation .post-title {
		display: inline;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 23px;
		font-size: 1.4375rem;
		font-weight: 700;
		line-height: 1.2173913043;
		text-rendering: optimizeLegibility;
	}

	.post-navigation a:hover .post-title,
	.post-navigation a:focus .post-title {
		color: #007acc;
	}

	.post-navigation div + div {
		border-top: 4px solid #1a1a1a;
	}

	.pagination {
		border-top: 4px solid #1a1a1a;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 19px;
		font-size: 1.1875rem;
		margin: 0 7.6923% 2.947368421em;
		min-height: 56px;
		position: relative;
	}

	.pagination:before,
	.pagination:after {
		background-color: #1a1a1a;
		content: "";
		height: 52px;
		position: absolute;
		top: 0;
		width: 52px;
		z-index: 0;
	}

	.pagination:before {
		right: 0;
	}

	.pagination:after {
		right: 54px;
	}

	.pagination a:hover,
	.pagination a:focus {
		color: #1a1a1a;
	}

	.pagination .nav-links {
		padding-right: 106px;
		position: relative;
	}

	.pagination .nav-links:before,
	.pagination .nav-links:after {
		color: #fff;
		font-size: 32px;
		line-height: 51px;
		opacity: 0.3;
		position: absolute;
		width: 52px;
		z-index: 1;
	}

	.pagination .nav-links:before {
		content: "\f429";
		right: -1px;
	}

	.pagination .nav-links:after {
		content: "\f430";
		right: 55px;
	}

	/* reset screen-reader-text */
	.pagination .current .screen-reader-text {
		position: static !important;
	}

	.pagination .page-numbers {
		display: none;
		letter-spacing: 0.013157895em;
		line-height: 1;
		margin: 0 0.7368421053em 0 -0.7368421053em;
		padding: 0.8157894737em 0.7368421053em 0.3947368421em;
		text-transform: uppercase;
	}

	.pagination .current {
		display: inline-block;
		font-weight: 700;
	}

	.pagination .prev,
	.pagination .next {
		background-color: #1a1a1a;
		color: #fff;
		display: inline-block;
		height: 52px;
		margin: 0;
		overflow: hidden;
		padding: 0;
		position: absolute;
		top: 0;
		width: 52px;
		z-index: 2;
	}

	.pagination .prev:before,
	.pagination .next:before {
		font-size: 32px;
		height: 53px;
		line-height: 52px;
		position: relative;
		width: 53px;
	}

	.pagination .prev:hover,
	.pagination .prev:focus,
	.pagination .next:hover,
	.pagination .next:focus {
		background-color: #007acc;
		color: #fff;
	}

	.pagination .prev:focus,
	.pagination .next:focus {
		outline: 0;
	}

	.pagination .prev {
		right: 54px;
	}

	.pagination .prev:before {
		content: "\f430";
		left: -1px;
		top: -1px;
	}

	.pagination .next {
		right: 0;
	}

	.pagination .next:before {
		content: "\f429";
		right: -1px;
		top: -1px;
	}

	.image-navigation,
	.comment-navigation {
		border-top: 1px solid #d1d1d1;
		border-bottom: 1px solid #d1d1d1;
		color: #686868;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1.6153846154;
		margin: 0 7.6923% 2.1538461538em;
		padding: 1.0769230769em 0;
	}

	.comment-navigation {
		margin-right: 0;
		margin-left: 0;
	}

	.comments-title + .comment-navigation {
		border-bottom: 0;
		margin-bottom: 0;
	}

	.image-navigation .nav-previous:not(:empty),
	.image-navigation .nav-next:not(:empty),
	.comment-navigation .nav-previous:not(:empty),
	.comment-navigation .nav-next:not(:empty) {
		display: inline-block;
	}

	.image-navigation .nav-previous:not(:empty) + .nav-next:not(:empty):before,
	.comment-navigation .nav-previous:not(:empty) + .nav-next:not(:empty):before {
		content: "\002f";
		display: inline-block;
		opacity: 0.7;
		padding: 0 0.538461538em;
	}

	/**
 * 7.0 - Accessibility
 */

	/* Text meant only for screen readers */
	.says,
	.screen-reader-text {
		clip: rect(1px, 1px, 1px, 1px);
		height: 1px;
		overflow: hidden;
		position: absolute !important;
		width: 1px;
		/* many screen reader and browser combinations announce broken words as they would appear visually */
		word-wrap: normal !important;
	}

	/* must have higher specificity than alternative color schemes inline styles */
	.site .skip-link {
		background-color: #f1f1f1;
		box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.2);
		color: #21759b;
		display: block;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 14px;
		font-weight: 700;
		left: -9999em;
		outline: none;
		padding: 15px 23px 14px;
		text-decoration: none;
		text-transform: none;
		top: -9999em;
	}

	.logged-in .site .skip-link {
		box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.2);
		font-family: "Open Sans", sans-serif;
	}

	.site .skip-link:focus {
		clip: auto;
		height: auto;
		left: 6px;
		top: 7px;
		width: auto;
		z-index: 100000;
	}

	/**
 * 8.0 - Alignments
 */

	.alignleft {
		float: left;
		margin: 0.375em 1.75em 1.75em 0;
	}

	.alignright {
		float: right;
		margin: 0.375em 0 1.75em 1.75em;
	}

	.aligncenter {
		clear: both;
		display: block;
		margin: 0 auto 1.75em;
	}

	blockquote.alignleft {
		margin: 0.3157894737em 1.4736842105em 1.473684211em 0;
	}

	blockquote.alignright {
		margin: 0.3157894737em 0 1.473684211em 1.4736842105em;
	}

	blockquote.aligncenter {
		margin-bottom: 1.473684211em;
	}

	/**
 * 9.0 - Clearings
 */

	.clear:before,
	.clear:after,
	blockquote:before,
	blockquote:after,
	.entry-content:before,
	.entry-content:after,
	.entry-summary:before,
	.entry-summary:after,
	.comment-content:before,
	.comment-content:after,
	.site-content:before,
	.site-content:after,
	.site-main > article:before,
	.site-main > article:after,
	.primary-menu:before,
	.primary-menu:after,
	.social-links-menu:before,
	.social-links-menu:after,
	.textwidget:before,
	.textwidget:after,
	.content-bottom-widgets:before,
	.content-bottom-widgets:after {
		content: "";
		display: table;
	}

	.clear:after,
	blockquote:after,
	.entry-content:after,
	.entry-summary:after,
	.comment-content:after,
	.site-content:after,
	.site-main > article:after,
	.primary-menu:after,
	.social-links-menu:after,
	.textwidget:after,
	.content-bottom-widgets:after {
		clear: both;
	}

	/**
 * 10.0 - Widgets
 */

	.widget {
		border-top: 4px solid #1a1a1a;
		margin-bottom: 3.5em;
		padding-top: 1.75em;
	}

	.widget-area > :last-child,
	.widget > :last-child {
		margin-bottom: 0;
	}

	.widget .widget-title {
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 16px;
		font-size: 1rem;
		letter-spacing: 0.046875em;
		line-height: 1.3125;
		margin: 0 0 1.75em;
		text-transform: uppercase;
	}

	.widget .widget-title:empty {
		margin-bottom: 0;
	}

	.widget-title a {
		color: #1a1a1a;
	}

	/* Calendar widget */
	.widget.widget_calendar table {
		margin: 0;
	}

	.widget_calendar td,
	.widget_calendar th {
		line-height: 2.5625;
		padding: 0;
		text-align: center;
	}

	.widget_calendar caption {
		font-weight: 900;
		margin-bottom: 1.75em;
	}

	.widget_calendar tbody a {
		background-color: #007acc;
		color: #fff;
		display: block;
		font-weight: 700;
	}

	.widget_calendar tbody a:hover,
	.widget_calendar tbody a:focus {
		background-color: #686868;
		color: #fff;
	}

	/* Recent Posts widget */
	.widget_recent_entries .post-date {
		color: #686868;
		display: block;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1.615384615;
		margin-bottom: 0.538461538em;
	}

	.widget_recent_entries li:last-child .post-date {
		margin-bottom: 0;
	}

	/* RSS widget */
	.widget_rss .rsswidget img {
		margin-top: -0.375em;
	}

	.widget_rss .rss-date,
	.widget_rss cite {
		color: #686868;
		display: block;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		font-style: normal;
		line-height: 1.615384615;
		margin-bottom: 0.538461538em;
	}

	.widget_rss .rssSummary:last-child {
		margin-bottom: 2.1538461538em;
	}

	.widget_rss li:last-child :last-child {
		margin-bottom: 0;
	}

	/* Tag Cloud widget */
	.tagcloud a {
		border: 1px solid #d1d1d1;
		border-radius: 2px;
		display: inline-block;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		line-height: 1;
		margin: 0 0.1875em 0.4375em 0;
		padding: 0.5625em 0.4375em 0.5em;
	}

	.tagcloud a:hover,
	.tagcloud a:focus {
		border-color: #007acc;
		color: #007acc;
		outline: 0;
	}

	/**
 * 11.0 - Content
 */

	.site {
		background-color: #fff;
	}

	.site-inner {
		margin: 0 auto;
		max-width: 1320px;
		position: relative;
	}

	.site-content {
		word-wrap: break-word;
	}

	/* Do not show the outline on the skip link target. */
	#content[tabindex="-1"]:focus {
		outline: 0;
	}

	.site-main {
		margin-bottom: 3.5em;
	}

	.site-main > :last-child {
		margin-bottom: 0;
	}

	/**
 * 11.1 - Header
 */

	.site-header {
		padding: 2.625em 7.6923%;
	}

	.site-header-main {
		-webkit-align-items: center;
		-ms-flex-align: center;
		align-items: center;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
	}

	.site-branding {
		margin: 0.875em auto 0.875em 0;
		/* Avoid overflowing wide custom logo in small screens in Firefox and IEs */
		max-width: 100%;
		min-width: 0;
		overflow: hidden;
	}

	.custom-logo-link {
		display: block;
	}

	.custom-logo {
		max-width: 180px;
	}

	.site-title {
		font-family: Oswald, "Helvetica Neue", sans-serif;
		font-size: 23px;
		font-size: 1.4375rem;
		font-weight: 700;
		line-height: 1.2173913043;
		margin: 0;
	}

	.site-branding .site-title a {
		color: #1a1a1a;
	}

	.site-branding .site-title a:hover,
	.site-branding .site-title a:focus {
		color: #007acc;
	}

	.wp-custom-logo .site-title {
		margin-top: 0.608695652em;
	}

	.site-description {
		color: #686868;
		display: none;
		font-size: 13px;
		font-size: 0.8125rem;
		font-weight: 400;
		line-height: 1.0769230769;
		margin: 0.538461538em 0 0;
	}

	.menu-toggle {
		background-color: transparent;
		border: 1px solid #d1d1d1;
		color: #1a1a1a;
		font-size: 13px;
		font-size: 0.8125rem;
		margin: 1.076923077em 0;
		padding: 0.769230769em;
	}

	.no-js .menu-toggle {
		display: none;
	}

	.menu-toggle:hover,
	.menu-toggle:focus {
		background-color: transparent;
		border-color: #007acc;
		color: #007acc;
	}

	.menu-toggle.toggled-on,
	.menu-toggle.toggled-on:hover,
	.menu-toggle.toggled-on:focus {
		background-color: #1a1a1a;
		border-color: #1a1a1a;
		color: #fff;
	}

	.menu-toggle:focus {
		outline: 0;
	}

	.menu-toggle.toggled-on:focus {
		outline: thin dotted;
	}

	.header-image {
		clear: both;
		margin: 0.875em 0;
	}

	.header-image a {
		display: block;
	}

	.header-image a:hover img,
	.header-image a:focus img {
		opacity: 0.85;
	}

	/**
 * 11.2 - Posts and pages
 */

	.site-main > article {
		margin-bottom: 3.5em;
		position: relative;
	}

	.entry-header,
	.entry-summary,
	.entry-content,
	.entry-footer,
	.page-content {
		margin-right: 7.6923%;
		margin-left: 7.6923%;
	}

	.entry-title {
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 28px;
		font-size: 1.75rem;
		font-weight: 700;
		line-height: 1.25;
		margin-bottom: 1em;
	}

	.entry-title a {
		color: #1a1a1a;
	}

	.entry-title a:hover,
	.entry-title a:focus {
		color: #007acc;
	}

	.post-thumbnail {
		display: block;
		margin: 0 7.6923% 1.75em;
	}

	.post-thumbnail img {
		display: block;
	}

	.no-sidebar .post-thumbnail img {
		margin: 0 auto;
	}

	a.post-thumbnail:hover,
	a.post-thumbnail:focus {
		opacity: 0.85;
	}

	.entry-content,
	.entry-summary {
		border-color: #d1d1d1;
	}

	.entry-content h1,
	.entry-summary h1,
	.comment-content h1,
	.textwidget h1 {
		font-size: 28px;
		font-size: 1.75rem;
		line-height: 1.25;
		margin-top: 2em;
		margin-bottom: 1em;
	}

	.entry-content h2,
	.entry-summary h2,
	.comment-content h2,
	.textwidget h2 {
		font-size: 23px;
		font-size: 1.4375rem;
		line-height: 1.2173913043;
		margin-top: 2.4347826087em;
		margin-bottom: 1.2173913043em;
	}

	.entry-content h3,
	.entry-summary h3,
	.comment-content h3,
	.textwidget h3 {
		font-size: 19px;
		font-size: 1.1875rem;
		line-height: 1.1052631579;
		margin-top: 2.9473684211em;
		margin-bottom: 1.4736842105em;
	}

	.entry-content h4,
	.entry-content h5,
	.entry-content h6,
	.entry-summary h4,
	.entry-summary h5,
	.entry-summary h6,
	.comment-content h4,
	.comment-content h5,
	.comment-content h6,
	.textwidget h4,
	.textwidget h5,
	.textwidget h6 {
		font-size: 16px;
		font-size: 1rem;
		line-height: 1.3125;
		margin-top: 3.5em;
		margin-bottom: 1.75em;
	}

	.entry-content h4,
	.entry-summary h4,
	.comment-content h4,
	.textwidget h4 {
		letter-spacing: 0.140625em;
		text-transform: uppercase;
	}

	.entry-content h6,
	.entry-summary h6,
	.comment-content h6,
	.textwidget h6 {
		font-style: italic;
	}

	.entry-content h1,
	.entry-content h2,
	.entry-content h3,
	.entry-content h4,
	.entry-content h5,
	.entry-content h6,
	.entry-summary h1,
	.entry-summary h2,
	.entry-summary h3,
	.entry-summary h4,
	.entry-summary h5,
	.entry-summary h6,
	.comment-content h1,
	.comment-content h2,
	.comment-content h3,
	.comment-content h4,
	.comment-content h5,
	.comment-content h6,
	.textwidget h1,
	.textwidget h2,
	.textwidget h3,
	.textwidget h4,
	.textwidget h5,
	.textwidget h6 {
		font-weight: 900;
	}

	.entry-content h1:first-child,
	.entry-content h2:first-child,
	.entry-content h3:first-child,
	.entry-content h4:first-child,
	.entry-content h5:first-child,
	.entry-content h6:first-child,
	.entry-summary h1:first-child,
	.entry-summary h2:first-child,
	.entry-summary h3:first-child,
	.entry-summary h4:first-child,
	.entry-summary h5:first-child,
	.entry-summary h6:first-child,
	.comment-content h1:first-child,
	.comment-content h2:first-child,
	.comment-content h3:first-child,
	.comment-content h4:first-child,
	.comment-content h5:first-child,
	.comment-content h6:first-child,
	.textwidget h1:first-child,
	.textwidget h2:first-child,
	.textwidget h3:first-child,
	.textwidget h4:first-child,
	.textwidget h5:first-child,
	.textwidget h6:first-child {
		margin-top: 0;
	}

	.post-navigation .post-title,
	.entry-title,
	.comments-title {
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		hyphens: auto;
	}

	body:not(.search-results) .entry-summary {
		color: #686868;
		font-size: 19px;
		font-size: 1.1875rem;
		line-height: 1.4736842105;
		margin-bottom: 1.4736842105em;
	}

	body:not(.search-results) .entry-header + .entry-summary {
		margin-top: -0.736842105em;
	}

	body:not(.search-results) .entry-summary p,
	body:not(.search-results) .entry-summary address,
	body:not(.search-results) .entry-summary hr,
	body:not(.search-results) .entry-summary ul,
	body:not(.search-results) .entry-summary ol,
	body:not(.search-results) .entry-summary dl,
	body:not(.search-results) .entry-summary dd,
	body:not(.search-results) .entry-summary table {
		margin-bottom: 1.4736842105em;
	}

	body:not(.search-results) .entry-summary li > ul,
	body:not(.search-results) .entry-summary li > ol {
		margin-bottom: 0;
	}

	body:not(.search-results) .entry-summary th,
	body:not(.search-results) .entry-summary td {
		padding: 0.3684210526em;
	}

	body:not(.search-results) .entry-summary fieldset {
		margin-bottom: 1.4736842105em;
		padding: 0.3684210526em;
	}

	body:not(.search-results) .entry-summary blockquote {
		border-color: currentColor;
	}

	body:not(.search-results) .entry-summary blockquote > :last-child {
		margin-bottom: 0;
	}

	body:not(.search-results) .entry-summary .alignleft {
		margin: 0.2631578947em 1.4736842105em 1.4736842105em 0;
	}

	body:not(.search-results) .entry-summary .alignright {
		margin: 0.2631578947em 0 1.4736842105em 1.4736842105em;
	}

	body:not(.search-results) .entry-summary .aligncenter {
		margin-bottom: 1.4736842105em;
	}

	.entry-content > :last-child,
	.entry-summary > :last-child,
	body:not(.search-results) .entry-summary > :last-child,
	.page-content > :last-child,
	.comment-content > :last-child,
	.textwidget > :last-child {
		margin-bottom: 0;
	}

	.more-link {
		white-space: nowrap;
	}

	.author-info {
		border-color: inherit;
		border-style: solid;
		border-width: 1px 0 1px 0;
		clear: both;
		padding-top: 1.75em;
		padding-bottom: 1.75em;
	}

	.author-avatar .avatar {
		float: left;
		height: 42px;
		margin: 0 1.75em 1.75em 0;
		width: 42px;
	}

	.author-description > :last-child {
		margin-bottom: 0;
	}

	.entry-content .author-title {
		clear: none;
		font-size: 16px;
		font-size: 1rem;
		font-weight: 900;
		line-height: 1.75;
		margin: 0;
	}

	.author-bio {
		color: #686868;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1.6153846154;
		margin-bottom: 1.6153846154em;
		overflow: hidden;
	}

	.author-link {
		white-space: nowrap;
	}

	.entry-footer {
		color: #686868;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1.6153846154;
		margin-top: 2.1538461538em;
	}

	.entry-footer:empty {
		margin: 0;
	}

	.entry-footer a {
		color: #686868;
	}

	.entry-footer a:hover,
	.entry-footer a:focus {
		color: #007acc;
	}

	.entry-footer > span:not(:last-child):after {
		content: "\002f";
		display: inline-block;
		opacity: 0.7;
		padding: 0 0.538461538em;
	}

	.entry-footer .avatar {
		height: 21px;
		margin: -0.1538461538em 0.5384615385em 0 0;
		width: 21px;
	}

	.sticky-post {
		color: #686868;
		display: block;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		letter-spacing: 0.076923077em;
		line-height: 1.6153846154;
		margin-bottom: 0.5384615385em;
		text-transform: uppercase;
	}

	/**
 * IE8 and earlier will drop any block with CSS3 selectors.
 * Do not combine these styles with the next block.
 */
	.updated:not(.published) {
		display: none;
	}

	.sticky .posted-on,
	.byline {
		display: none;
	}

	.single .byline,
	.group-blog .byline {
		display: inline;
	}

	.page-header {
		border-top: 4px solid #1a1a1a;
		margin: 0 7.6923% 3.5em;
		padding-top: 1.75em;
	}

	body.error404 .page-header,
	body.search-no-results .page-header {
		border-top: 0;
		padding-top: 0;
	}

	.page-title {
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 23px;
		font-size: 1.4375rem;
		line-height: 1.2173913043;
	}

	.taxonomy-description {
		color: #686868;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1.6153846154;
	}

	.taxonomy-description p {
		margin: 0.5384615385em 0 1.6153846154em;
	}

	.taxonomy-description > :last-child {
		margin-bottom: 0;
	}

	.page-links {
		clear: both;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		margin: 0 0 1.75em;
	}

	.page-links a,
	.page-links > span {
		border: 1px solid #d1d1d1;
		border-radius: 2px;
		display: inline-block;
		font-size: 13px;
		font-size: 0.8125rem;
		height: 1.8461538462em;
		line-height: 1.6923076923em;
		margin-right: 0.3076923077em;
		text-align: center;
		width: 1.8461538462em;
	}

	.page-links a {
		background-color: #1a1a1a;
		border-color: #1a1a1a;
		color: #fff;
	}

	.page-links a:hover,
	.page-links a:focus {
		background-color: #007acc;
		border-color: transparent;
		color: #fff;
	}

	.page-links > .page-links-title {
		border: 0;
		color: #1a1a1a;
		height: auto;
		margin: 0;
		padding-right: 0.6153846154em;
		width: auto;
	}

	.entry-attachment {
		margin-bottom: 1.75em;
	}

	.entry-caption {
		color: #686868;
		font-size: 13px;
		font-size: 0.8125rem;
		font-style: italic;
		line-height: 1.6153846154;
		padding-top: 1.0769230769em;
	}

	.entry-caption > :last-child {
		margin-bottom: 0;
	}

	.content-bottom-widgets {
		margin: 0 7.6923%;
	}

	.content-bottom-widgets .widget-area {
		margin-bottom: 3.5em;
	}

	/**
 * 11.3 - Post Formats
 */

	.format-aside .entry-title,
	.format-image .entry-title,
	.format-video .entry-title,
	.format-quote .entry-title,
	.format-gallery .entry-title,
	.format-status .entry-title,
	.format-link .entry-title,
	.format-audio .entry-title,
	.format-chat .entry-title {
		font-size: 19px;
		font-size: 1.1875rem;
		line-height: 1.473684211;
		margin-bottom: 1.473684211em;
	}

	.blog .format-status .entry-title,
	.archive .format-status .entry-title {
		display: none;
	}

	/**
 * 11.4 - Comments
 */

	.comments-area {
		margin: 0 7.6923% 3.5em;
	}

	.comment-list + .comment-respond,
	.comment-navigation + .comment-respond {
		padding-top: 1.75em;
	}

	.comments-title,
	.comment-reply-title {
		border-top: 4px solid #1a1a1a;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 23px;
		font-size: 1.4375rem;
		font-weight: 700;
		line-height: 1.3125;
		padding-top: 1.217391304em;
	}

	.comments-title {
		margin-bottom: 1.217391304em;
	}

	.comment-list {
		list-style: none;
		margin: 0;
	}

	.comment-list article,
	.comment-list .pingback,
	.comment-list .trackback {
		border-top: 1px solid #d1d1d1;
		padding: 1.75em 0;
	}

	.comment-list .children {
		list-style: none;
		margin: 0;
	}

	.comment-list .children > li {
		padding-left: 0.875em;
	}

	.comment-author {
		color: #1a1a1a;
		margin-bottom: 0.4375em;
	}

	.comment-author .avatar {
		float: left;
		height: 28px;
		margin-right: 0.875em;
		position: relative;
		width: 28px;
	}

	.bypostauthor > article .fn:after {
		content: "\f304";
		left: 3px;
		position: relative;
		top: 5px;
	}

	.comment-metadata,
	.pingback .edit-link {
		color: #686868;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1.6153846154;
	}

	.comment-metadata {
		margin-bottom: 2.1538461538em;
	}

	.comment-metadata a,
	.pingback .comment-edit-link {
		color: #686868;
	}

	.comment-metadata a:hover,
	.comment-metadata a:focus,
	.pingback .comment-edit-link:hover,
	.pingback .comment-edit-link:focus {
		color: #007acc;
	}

	.comment-metadata .edit-link,
	.pingback .edit-link {
		display: inline-block;
	}

	.comment-metadata .edit-link:before,
	.pingback .edit-link:before {
		content: "\002f";
		display: inline-block;
		opacity: 0.7;
		padding: 0 0.538461538em;
	}

	.comment-content ul,
	.comment-content ol {
		margin: 0 0 1.5em 1.25em;
	}

	.comment-content li > ul,
	.comment-content li > ol {
		margin-bottom: 0;
	}

	.comment-reply-link {
		border: 1px solid #d1d1d1;
		border-radius: 2px;
		color: #007acc;
		display: inline-block;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1;
		margin-top: 2.1538461538em;
		padding: 0.5384615385em 0.5384615385em 0.4615384615em;
	}

	.comment-reply-link:hover,
	.comment-reply-link:focus {
		border-color: currentColor;
		color: #007acc;
		outline: 0;
	}

	.comment-form {
		padding-top: 1.75em;
	}

	.comment-form label {
		color: #686868;
		display: block;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		letter-spacing: 0.076923077em;
		line-height: 1.6153846154;
		margin-bottom: 0.5384615385em;
		text-transform: uppercase;
	}

	.comment-list .comment-form {
		padding-bottom: 1.75em;
	}

	.comment-notes,
	.comment-awaiting-moderation,
	.logged-in-as,
	.form-allowed-tags {
		color: #686868;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1.6153846154;
		margin-bottom: 2.1538461538em;
	}

	.no-comments {
		border-top: 1px solid #d1d1d1;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-weight: 700;
		margin: 0;
		padding-top: 1.75em;
	}

	.comment-navigation + .no-comments {
		border-top: 0;
		padding-top: 0;
	}

	.form-allowed-tags code {
		font-family: Inconsolata, monospace;
	}

	.form-submit {
		margin-bottom: 0;
	}

	.required {
		color: #007acc;
		font-family: Merriweather, Georgia, serif;
	}

	.comment-reply-title small {
		font-size: 100%;
	}

	.comment-reply-title small a {
		border: 0;
		float: right;
		height: 32px;
		overflow: hidden;
		width: 26px;
	}

	.comment-reply-title small a:hover,
	.comment-reply-title small a:focus {
		color: #1a1a1a;
	}

	.comment-reply-title small a:before {
		content: "\f405";
		font-size: 32px;
		position: relative;
		top: -5px;
	}

	/**
 * 11.5 - Sidebar
 */

	.sidebar {
		margin-bottom: 3.5em;
		padding: 0 7.6923%;
	}

	/**
 * 11.6 - Footer
 */

	.site-footer {
		padding: 0 7.6923% 1.75em;
	}

	.site-info {
		color: #686868;
		font-size: 13px;
		font-size: 0.8125rem;
		line-height: 1.6153846154;
	}

	.site-info a {
		color: #686868;
	}

	.site-info a:hover,
	.site-info a:focus {
		color: #cc3bc6;
	}

	.site-footer .site-title {
		font-family: inherit;
		font-size: inherit;
		font-weight: 400;
	}

	.site-footer .site-title:after {
		content: "\002f";
		display: inline-block;
		font-family: Montserrat, sans-serif;
		opacity: 0.7;
		padding: 0 0.307692308em 0 0.538461538em;
	}

	/**
 * 12.0 - Media
 */

	.site .avatar {
		border-radius: 50%;
	}

	.entry-content .wp-smiley,
	.entry-summary .wp-smiley,
	.comment-content .wp-smiley,
	.textwidget .wp-smiley {
		border: none;
		margin-top: 0;
		margin-bottom: 0;
		padding: 0;
	}

	.entry-content a img,
	.entry-summary a img,
	.comment-content a img,
	.textwidget a img {
		display: block;
	}

	/* Make sure embeds and iframes fit their containers. */
	embed,
	iframe,
	object,
	video {
		margin-bottom: 1.75em;
		max-width: 100%;
		vertical-align: middle;
	}

	p > embed,
	p > iframe,
	p > object,
	p > video {
		margin-bottom: 0;
	}

	.entry-content .wp-audio-shortcode a,
	.entry-content .wp-playlist a {
		box-shadow: none;
	}

	.wp-audio-shortcode,
	.wp-video,
	.wp-playlist.wp-audio-playlist {
		margin-top: 0;
		margin-bottom: 1.75em;
	}

	.wp-playlist.wp-audio-playlist {
		padding-bottom: 0;
	}

	.wp-playlist .wp-playlist-tracks {
		margin-top: 0;
	}

	.wp-playlist-item .wp-playlist-caption {
		border-bottom: 0;
		padding: 0.7142857143em 0;
	}

	.wp-playlist-item .wp-playlist-item-length {
		top: 0.7142857143em;
	}

	/**
 * 12.1 - Captions
 */

	.wp-caption {
		margin-bottom: 1.75em;
		max-width: 100%;
	}

	.wp-caption img[class*="wp-image-"] {
		display: block;
		margin: 0;
	}

	.wp-caption .wp-caption-text {
		color: #686868;
		font-size: 13px;
		font-size: 0.8125rem;
		font-style: italic;
		line-height: 1.6153846154;
		padding-top: 0.5384615385em;
	}

	/**
 * 12.2 - Galleries
 */

	.gallery {
		margin: 0 -1.1666667% 1.75em;
	}

	.gallery-item {
		display: inline-block;
		max-width: 33.33%;
		padding: 0 1.1400652% 2.2801304%;
		text-align: center;
		vertical-align: top;
		width: 100%;
	}

	.gallery-columns-1 .gallery-item {
		max-width: 100%;
	}

	.gallery-columns-2 .gallery-item {
		max-width: 50%;
	}

	.gallery-columns-4 .gallery-item {
		max-width: 25%;
	}

	.gallery-columns-5 .gallery-item {
		max-width: 20%;
	}

	.gallery-columns-6 .gallery-item {
		max-width: 16.66%;
	}

	.gallery-columns-7 .gallery-item {
		max-width: 14.28%;
	}

	.gallery-columns-8 .gallery-item {
		max-width: 12.5%;
	}

	.gallery-columns-9 .gallery-item {
		max-width: 11.11%;
	}

	.gallery-icon img {
		margin: 0 auto;
	}

	.gallery-caption {
		color: #686868;
		display: block;
		font-size: 13px;
		font-size: 0.8125rem;
		font-style: italic;
		line-height: 1.6153846154;
		padding-top: 0.5384615385em;
	}

	.gallery-columns-6 .gallery-caption,
	.gallery-columns-7 .gallery-caption,
	.gallery-columns-8 .gallery-caption,
	.gallery-columns-9 .gallery-caption {
		display: none;
	}

	/**
 * 13.0 - Multisites
 */

	.widecolumn {
		margin-bottom: 3.5em;
		padding: 0 7.6923%;
	}

	.widecolumn .mu_register {
		width: auto;
	}

	.widecolumn .mu_register .mu_alert {
		background: transparent;
		border-color: #d1d1d1;
		color: inherit;
		margin-bottom: 3.5em;
		padding: 1.75em;
	}

	.widecolumn form,
	.widecolumn .mu_register form {
		margin-top: 0;
	}

	.widecolumn h2 {
		font-size: 23px;
		font-size: 1.4375rem;
		font-weight: 900;
		line-height: 1.2173913043;
		margin-bottom: 1.2173913043em;
	}

	.widecolumn p {
		margin: 1.75em 0;
	}

	.widecolumn p + h2 {
		margin-top: 2.4347826087em;
	}

	.widecolumn label,
	.widecolumn .mu_register label {
		color: #686868;
		font-family: Montserrat, "Helvetica Neue", sans-serif;
		font-size: 13px;
		font-size: 0.8125rem;
		font-weight: 400;
		letter-spacing: 0.076923077em;
		line-height: 1.6153846154;
		text-transform: uppercase;
	}

	.widecolumn .mu_register label {
		margin: 2.1538461538em 0.7692307692em 0.5384615385em 0;
	}

	.widecolumn .mu_register label strong {
		font-weight: 400;
	}

	.widecolumn #key,
	.widecolumn .mu_register #blog_title,
	.widecolumn .mu_register #user_email,
	.widecolumn .mu_register #blogname,
	.widecolumn .mu_register #user_name {
		font-size: 16px;
		font-size: 1rem;
		width: 100%;
	}

	.widecolumn .mu_register #blogname {
		margin: 0;
	}

	.widecolumn .mu_register #blog_title,
	.widecolumn .mu_register #user_email,
	.widecolumn .mu_register #user_name {
		margin: 0 0 0.375em;
	}

	.widecolumn #submit,
	.widecolumn .mu_register input[type="submit"] {
		font-size: 16px;
		font-size: 1rem;
		margin: 0;
		width: auto;
	}

	.widecolumn .mu_register .prefix_address,
	.widecolumn .mu_register .suffix_address {
		font-size: inherit;
	}

	.widecolumn .mu_register > :last-child,
	.widecolumn form > :last-child {
		margin-bottom: 0;
	}

	/**
 * 14.0 - Media Queries
 */

	/**
 * Does the same thing as <meta name="viewport" content="width=device-width">,
 * but in the future W3C standard way. -ms- prefix is required for IE10+ to
 * render responsive styling in Windows 8 "snapped" views; IE10+ does not honor
 * the meta tag. See https://core.trac.wordpress.org/ticket/25888.
 */
	@-ms-viewport {
		width: device-width;
	}

	@viewport {
		width: device-width;
	}

	/**
 * 14.1 - >= 710px
 */

	@media screen and (min-width: 44.375em) {
		body:not(.custom-background-image):before,
		body:not(.custom-background-image):after {
			background: inherit;
			content: "";
			display: block;
			height: 21px;
			left: 0;
			position: fixed;
			width: 100%;
			z-index: 99;
		}

		body:not(.custom-background-image):before {
			top: 0;
		}

		body:not(.custom-background-image).admin-bar:before {
			top: 46px;
		}

		body:not(.custom-background-image):after {
			bottom: 0;
		}

		.site {
			margin: 21px;
		}

		.site-main {
			margin-bottom: 5.25em;
		}

		.site-header {
			padding: 3.9375em 7.6923%;
		}

		.site-branding {
			margin-top: 1.3125em;
			margin-bottom: 1.3125em;
		}

		.custom-logo {
			max-width: 210px;
		}

		.site-title {
			font-size: 28px;
			font-size: 1.75rem;
			line-height: 1.25;
		}

		.wp-custom-logo .site-title {
			margin-top: 0.5em;
		}

		.site-description {
			display: block;
		}

		.menu-toggle {
			font-size: 16px;
			font-size: 1.0rem;
			margin: 1.3125em 0;
			padding: 0.8125em 0.875em 0.6875em;
		}

		.site-header-menu {
			margin: 1.3125em 0;
		}

		.site-header .main-navigation + .social-navigation {
			margin-top: 2.625em;
		}

		.header-image {
			margin: 1.3125em 0;
		}

		.pagination {
			margin: 0 23.0769% 4.421052632em 7.6923%
		}

		.post-navigation {
			margin-bottom: 5.25em;
		}

		.post-navigation .post-title {
			font-size: 28px;
			font-size: 1.75rem;
			line-height: 1.25;
		}

		/* restore screen-reader-text */
		.pagination .current .screen-reader-text {
			position: absolute !important;
		}

		.pagination .page-numbers {
			display: inline-block;
		}

		.site-main > article {
			margin-bottom: 5.25em;
		}

		.entry-header,
		.post-thumbnail,
		.entry-content,
		.entry-summary,
		.entry-footer,
		.comments-area,
		.image-navigation,
		.post-navigation,
		.page-header,
		.page-content,
		.content-bottom-widgets {
			margin-right: 23.0769%;
		}

		.entry-title {
			font-size: 33px;
			font-size: 2.0625rem;
			line-height: 1.2727272727;
			margin-bottom: 0.8484848485em;
		}

		.entry-content blockquote.alignleft,
		.entry-content blockquote.alignright {
			border-width: 4px 0 0 0;
			padding: 0.9473684211em 0 0;
			width: -webkit-calc(50% - 0.736842105em);
			width: calc(50% - 0.736842105em);
		}

		.entry-content blockquote:not(.alignleft):not(.alignright),
		.entry-summary blockquote,
		.comment-content blockquote {
			margin-left: -1.473684211em;
		}

		.entry-content blockquote blockquote:not(.alignleft):not(.alignright),
		.entry-summary blockquote blockquote,
		.comment-content blockquote blockquote {
			margin-left: 0;
		}

		.entry-content ul,
		.entry-summary ul,
		.comment-content ul,
		.entry-content ol,
		.entry-summary ol,
		.comment-content ol {
			margin-left: 0;
		}

		.entry-content li > ul,
		.entry-summary li > ul,
		.comment-content li > ul,
		.entry-content blockquote > ul,
		.entry-summary blockquote > ul,
		.comment-content blockquote > ul {
			margin-left: 1.25em;
		}

		.entry-content li > ol,
		.entry-summary li > ol,
		.comment-content li > ol,
		.entry-content blockquote > ol,
		.entry-summary blockquote > ol,
		.comment-content blockquote > ol {
			margin-left: 1.5em;
		}

		.comment-author {
			margin-bottom: 0;
		}

		.comment-author .avatar {
			height: 42px;
			position: relative;
			top: 0.25em;
			width: 42px;
		}

		.comment-list .children > li {
			padding-left: 1.75em;
		}

		.comment-list + .comment-respond,
		.comment-navigation + .comment-respond {
			padding-top: 3.5em;
		}

		.comments-area,
		.widget,
		.content-bottom-widgets .widget-area {
			margin-bottom: 5.25em;
		}

		.sidebar,
		.widecolumn {
			margin-bottom: 5.25em;
			padding-right: 23.0769%;
		}

		body:not(.search-results) .entry-summary li > ul,
		body:not(.search-results) .entry-summary blockquote > ul {
			margin-left: 1.157894737em;
		}

		body:not(.search-results) .entry-summary li > ol,
		body:not(.search-results) .entry-summary blockquote > ol {
			margin-left: 1.473684211em;
		}
	}

	/**
 * 14.2 - >= 783px
 */

	@media screen and (min-width: 48.9375em) {
		body:not(.custom-background-image).admin-bar:before {
			top: 32px;
		}
	}

	/**
 * 14.3 - >= 910px
 */

	@media screen and (min-width: 56.875em) {
		.site-header {
			padding-right: 4.5455%;
			padding-left: 4.5455%;
		}

		.site-header-main {
			-webkit-align-items: flex-start;
			-ms-flex-align: start;
			align-items: flex-start;
		}

		.wp-custom-logo .site-header-main {
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.site-header-menu {
			display: block;
			-webkit-flex: 0 1 auto;
			-ms-flex: 0 1 auto;
			flex: 0 1 auto;
		}

		.main-navigation {
			margin: 0 -0.875em;
		}

		.main-navigation .primary-menu,
		.main-navigation .primary-menu > li {
			border: 0;
		}

		.main-navigation .primary-menu > li {
			float: left;
		}

		.main-navigation a {
			outline-offset: -8px;
			padding: 0.65625em 0.875em;
			white-space: nowrap;
		}

		.main-navigation li:hover > a,
		.main-navigation li.focus > a {
			color: #39cc4f;
		}

		.main-navigation ul ul {
			border-bottom: 1px solid #d1d1d1;
			display: block;
			left: -999em;
			margin: 0;
			position: absolute;
			z-index: 99999;
		}

		.main-navigation ul ul ul {
			top: -1px;
		}

		.main-navigation ul ul ul:before,
		.main-navigation ul ul ul:after {
			border: 0;
		}

		.main-navigation ul ul li {
			background-color: #fff;
			border: 1px solid #d1d1d1;
			border-bottom-width: 0;
		}

		.main-navigation ul ul a {
			white-space: normal;
			width: 12.6875em;
		}

		.main-navigation ul ul:before,
		.main-navigation ul ul:after {
			border-style: solid;
			content: "";
			position: absolute;
		}

		.main-navigation ul ul:before {
			border-color: #d1d1d1 transparent;
			border-width: 0 10px 10px;
			right: 9px;
			top: -9px;
		}

		.main-navigation ul ul:after {
			border-color: #fff transparent;
			border-width: 0 8px 8px;
			right: 11px;
			top: -7px;
		}

		.main-navigation li:hover > ul,
		.main-navigation li.focus > ul {
			left: auto;
			right: 0;
		}

		.main-navigation ul ul li:hover > ul,
		.main-navigation ul ul li.focus > ul {
			left: auto;
			right: 100%;
		}

		.main-navigation .menu-item-has-children > a {
			margin: 0;
			padding-right: 2.25em;
		}

		.main-navigation .menu-item-has-children > a:after {
			content: "\f431";
			position: absolute;
			right: 0.625em;
			top: 0.8125em;
		}

		.main-navigation ul ul .menu-item-has-children > a {
			padding-right: 2.0625em;
		}

		.main-navigation ul ul .menu-item-has-children > a:after {
			right: 0.5625em;
			top: 0.875em;
			-webkit-transform: rotate(90deg);
			-moz-transform: rotate(90deg);
			-ms-transform: rotate(90deg);
			transform: rotate(90deg);
		}

		.dropdown-toggle,
		.main-navigation ul .dropdown-toggle.toggled-on,
		.menu-toggle,
		.site-header .social-navigation,
		.site-footer .main-navigation {
			display: none;
		}

		.site-content {
			padding: 0 4.5455%;
		}

		.content-area {
			float: left;
			margin-right: -100%;
			width: 70%;
		}

		.entry-header,
		.post-thumbnail,
		.entry-content,
		.entry-summary,
		.entry-footer,
		.comments-area,
		.image-navigation,
		.post-navigation,
		.pagination,
		.page-header,
		.page-content,
		.content-bottom-widgets {
			margin-right: 0;
			margin-left: 0;
		}

		.sidebar {
			float: left;
			margin-left: 75%;
			padding: 0;
			width: 25%;
		}

		.widget {
			font-size: 13px;
			font-size: 0.8125rem;
			line-height: 1.6153846154;
			margin-bottom: 3.230769231em;
			padding-top: 1.615384615em;
		}

		.widget .widget-title {
			margin-bottom: 1.3125em;
		}

		.widget p,
		.widget address,
		.widget hr,
		.widget ul,
		.widget ol,
		.widget dl,
		.widget dd,
		.widget table {
			margin-bottom: 1.6153846154em;
		}

		.widget li > ul,
		.widget li > ol {
			margin-bottom: 0;
		}

		.widget blockquote {
			font-size: 16px;
			font-size: 1rem;
			line-height: 1.3125;
			margin-bottom: 1.3125em;
			padding-left: 1.0625em;
		}

		.widget blockquote cite,
		.widget blockquote small {
			font-size: 13px;
			font-size: 0.8125rem;
			line-height: 1.6153846154;
		}

		.widget th,
		.widget td {
			padding: 0.5384615385em;
		}

		.widget pre {
			font-size: 13px;
			font-size: 0.8125rem;
			line-height: 1.6153846154;
			margin-bottom: 1.6153846154em;
			padding: 0.5384615385em;
		}

		.widget fieldset {
			margin-bottom: 1.6153846154em;
			padding: 0.5384615385em;
		}

		.widget button,
		.widget input,
		.widget select,
		.widget textarea {
			font-size: 13px;
			font-size: 0.8125rem;
			line-height: 1.6153846154;
		}

		.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"] {
			line-height: 1;
			padding: 0.846153846em;
		}

		.widget input[type="date"],
		.widget input[type="time"],
		.widget input[type="datetime-local"],
		.widget input[type="week"],
		.widget input[type="month"],
		.widget input[type="text"],
		.widget input[type="email"],
		.widget input[type="url"],
		.widget input[type="password"],
		.widget input[type="search"],
		.widget input[type="tel"],
		.widget input[type="number"],
		.widget textarea {
			padding: 0.4615384615em 0.5384615385em;
		}

		.widget h1 {
			font-size: 23px;
			font-size: 1.4375rem;
			line-height: 1.2173913043;
			margin-bottom: 0.9130434783em;
		}

		.widget h2 {
			font-size: 19px;
			font-size: 1.1875rem;
			line-height: 1.1052631579;
			margin-bottom: 1.1052631579em;
		}

		.widget h3 {
			font-size: 16px;
			font-size: 1rem;
			line-height: 1.3125;
			margin-bottom: 1.3125em;
		}

		.widget h4,
		.widget h5,
		.widget h6 {
			font-size: 13px;
			font-size: 0.8125rem;
			line-height: 1.6153846154;
			margin-bottom: 0.9130434783em;
		}

		.widget .alignleft {
			margin: 0.2307692308em 1.6153846154em 1.6153846154em 0;
		}

		.widget .alignright {
			margin: 0.2307692308em 0 1.6153846154em 1.6153846154em;
		}

		.widget .aligncenter {
			margin-bottom: 1.6153846154em;
		}

		.widget_calendar td,
		.widget_calendar th {
			line-height: 2.6923076923;
			padding: 0;
		}

		.widget_rss .rssSummary:last-child {
			margin-bottom: 1.615384615em;
		}

		.widget input[type="search"].search-field {
			width: -webkit-calc(100% - 35px);
			width: calc(100% - 35px);
		}

		.widget .search-submit:before {
			font-size: 16px;
			left: 1px;
			line-height: 35px;
			width: 34px;
		}

		.widget button.search-submit {
			padding: 0;
			width: 35px;
		}

		.tagcloud a {
			margin: 0 0.2307692308em 0.5384615385em 0;
			padding: 0.5384615385em 0.4615384615em 0.4615384615em;
		}

		.textwidget h1 {
			margin-top: 1.8260869565em;
		}

		.textwidget h2 {
			margin-top: 2.2105263158em;
		}

		.textwidget h3 {
			margin-top: 2.625em;
		}

		.textwidget h4 {
			letter-spacing: 0.153846154em;
		}

		.textwidget h4,
		.textwidget h5,
		.textwidget h6 {
			margin-top: 3.2307692308em;
		}

		.content-bottom-widgets .widget-area:nth-child(1):nth-last-child(2),
		.content-bottom-widgets .widget-area:nth-child(2):nth-last-child(1) {
			float: left;
			margin-right: 7.1428571%;
			width: 46.42857145%;
		}

		.content-bottom-widgets .widget-area:nth-child(2):nth-last-child(1):last-of-type {
			margin-right: 0;
		}

		.site-footer {
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-flex-wrap: wrap;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			padding: 0 4.5455% 3.5em;
		}

		.site-footer .social-navigation {
			margin: 0;
			-webkit-order: 2;
			-ms-flex-order: 2;
			order: 2;
		}

		.site-info {
			margin: 0.538461538em auto 0.538461538em 0;
			-webkit-order: 1;
			-ms-flex-order: 1;
			order: 1;
		}

		.no-sidebar .content-area {
			float: none;
			margin: 0;
			width: 100%;
		}

		.no-sidebar .entry-header,
		.no-sidebar .entry-content,
		.no-sidebar .entry-summary,
		.no-sidebar .entry-footer,
		.no-sidebar .comments-area,
		.no-sidebar .image-navigation,
		.no-sidebar .post-navigation,
		.no-sidebar .pagination,
		.no-sidebar .page-header,
		.no-sidebar .page-content,
		.no-sidebar .content-bottom-widgets {
			margin-right: 15%;
			margin-left: 15%;
		}

		.widecolumn {
			padding-right: 15%;
			padding-left: 15%;
		}
	}

	/**
 * 14.4 - >= 985px
 */

	@media screen and (min-width: 61.5625em) {
		.site-main {
			margin-bottom: 7.0em;
		}

		.site-header {
			padding: 5.25em 4.5455%;
		}

		.site-branding,
		.site-header-menu,
		.header-image {
			margin-top: 1.75em;
			margin-bottom: 1.75em;
		}

		.custom-logo {
			max-width: 240px;
		}

		.image-navigation {
			margin-bottom: 3.230769231em;
		}

		.post-navigation {
			margin-bottom: 7.0em;
		}

		.pagination {
			margin-bottom: 5.894736842em;
		}

		.widget {
			margin-bottom: 4.307692308em;
		}

		.site-main > article {
			margin-bottom: 7.0em;
		}

		.entry-title {
			font-size: 40px;
			font-size: 2.5rem;
			line-height: 1.225;
			margin-bottom: 1.05em;
		}

		.format-aside .entry-title,
		.format-image .entry-title,
		.format-video .entry-title,
		.format-quote .entry-title,
		.format-gallery .entry-title,
		.format-status .entry-title,
		.format-link .entry-title,
		.format-audio .entry-title,
		.format-chat .entry-title {
			font-size: 23px;
			font-size: 1.4375em;
			line-height: 1.304347826;
			margin-bottom: 1.826086957em;
		}

		.post-thumbnail {
			margin-bottom: 2.625em;
		}

		.entry-content h1,
		.entry-summary h1,
		.comment-content h1 {
			font-size: 33px;
			font-size: 2.0625rem;
			line-height: 1.2727272727;
			margin-top: 1.696969697em;
			margin-bottom: 0.8484848485em;
		}

		.entry-content h2,
		.entry-summary h2,
		.comment-content h2 {
			font-size: 28px;
			font-size: 1.75rem;
			line-height: 1.25;
			margin-top: 2em;
			margin-bottom: 1em;
		}

		.entry-content h3,
		.entry-summary h3,
		.comment-content h3 {
			font-size: 23px;
			font-size: 1.4375rem;
			line-height: 1.2173913043;
			margin-top: 2.4347826087em;
			margin-bottom: 1.2173913043em;
		}

		.entry-content h4,
		.entry-summary h4,
		.entry-intro h4,
		.comment-content h4 {
			letter-spacing: 0.131578947em;
		}

		.entry-content h4,
		.entry-content h5,
		.entry-content h6,
		.entry-summary h4,
		.entry-summary h5,
		.entry-summary h6,
		.comment-content h4,
		.comment-content h5,
		.comment-content h6 {
			font-size: 19px;
			font-size: 1.1875rem;
			line-height: 1.1052631579;
			margin-top: 2.9473684211em;
			margin-bottom: 1.473684211em;
		}

		.author-info {
			border-bottom-width: 0;
			padding-bottom: 0;
		}

		.comment-list + .comment-respond,
		.comment-navigation + .comment-respond {
			padding-top: 5.25em;
		}

		.comments-area,
		.sidebar,
		.content-bottom-widgets .widget-area,
		.widecolumn {
			margin-bottom: 7.0em;
		}

		body:not(.search-results) .entry-summary {
			margin-bottom: 2.210526316em;
		}

		body:not(.search-results) .entry-header + .entry-summary {
			margin-top: -1.105263158em;
		}

		body:not(.search-results) article:not(.type-page) .entry-content {
			float: right;
			width: 71.42857144%;
		}

		body:not(.search-results) article:not(.type-page) .entry-content > blockquote.alignleft.below-entry-meta {
			margin-left: -40%;
			width: -webkit-calc(60% - 1.4736842105em);
			width: calc(60% - 1.4736842105em);
		}

		body:not(.search-results) article:not(.type-page) img.below-entry-meta,
		body:not(.search-results) article:not(.type-page) figure.below-entry-meta {
			clear: both;
			display: block;
			float: none;
			margin-right: 0;
			margin-left: -40%;
			max-width: 140%;
		}

		body:not(.search-results) article:not(.type-page) figure.below-entry-meta img.below-entry-meta,
		body:not(.search-results) article:not(.type-page) table figure.below-entry-meta,
		body:not(.search-results) article:not(.type-page) table img.below-entry-meta {
			margin: 0;
			max-width: 100%;
		}

		body:not(.search-results) article:not(.type-page) .entry-footer {
			float: left;
			margin-top: 0.1538461538em;
			width: 21.42857143%;
		}

		body:not(.search-results) article:not(.type-page) .entry-footer > span:not(:last-child):after {
			display: none;
		}

		.single .byline,
		.full-size-link,
		body:not(.search-results).group-blog .byline,
		body:not(.search-results) .entry-format,
		body:not(.search-results) .cat-links,
		body:not(.search-results) .tags-links,
		body:not(.search-results) article:not(.sticky) .posted-on,
		body:not(.search-results) article:not(.type-page) .comments-link,
		body:not(.search-results) article:not(.type-page) .entry-footer .edit-link {
			display: block;
			margin-bottom: 0.5384615385em;
		}

		body:not(.search-results) article:not(.type-page) .entry-footer > span:last-child {
			margin-bottom: 0;
		}

		body:not(.search-results) article:not(.type-page) .entry-footer .avatar {
			display: block;
			height: auto;
			margin: 0 0 0.5384615385em;
			width: 49px;
		}

		body.no-sidebar:not(.search-results) article:not(.type-page) .entry-content {
			float: left;
			margin-right: -100%;
			margin-left: 34.99999999%;
			width: 50.00000001%;
		}

		body.no-sidebar:not(.search-results) article:not(.type-page) .entry-footer {
			margin-right: -100%;
			margin-left: 15%;
			width: 15%;
		}
	}

	/**
 * 14.5 - >= 1200px
 */

	@media screen and (min-width: 75em) {
		body:not(.search-results) .entry-summary {
			font-size: 23px;
			font-size: 1.4375rem;
			line-height: 1.5217391304;
			margin-bottom: 1.826086957em;
		}

		body:not(.search-results) .entry-header + .entry-summary {
			margin-top: -0.913043478em;
		}

		body:not(.search-results) .entry-summary p,
		body:not(.search-results) .entry-summary address,
		body:not(.search-results) .entry-summary hr,
		body:not(.search-results) .entry-summary ul,
		body:not(.search-results) .entry-summary ol,
		body:not(.search-results) .entry-summary dl,
		body:not(.search-results) .entry-summary dd,
		body:not(.search-results) .entry-summary table {
			margin-bottom: 1.5217391304em;
		}

		body:not(.search-results) .entry-summary li > ul,
		body:not(.search-results) .entry-summary blockquote > ul {
			margin-left: 0.956521739em;
		}

		body:not(.search-results) .entry-summary li > ol,
		body:not(.search-results) .entry-summary blockquote > ol {
			margin-left: 1.52173913em;
		}

		body:not(.search-results) .entry-summary blockquote {
			font-size: 23px;
			font-size: 1.4375rem;
			line-height: 1.5217391304;
			margin: 0 0 1.5217391304em;
			padding-left: 1.347826087em;
		}

		body:not(.search-results) .entry-summary blockquote:not(.alignleft):not(.alignright) {
			margin-left: -1.52173913em;
		}

		body:not(.search-results) .entry-summary blockquote blockquote:not(.alignleft):not(.alignright) {
			margin-left: 0;
		}

		body:not(.search-results) .entry-summary blockquote cite,
		body:not(.search-results) .entry-summary blockquote small {
			font-size: 19px;
			font-size: 1.1875rem;
			line-height: 1.8421052632;
		}

		body:not(.search-results) .entry-summary th,
		body:not(.search-results) .entry-summary td {
			padding: 0.3043478261em;
		}

		body:not(.search-results) .entry-summary pre {
			font-size: 16px;
			font-size: 1rem;
			line-height: 1.75;
			margin-bottom: 1.75em;
			padding: 1.75em;
		}

		body:not(.search-results) .entry-summary fieldset {
			margin-bottom: 1.5217391304em;
			padding: 0.3043478261em;
		}

		body:not(.search-results) .entry-summary h1 {
			margin-top: 2.121212121em;
			margin-bottom: 1.060606061em;
		}

		body:not(.search-results) .entry-summary h2 {
			margin-top: 2.5em;
			margin-bottom: 1.25em;
		}

		body:not(.search-results) .entry-summary h3 {
			margin-top: 3.043478261em;
			margin-bottom: 1.52173913em;
		}

		body:not(.search-results) .entry-summary h4,
		body:not(.search-results) .entry-summary h5,
		body:not(.search-results) .entry-summary h6 {
			margin-top: 3.684210526em;
			margin-bottom: 1.842105263em;
		}

		body:not(.search-results) .entry-summary h1:first-child,
		body:not(.search-results) .entry-summary h2:first-child,
		body:not(.search-results) .entry-summary h3:first-child,
		body:not(.search-results) .entry-summary h4:first-child,
		body:not(.search-results) .entry-summary h5:first-child,
		body:not(.search-results) .entry-summary h6:first-child {
			margin-top: 0;
		}

		body:not(.search-results) .entry-summary .alignleft {
			margin: 0.2608695652em 1.5217391304em 1.5217391304em 0;
		}

		body:not(.search-results) .entry-summary .alignright {
			margin: 0.2608695652em 0 1.5217391304em 1.5217391304em;
		}

		body:not(.search-results) .entry-summary .aligncenter {
			margin-bottom: 1.5217391304em;
		}
	}

	/**
 * 15.0 - Print
 */

	@media print {
		form,
		button,
		input,
		select,
		textarea,
		.navigation,
		.main-navigation,
		.social-navigation,
		.sidebar,
		.content-bottom-widgets,
		.header-image,
		.page-links,
		.edit-link,
		.comment-respond,
		.comment-edit-link,
		.comment-reply-link,
		.comment-metadata .edit-link,
		.pingback .edit-link {
			display: none;
		}

		body,
		blockquote cite,
		blockquote small,
		pre,
		.entry-content h4,
		.entry-content h5,
		.entry-content h6,
		.entry-summary h4,
		.entry-summary h5,
		.entry-summary h6,
		.comment-content h4,
		.comment-content h5,
		.comment-content h6,
		.entry-content .author-title {
			font-size: 12pt;
		}

		blockquote {
			font-size: 14.25pt;
		}

		.site-title,
		.page-title,
		.comments-title,
		.entry-content h2,
		.entry-summary h2,
		.comment-content h2,
		.widecolumn h2 {
			font-size: 17.25pt;
		}

		.site-description {
			display: block;
		}

		.entry-title {
			font-size: 24.75pt;
			line-height: 1.2727272727;
			margin-bottom: 1.696969697em;
		}

		.format-aside .entry-title,
		.format-image .entry-title,
		.format-video .entry-title,
		.format-quote .entry-title,
		.format-gallery .entry-title,
		.format-status .entry-title,
		.format-link .entry-title,
		.format-audio .entry-title,
		.format-chat .entry-title {
			font-size: 17.25pt;
			line-height: 1.304347826;
			margin-bottom: 1.826086957em;
		}

		.entry-content h1,
		.entry-summary h1,
		.comment-content h1 {
			font-size: 21pt;
		}

		.entry-content h3,
		.entry-summary h3,
		.comment-content h3,
		body:not(.search-results) .entry-summary {
			font-size: 14.25pt;
		}

		.site-description,
		.author-bio,
		.entry-footer,
		.sticky-post,
		.taxonomy-description,
		.entry-caption,
		.comment-metadata,
		.comment-notes,
		.comment-awaiting-moderation,
		.site-info,
		.wp-caption .wp-caption-text,
		.gallery-caption {
			font-size: 9.75pt;
		}

		body,
		.site {
			background: none !important; /* Brute force since user agents all print differently. */
		}

		body,
		blockquote cite,
		blockquote small,
		.site-branding .site-title a,
		.entry-title a,
		.comment-author {
			color: #1a1a1a !important; /* Make sure color schemes don't affect to print */
		}

		blockquote,
		.page-header,
		.comments-title {
			border-color: #1a1a1a !important; /* Make sure color schemes don't affect to print */
		}

		blockquote,
		.site-description,
		body:not(.search-results) .entry-summary,
		body:not(.search-results) .entry-summary blockquote,
		.author-bio,
		.entry-footer,
		.entry-footer a,
		.sticky-post,
		.taxonomy-description,
		.entry-caption,
		.comment-author,
		.comment-metadata a,
		.comment-notes,
		.comment-awaiting-moderation,
		.site-info,
		.site-info a,
		.wp-caption .wp-caption-text,
		.gallery-caption {
			color: #686868 !important; /* Make sure color schemes don't affect to print */
		}

		code,
		hr {
			background-color: #d1d1d1 !important; /* Make sure color schemes don't affect to print */
		}

		pre,
		abbr,
		acronym,
		table,
		th,
		td,
		.author-info,
		.comment-list article,
		.comment-list .pingback,
		.comment-list .trackback,
		.no-comments {
			border-color: #d1d1d1 !important; /* Make sure color schemes don't affect to print */
		}

		a {
			color: #007acc !important; /* Make sure color schemes don't affect to print */
		}

		.entry-content a,
		.entry-summary a,
		.taxonomy-description a,
		.comment-content a,
		.pingback .comment-body > a {
			box-shadow: none;
			border-bottom: 1px solid #007acc !important; /* Make sure color schemes don't affect to print */
		}

		.site {
			margin: 5%;
		}

		.site-inner {
			max-width: none;
		}

		.site-header {
			padding: 0 0 1.75em;
		}

		.site-branding {
			margin-top: 0;
			margin-bottom: 1.75em;
		}

		.site-main {
			margin-bottom: 3.5em;
		}

		.entry-header,
		.entry-footer,
		.page-header,
		.page-content,
		.entry-content,
		.entry-summary,
		.post-thumbnail,
		.comments-area {
			margin-right: 0;
			margin-left: 0;
		}

		.post-thumbnail,
		.site-main > article {
			margin-bottom: 3.5em;
		}

		.entry-content blockquote.alignleft,
		.entry-content blockquote.alignright {
			border-width: 4px 0 0 0;
			padding: 0.9473684211em 0 0;
			width: -webkit-calc(50% - 0.736842105em);
			width: calc(50% - 0.736842105em);
		}

		body:not(.search-results) .entry-header + .entry-summary {
			margin-top: -1.473684211em;
		}

		.site-footer,
		.widecolumn {
			padding: 0;
		}
	}

</style>
</body>
</html>
