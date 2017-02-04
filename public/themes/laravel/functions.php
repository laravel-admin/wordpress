<?php

/*	Name: Headless Wordpress Setup - Theme
 *  Author: IN10
 *  URL: in10.nl | @in10
 */

$path		=	get_template_directory().'/library/';
$directory 	= 	new \RecursiveDirectoryIterator($path);
$iterator	 = 	new \RecursiveIteratorIterator($directory);
$files = array();

foreach ($iterator as $info)
{
  if (substr($info->__toString(), -4) == '.php')
  {
      require_once($info->getPathname());
  }
}
