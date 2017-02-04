<?php

//	Prevent visitors to access the default Wordpress environment
//	Only admin and login are allowed
//	If not redirect to the defined APP_URL

add_action('init', function()
{
	if (is_admin()) return true;
	if ( $GLOBALS['pagenow'] === 'wp-login.php' ) return true;

	header("Location: ".env('APP_URL'));
	exit;
});
