<?php 

function register_my_menu() {
  register_nav_menu('my-menu',__( 'My Menu' ));
}
add_action( 'init', 'register_my_menu' );