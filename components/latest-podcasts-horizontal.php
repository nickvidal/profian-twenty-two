<?php
/**
 * Latest News Horizontal
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

$args  = array(
	'post_type'           => 'podcast',
	'post_status'         => array( 'publish' ),
	'posts_per_page'      => 3,
	'orderby'             => 'date',
	'order'               => 'DESC',
	'ignore_sticky_posts' => false,
);

global $post;
if ( $post->ID ) {
	$args['post__not_in'] = array( $post->ID );
}

$query = new WP_Query( $args );

if ( $query->have_posts() ) :
	?>
<div class="columns-three">
	<?php

	while ( $query->have_posts() ) {
		$query->the_post();

		get_template_part( 'components/podcast-item-vertical' );
	}
	?>
</div>

	<?php
endif;
wp_reset_postdata();
