<?php
/**
 * Home - Hero
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

?>

<link rel="preload" as="image"
	href="<?php echo esc_url( get_template_directory_uri() . '/images/profian-hero.jpg' ); ?>">

<?php
wp_enqueue_script( 'home-hero', get_template_directory_uri() . '/source/js/on-demand/video.js', null, filemtime( get_template_directory() . '/source/js/on-demand/video.js' ), true );

$metrics = LF_Utils::get_homepage_metrics();
?>
<section class="home-hero">
	<div aria-hidden="true" class="home-hero__overlay"></div>

	<img src="<?php echo esc_url( get_template_directory_uri() . '/images/profian-hero.jpg' ); ?>"
		class="home-hero__poster" style="width: 100%; height: 100%;"
		alt="Profian">

	<div class="home-hero__video-wrapper">
		<video class="home-hero__video" loop muted playsinline width="100%"
			preload="none" style="width: 100%;
		height: 100%;
		object-fit: cover;
		position: absolute;
		z-index: 1;
		top: 0;
		left: 0;">
			<source
				src="<?php echo esc_url( get_template_directory_uri() . '/source/videos/profian-hero.mp4' ); ?>"
				type="video/mp4">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/profian-hero.jpg' ); ?>"
				alt="Profian">
		</video>
	</div>

	<div class="home-hero__content">
		<div class="container wrap">

			<h1 class="home-hero__title">Cloud security<br />for data in use
			</h1>

			<h2 class="home-hero__description">Run sensitive workloads in the cloud with <strong>Confidential Computing</strong></h2>

			<ul class="home-hero__metric_wrapper">
				<li class="show-over-800"><a href="/profian-assure"
						class="wp-block-button__link"
						title="Learn more">Learn More</a>
			</ul>
		</div>
	</div>
</section>
