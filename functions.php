<?php


/**
* Check to see if this page will paginate
* 
* @return boolean
*/
function will_paginate() 
{
  global $wp_query;
  
  if ( !is_singular() ) 
  {
    $max_num_pages = $wp_query->max_num_pages;
    
    if ( $max_num_pages > 1 ) 
    {
      return true;
    }
  }
  return false;
}



?>