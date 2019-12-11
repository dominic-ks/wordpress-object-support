<?php

namespace Wordpress_Object_Support;

include_once( 'legacy/toolset-object-support/inc/class/class.factory.php' );

class WOS_Object extends \BDTOS_Object {
  
  public function tell_me_something( $response = false ) {
    return ( $response ) ? $response : 'OK, what would you like to know?';
  }
  
  public function get_post_title( $post_id ) {
    $post = get_post( $post_id );
    return $post->post_title;
  }
  
}