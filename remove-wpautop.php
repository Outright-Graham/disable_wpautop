<?php

/*
  Plugin Name: Remove wpautop
  Author: Graham Tucker
  Version: 1.0.0
  Description: Removes the "WPAutoP" more info on that: (https://codex.wordpress.org/Function_Reference/wpautop) - Simply enable this plugin to make it continuesly run.
  Author URI: https://outrightsites.com
*/

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

?>
