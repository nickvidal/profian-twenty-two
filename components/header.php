<?php
/**
 * Header
 *
 * Header section - contains the navigation.
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

get_header();

$site_options = get_option( 'lf-mu' );

if ( isset( $site_options['show_hello_bar'] ) && $site_options['show_hello_bar'] ) :
	get_template_part( 'components/hello-bar' );
endif;
?>

<header class="header">
	<div class="container wrap">

		<div class="logo">
			<a href="/" title="<?php echo bloginfo( 'name' ); ?>">
				<img loading="eager" src="http://localhost/wp-content/uploads/2022/08/Profian_logo-colour-positive.svg"
					style="height:40px;"
					alt="<?php echo bloginfo( 'name' ); ?>">
			</a>
		</div>

		<nav class="main-menu">
			<ul class="main-menu__wrapper">
				<li class="menu-item-has-children"><a
						href="#"><span>Solution</span></a>
					<div class="sub-menu">
						<div class="col-container">
							<div class="col1">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'solution_01',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col2">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'solution_02',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col3">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'solution_03',
										'container'      => false,
									)
								);
								?>
							</div>
						</div>
					</div>
				</li>
				<li class="menu-item-has-children"><a
						href="#"><span>Resources</span></a>
					<div class="sub-menu">
						<div class="col-container">
							<div class="col1">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'resources_01',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col2">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'resources_02',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col3">
								<ul id="menu-resources-3" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom lf-menu-title">White Paper</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://profian.com/whitepaper"><img src="http://localhost/wp-content/uploads/2022/08/profian-whitepaper-intro-confidential-computing.png" style="max-height: 300px; border: solid 1px black"></a></li>
								</ul>
							</div>
						</div>
					</div>

				</li>
				<li class="menu-item-has-children"><a href="#"><span>Blog &
							News</span></a>
					<div class="sub-menu">
						<div class="col-container">
							<div class="col1">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'blog_01',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col2">
								<ul id="menu-blog-2" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom lf-menu-title">Press Release</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://profian.com/whitepaper"><img src="http://localhost/wp-content/uploads/2022/08/profian-whitepaper-intro-confidential-computing.png" style="max-height: 300px; border: solid 1px black"></a></li>
								</ul>
							</div>
							<div class="col3">
								<ul id="menu-blog-3" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom lf-menu-title">In the News</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://profian.com/news"><img src="http://localhost/wp-content/uploads/2022/08/thenewstack.png" style="max-height: 300px; border: solid 1px black"></a></li>
								</ul>
							</div>
						</div>
					</div>

				</li>
				<li class="menu-item-has-children"><a
						href="#"><span>Community</span></a>
					<div class="sub-menu">
						<div class="col-container">
							<div class="col1">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'community_01',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col2">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'community_02',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col3">
								<ul id="menu-community-3" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom lf-menu-title">Membership</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://confidentialcomputing.io"><img src="http://localhost/wp-content/uploads/2022/08/confidential_computing_consortium-logo-horizontal-color.svg" style="max-width: 300px;"></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://cncf.io"><img src="http://localhost/wp-content/uploads/2022/08/cncf-color-bg.svg" style="max-width: 300px; padding-bottom: 15px;"></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://bytecodealliance.org"><img src="http://localhost/wp-content/uploads/2022/08/bytecode-alliance-logo.svg" style="max-width: 300px;"></a></li>
								</ul>
							</div>
						</div>
					</div>

				</li>
				<li class="menu-item-has-children">
					<a href="#"><span>Company</span></a>
					<div class="sub-menu">
						<div class="col-container">
							<div class="col1">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'about_01',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col2">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'about_02',
										'container'      => false,
									)
								);
								?>
							</div>
							<div class="col3">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'about_03',
										'container'      => false,
									)
								);
								?>
							</div>
						</div>
						</div>
					</div>
				</li>
			</ul>

			<div style="height:60px;" aria-hidden="true" class="wp-block-spacer show-upto-1000">
			</div>

			<?php if ( isset( $site_options['header_cta_text'] ) && isset( $site_options['header_cta_link'] ) && $site_options['header_cta_text'] && $site_options['header_cta_link'] ) : ?>

			<div class="header-cta">
				<a href="<?php echo esc_url( get_permalink( $site_options['header_cta_link'] ) ); ?>"
					class="wp-block-button__link"><?php echo esc_html( $site_options['header_cta_text'] ); ?></a>
			</div>

			<div style="height:20px" aria-hidden="true"
				class="wp-block-spacer show-upto-1000">
			</div>
			<?php endif; ?>
		</nav>

		<button class="hamburger" type="button" aria-label="Toggle Menu">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>

	</div>
</header>
