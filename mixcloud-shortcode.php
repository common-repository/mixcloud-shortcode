<?php
/*
Plugin Name: Mixcloud Shortcode
Plugin URI: http://www.zsantana.com/mixcloud-shortcode/
Description: Mixcloud Shortcode for posts and pages. Defaut usage: [mixcloud]http://www.mixcloud.com/artist-name/long-live-set-name/[/mixcloud]. Make sure it's the track permalink (...com/artist-name/dj-set-or-live-name/) instead of "...com/player/". Optional parameters: height and width. [mixcloud height="100" width="400"]http://www.mixcloud.com/artist-name/recorded-live-somewhere/[/mixcloud]. The slash at the end is necessary.
Version: 1.3
Author: Zoro Santana <zoro@zsantana.com>
Author URI: http://www.zsantana.com/
*/

if (!class_exists("mixcloudShortcode")) {
	/**
	 * Mixcloud Shortcode Class
	 * 
	 * @author Zoro Santana <zoro@zsantana.com>
	 *
	 */
	class mixcloudShortcode {

		/**
		 * Class constructor
		 */
		function mixcloudShortcode() {
			//remvove auto-embed filter
			remove_filter('the_content', array($GLOBALS['wp_embed'], 'autoembed'), 8);

			//add WP Shortcode
			add_shortcode('mixcloud', array($this, 'createShortcode'));
		}
		
		/**
		 * Create the Mixcloud shortcode.
		 * 
		 * Shorcode syntax: [mixcloud height="int value" width="int value" cover="boolean true/false" light="boolean true/false"]
		 * 
		 * Player styles options: 
		 * 	Player height: small (60), median (120), and large height (180)
		 * 	Track cover: hide/show
		 * 	Light color: on/off 
		 * 
		 * @param array $shortcodeAttributes
		 * @param string $shortcodeContent
		 */
		function createShortcode($shortcodeAttributes, $shortcodeContent) {
			extract( shortcode_atts( array(
				'height' => '300',
				'width' => '300',
				'hide_cover' => 0,
				'light' => 0 
			), $shortcodeAttributes ) );
			
			// Explode Mixcloud url passed within shortcode tags
			// format: mixcloud.com/artist/title
			$pieces = explode('/', $shortcodeContent);
			foreach($pieces as $key => $value) {
				// Get the array index when mixcould found
				if ("www.mixcloud.com" === $value){
					break;	
				}	
			}
			
			// Build value for param tag on the following format: mixcloud.com/artist/title
			$feedValue = 'https://www.mixcloud.com/'.$pieces[$key+1].'/'.$pieces[$key+2].'/&hide_cover='. $hide_cover . '&light=' . $light;
			
			$fullIframeUrl = "https://www.mixcloud.com/widget/iframe/?feed=" . $feedValue;
			
			return "<iframe height='$height' width='$width' src='https://www.mixcloud.com/widget/iframe/?feed=$feedValue' frameborder='0'></iframe>";
		}
	}
}

// mixcloudShortcode class exists
if (class_exists("mixcloudShortcode")) {
	// create new class object
	return new mixcloudShortcode();
}

?>