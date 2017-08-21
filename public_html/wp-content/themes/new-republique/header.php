<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<title>
			<?php
				global $page, $paged;
				wp_title( '|', true, 'right' );
				$site_description = get_bloginfo( 'description', 'display' ); // Add the blog description for the home/front page.
				if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
				if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nr' ), max( $paged, $page ) ); // Add a page number if necessary:
			?>
		</title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			
		</header>
		<main>