<?php
/**
 * The page template
 *
 * @package WordPress
 * @subpackage New Republique
 * @since New Republique 1.0
 */
?>

<article id="post-<?php echo get_the_ID(); ?>" <?php post_class() ?>>
	<header>
		<h1><?php the_title(); ?></h1>
	</header>
	<div class="entry">
		<?php the_content(); ?>
	</div>
	<footer>
		<?php do_action('nr_page_footer'); ?>
	</footer>
</article>