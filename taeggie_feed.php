<?php
/**
 * Plugin Name: Taeggie
 * Plugin URI: http://taeggie.com
 * Description: Social media feed plugin. Set up your feed at <a href="https://taeggie.com/manage">https://taeggie.com</a> and display the feed using shortcode and feed name.
 * Version: 0.1.7
 * Author: Taeggie Oy
 * Author URI: http://taeggie.com
 * License: GPLv2 or later
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

class TaeggieFeed {

  public function render( $args ) {

    $defaults = array(
      'name' => 'demo',
      'mode' => 'embed'
    );

    $args = wp_parse_args( $args, $defaults);

    if ($args['mode'] == 'iframe') {
      $output = '<iframe src="https://taeggie.com/embed/' . $args['name'] . '/iframe" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height: 720px; width: 100%;" allowTransparency="true"></iframe>';
    } else {
      $output = '<script id="taeggie-feed-widget-script-' . $args['name'] . '">jQuery.getScript("https://taeggie.com/embed/' . $args['name'] . '.js");</script>';
    }

    return $output;
  }

}

function taeggie_feed( $args ) {
    $feed = new TaeggieFeed();
    echo $feed->render( $args );
}

function taeggie_shortcode( $args ) {
  extract( shortcode_atts( array(
      'name' => 'demo',
      'mode' => 'embed'
  ), $args ) );

  $feed = new TaeggieFeed();

  return $feed->render( $args );
}

function taeggie_wants_jquery(){
  wp_enqueue_script( 'jquery');
}

add_action( 'wp_enqueue_scripts', 'taeggie_wants_jquery' );
add_shortcode( 'taeggie-feed', 'taeggie_shortcode' );

?>
