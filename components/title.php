<?php
/**
 * Title
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

// setup options.
$site_options = get_option( 'lf-mu' );
$header_classes = ['title-wrapper', 'wrap'];

if(is_singular('podcast')) {
	unset($header_classes['container']);
	$header_classes[] = 'is-style-gradient-up-section';
	$header_classes[] = 'ribbon-divider-bg';
	$header_classes[] = 'title-dark';
}
?>
<header class="<?php echo implode($header_classes, ' '); ?>">
	<div class="container">
		<?php if(!is_singular('podcast')): 
			get_template_part( 'components/title-links' ); 
		endif; ?>
		<?php if ( is_tag() || is_tax() ) :
			if ( is_tax( 'lf-author-category' ) ) { ?>
				<h1 class="is-style-page-title">All <?php single_cat_title(); ?> Posts</h1>
					<?php
			} elseif ( is_tax( 'lf-report-type' ) ) {
				?>
				<h1 class="is-style-page-title">All <?php single_cat_title(); ?> Reports</h1>
			<?php
			} else {
				// Used for annual reports search?
				?>
				<h1 class="is-style-page-title">
					<?php single_cat_title(); ?>
				</h1>
		<?php } ?>
		<?php elseif ( is_author() ) : ?>
			<h1 class="is-style-page-title">All posts by <?php the_author(); ?></h1>
		<?php elseif ( is_archive() ) : ?>
			<h1 class="is-style-page-title">
				<?php post_type_archive_title(); ?>
			</h1>
		<?php elseif ( is_search() ) : ?>
			<h2 class="is-style-page-title">Search results for:
			<span class="has-text-color has-primary-400-color"><?php echo esc_attr( get_search_query() ); ?></span></h2>
		<?php elseif ( ! ( is_404() ) && ( is_page() ) ) :
			if ( 38018 === wp_get_post_parent_id( $post ) ) {
				?>
			<div class="parent-link-align">
				<a class="parent-link" href="/phippy/" title="Go to Phippy and friends">Phippy and friends</a>
			</div>
			<?php } // PAGE TITLE. ?>
			<h1 class="is-style-page-title" itemprop="headline"><?php the_title(); ?>
			</h1>
			<?php elseif ( is_singular( 'lf_project' ) ) : ?>
			<h1 class="is-style-project-single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php elseif ( ! ( is_404() ) && ( is_single() ) ) : ?>
				<?php if ( is_singular('podcast') ) { ?>
					<div class="section-title">
						<span class="section-subtitle">Episode 239</span>
						<h1><?php the_title(); ?></h1>
					</div>
				<?php } elseif ( is_singular( 'lf_case_study' ) || is_singular( 'lf_case_study_cn' ) ) { ?>
				<!-- // case study title  -->
				<?php } else { ?>
					<h1 class="is-style-post-title" itemprop="headline"><?php the_title(); ?>
					</h1>
				<?php } ?>
				<?php
				if ( is_singular( 'lf_report' ) || is_singular( 'lf_spotlight' ) || is_singular( 'lf_human' ) || is_singular( 'lf_kubeweekly' ) ) {
					?>
				<div style="height:50px" aria-hidden="true"
					class="wp-block-spacer is-style-30-50"></div>
				<p class="is-style-spaced-uppercase has-small-font-size">Published: <?php echo get_the_date(); ?></p>
					<?php } ?>
		<?php elseif ( is_home() ) : ?>
			<h1 class="is-style-page-title" itemprop="headline"><?php single_post_title(); ?></h1>
		<?php else : ?>
			<h1 class="is-style-page-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php endif; ?>
	</div>
</header>
