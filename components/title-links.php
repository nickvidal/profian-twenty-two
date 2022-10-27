<?php
/**
 * Title Links
 *
 * One file to control all the different taxonomy/parent links.
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

?>
<div class="parent-link-align">
	<?php if( function_exists('bcn_display') && is_single() ) {
		bcn_display();
	} ?>
</div>