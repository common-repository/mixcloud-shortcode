=== Mixcloud Shortcode ===

Contributors: zsantana
Donate link: http://wordpress.org/plugins/mixcloud-shortcode/
Tags: mixcloud, shortcode, player
Requires at least: 2.9
Tested up to: 4.4.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Mixcloud Shortcode to add the player to your blog or page.

== Description ==

This plugin allows you to add the Mixcloud player into your WordPress blog or page, by using the [mixcloud] shortcode.

= Usage =

Copy the URL of the song you wish to add to your WordPress post or page. 

Paste it between *[mixcloud]* and *[/mixcloud]*

`[mixcloud]https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`
 
The optional parameters are: height, width, hide_cover, and light.

= Examples =

`[mixcloud height='180' width='50%']https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

`[mixcloud height='60' width='100%']https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

`[mixcloud height='120' width='90%']https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

`[mixcloud height='180' width='100%' hide_cover=1 light=0]https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

`[mixcloud height='120' width='100%' hide_cover=1 light=0]https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

`[mixcloud width='100%' hide_cover=0 light=1]https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

`[mixcloud width='100%' hide_cover=1 light=1]https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`


== Installation ==

This section describes how to install the plugin and get it working.

1. Download `mixcloud-shortcode.zip` and unzip it.
2. Upload the folder 'mixcloud-shortcode' to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Place [mixcloud]link goes here[/mixcloud] in your post or page
5. E.g.

`[mixcloud height='120' width='90%']https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

== Frequently Asked Questions ==

= How to make my player full width? =

It is possible to make your player full width by adding `width='100%'` as parameter.

Example:

`[mixcloud width='100%']https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

= How can I increase or decrease the size of my player? =

To make your player larger or smaller, please using these two parameters `height` and `width`.

Examples:

`[mixcloud height='60' width='60']https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`

`[mixcloud height='120' width='120']https://www.mixcloud.com/neohm/neohm-ux/[/mixcloud]`


== Screenshots ==

1. Mixcloud player on a post

== Changelog ==

= 1.3 =

* Two new parameters added: hidden cover and light player.
* Flash has been discontinued.

= 1.2 =

* Flash object parameters fixes.

= 1.1 =

* Parser improvements.

= 1.0 =

* First version.
