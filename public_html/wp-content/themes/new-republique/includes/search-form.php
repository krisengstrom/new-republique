<?php
/**
 * The template for displaying search forms
 *
 * @package WordPress
 * @subpackage New Republique
 * @since New Republique 1.0
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="vh"><?php _e( 'Search', 'nr' ); ?></label>
	<input type="text" class="field" name="s" id="s" title="Search"/>
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'nr' ); ?>" />
</form>
