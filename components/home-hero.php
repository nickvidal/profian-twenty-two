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
	href="<?php echo esc_url( get_template_directory_uri() . '/images/home-hero-poster.jpg' ); ?>">

<?php
wp_enqueue_script( 'home-hero', get_template_directory_uri() . '/source/js/on-demand/video.js', null, filemtime( get_template_directory() . '/source/js/on-demand/video.js' ), true );

$metrics = LF_Utils::get_homepage_metrics();
?>
<section class="home-hero">
	<div aria-hidden="true" class="home-hero__overlay"></div>

	<img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-hero-poster.jpg' ); ?>"
		class="home-hero__poster" style="width: 100%; height: 100%;"
		alt="Make cloud native ubiquitous">

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
				src="<?php echo esc_url( get_template_directory_uri() . '/source/videos/hero.mp4' ); ?>"
				type="video/mp4">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-hero-poster.jpg' ); ?>"
				alt="Make cloud native ubiquitous">
		</video>
	</div>

	<div class="home-hero__content">
		<div class="container wrap">

			<h1 class="home-hero__title">Proven security<br />
				<span>for the untrusted cloud</span>
			</h1>

			<h2 class="home-hero__description">Profian combines the power of Confidential Computing and cryptographic certificates.<br />
We protect your data and applications in a way no one else can.</h2>

			<ul class="home-hero__metric_wrapper">
				<li class="show-over-800"><a href="/about/who-we-are/"
						class="wp-block-button__link"
						title="Learn more about CNCF">Learn more</a>
			</ul>
		</div>
	</div>
</section>
