<?php
/**
 * News Item - Vertical
 *
 * Styling in posts.scss
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

// Merge classes.
$classes = LF_Utils::merge_classes(
	array(
		$is_in_the_news_category ? 'news-item-vertical in-the-news-item' : 'news-item-vertical ',
		is_sticky() ? 'is-sticky-news' : 'not-sticky',
		'has-animation-scale-2',
		'podcast-item-vertical'
	)
);
?>

<div class="<?php echo esc_attr( $classes ); ?>">
	<a href="<?php the_permalink(); ?>" class="news-item-vertical__link" title="<?php the_title_attribute(); ?>">
		<?php 
		$ssp_episode_image_id = get_post_meta(get_the_ID(), 'cover_image_id', true);
		$ssp_episode_image = wp_get_attachment_image_src($ssp_episode_image_id, "medium");
		?>
		<div class="podcast-thumb">
    		<img src="<?php echo $ssp_episode_image[0]; ?>" alt="<?php get_the_title(); ?>">
		</div>
		<div>
			<h4 class="podcast-item-vertical__title"><?php the_title(); ?></h4>
			<span class="podcast-item-vertical__date"><?php echo get_the_date( 'F j, Y' ); ?></span>
			<div class="hs-button button-rounded">View Episode</div>
		</div>
	</a>

</div>
