<?php

if( function_exists('register_block_type_from_metadata')) {
  add_action( 'init', 'register_block_cocoon_blank_box', 99 );
  function register_block_cocoon_blank_box() {
    register_block_type_from_metadata(
      __DIR__,
      array()
    );
  }
}