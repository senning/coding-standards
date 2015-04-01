<?php
/**
 * Includes the section. Looks first in the main directory, then tries other likely template directories
 * @param  {[type]} $name [description]
 * @return {[type]}       [description]
 */
function do_section( $name ){
  include $name.".php";
}

function do_chapter( $name ){
  do_section( $name );
}

function do_header( $name = 'header' ){
  do_section( $name );
}

function do_footer( $name = 'footer' ){
  do_section( $name );
}

/**
 * Create include styles
 */
function do_styles( $section = 'header' )
{
  switch( $section ){
    case 'header':
      break;
    case 'footer':
      break;
  }
}