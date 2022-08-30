<?php
/**
 * Social Links
 *
 * Pulls in from Global options and displays inline SVGs with outbound links.
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

$site_options = get_option( 'lf-mu' );
?>

<ul class="social-links">
	<li class="social-twitter"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on Twitter'; ?>"
			href="https://twitter.com/profianinc"><?php LF_Utils::get_svg( 'social/twitter.svg' ); ?>
		</a></li>

	<li class="social-github"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on Github'; ?>"
			href="https://github.com/profianinc"><?php LF_Utils::get_svg( 'social/github.svg' ); ?></a></li>

	<li class="social-linkedin"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on LinkedIn'; ?>"
			href="https://www.linkedin.com/company/80162086"><?php LF_Utils::get_svg( 'social/linkedin-black.svg' ); ?></a></li>

	<?php if ( isset( $site_options['social_wechat'] ) && $site_options['social_wechat'] ) : ?>
	<li class="social-wechat"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on WeChat'; ?>"
			href="<?php echo esc_url( $site_options['social_wechat'] ); ?>"><?php LF_Utils::get_svg( 'social/wechat.svg' ); ?></a></li>
	<?php endif; ?>

	<li class="social-youtube"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on YouTube'; ?>"
			href="https://www.youtube.com/channel/UCaDB-O2yvNYL9jFBf_WLihA/playlists"><?php LF_Utils::get_svg( 'social/youtube.svg' ); ?></a></li>

	<?php if ( isset( $site_options['social_flickr'] ) && $site_options['social_flickr'] ) : ?>
	<li class="social-flickr"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on Flickr'; ?>"
			href="<?php echo esc_url( $site_options['social_flickr'] ); ?>"><?php LF_Utils::get_svg( 'social/flickr.svg' ); ?></a></li>
	<?php endif; ?>

	<?php if ( isset( $site_options['social_facebook'] ) && $site_options['social_facebook'] ) : ?>
	<li class="social-facebook"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on Facebook'; ?>"
			href="<?php echo esc_url( $site_options['social_facebook'] ); ?>"><?php LF_Utils::get_svg( 'social/facebook.svg' ); ?></a></li>
	<?php endif; ?>

	<?php if ( isset( $site_options['social_meetup'] ) && $site_options['social_meetup'] ) : ?>
	<li class="social-meetup"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on Meetup'; ?>"
			href="<?php echo esc_url( $site_options['social_meetup'] ); ?>"><?php LF_Utils::get_svg( 'social/meetup.svg' ); ?></a></li>
	<?php endif; ?>

	<?php if ( isset( $site_options['social_twitch'] ) && $site_options['social_twitch'] ) : ?>
	<li class="social-twitch"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' on Twitch'; ?>"
			href="<?php echo esc_url( $site_options['social_twitch'] ); ?>"><?php LF_Utils::get_svg( 'social/twitch.svg' ); ?></a></li>
	<?php endif; ?>

	<?php if ( isset( $site_options['social_slack'] ) && $site_options['social_slack'] ) : ?>
	<li class="social-slack"><a title="<?php echo esc_html( get_bloginfo( 'name' ) ) . ' Slack'; ?>"
			href="<?php echo esc_url( $site_options['social_slack'] ); ?>"><?php LF_Utils::get_svg( 'social/slack.svg' ); ?></a></li>
	<?php endif; ?>
</ul>
