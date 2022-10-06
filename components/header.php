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
				<img loading="eager" src="<?php echo esc_url( wp_get_attachment_url( "508" ) ); ?>"
					style="height:40px;"
					alt="<?php echo bloginfo( 'name' ); ?>">
			</a>
		</div>

		<nav class="main-menu">
			<ul class="main-menu__wrapper">
				<li class="menu-item-has-children"><a
						href="#"><span>Profian Assure</span></a>
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
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/blog/white-paper-introduction-to-confidential-computing"><img src="<?php echo esc_url( wp_get_attachment_url( "509" ) ); ?>" style="max-height: 300px; border: solid 1px black"></a></li>
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
								<ul class="menu">
									<li class="lf-menu-title">Latest Blog Posts
									</li>
								</ul>

								<?php
								$args  = array(
									'post_type'           => 'post',
									'post_status'         => array( 'publish' ),
									'posts_per_page'      => 3,
									'orderby'             => 'date',
									'order'               => 'DESC',
									'ignore_sticky_posts' => false,
									'category_name'       => 'blog',
								);
								$query = new WP_Query( $args );

								if ( $query->have_posts() ) :
									?>
								<div class="columns-one">
									<?php

									while ( $query->have_posts() ) {
										$query->the_post();

										get_template_part( 'components/main-menu-item' );
									}

									?>
									<a class="menu-item menu-item--small menu-item--icon" href="/resources/blog">See All Blog Posts</a>
								</div>

									<?php
								endif;
								wp_reset_postdata();
								?>
							</div>
							<div class="col2">
								<ul id="menu-blog-2" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom lf-menu-title">Press Release</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/blog/confidential-computing-startup-profian-secures-5-million-in-seed-round-in-order-to-make-cloud-computing-more-secure"><img src="<?php echo esc_url( wp_get_attachment_url( "541" ) ); ?>" style="max-height: 300px; border: solid 1px black"></a></li>
								</ul>
							</div>
							<div class="col3">
								<ul id="menu-blog-3" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom lf-menu-title">In the News</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/blog/solving-a-confidential-computing-pain-point-with-webassembly"><img src="<?php echo esc_url( wp_get_attachment_url( "510" ) ); ?>" style="max-height: 300px; border: solid 1px black"></a></li>
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
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://confidentialcomputing.io"><img src="<?php echo esc_url( wp_get_attachment_url( "507" ) ); ?>" style="max-width: 300px;"></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://cncf.io"><img src="<?php echo esc_url( wp_get_attachment_url( "505" ) ); ?>" style="max-width: 300px; padding-bottom: 15px;"></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://bytecodealliance.org"><img src="<?php echo esc_url( wp_get_attachment_url( "506" ) ); ?>" style="max-width: 300px;"></a></li>
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
