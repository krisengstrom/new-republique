<?php
/**
 * The page template file
 *
 * @package WordPress
 * @subpackage New Republique
 * @since New Republique 1.0
 */

get_header(); ?>

<div id="main">
	<div id="content">

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part('content/page'); ?>

		<?php endwhile; ?>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>