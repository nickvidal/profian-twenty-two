<?php
/**
 * Post - Single
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

while ( have_posts() ) :
	the_post();
	?>
<main>
	<article class="container wrap post-content">
		<div class="post-content-wrapper">

			<?php
			// Post author section.
			if ( in_category( 'blog' ) ) :
				get_template_part( 'components/post-author' );
			endif;

			the_content();
			?>

			<div style="height:80px"
				aria-hidden="true" class="wp-block-spacer is-style-20-60">
			</div>
			<?php
			get_template_part( 'components/social-share' );
			?>

			<div style="height:80px"
				aria-hidden="true" class="wp-block-spacer is-style-40-80">
			</div>
		</div>
	</article>

	<aside class="section-bg has-light-bg wrap">
		<div class="section-title">
			<span class="section-subtitle">Featured Episodes</span>
			<h2>Check out our other podcasts</h2>
		</div>

		<div class="container">
			<?php get_template_part( 'components/latest-podcasts-horizontal' ); ?>
		</div>
	</aside>
</main>
	<?php
endwhile;
?>
