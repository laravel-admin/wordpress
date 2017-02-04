<?php

add_action('registered_post_type', function()
{
	foreach (get_post_types(['public'=>true], 'names') as $type)
	{
		add_filter("theme_{$type}_templates", 'filter_templates');
	}
});

function filter_templates($templates)
{
	if (!defined('WP_TEMPLATE_DIR')) return [];

	if (!$type = get_post_type()) return [];


	$path = WP_TEMPLATE_DIR.$type;

	if (!is_dir($path)) return [];

	$filtered = array_filter(scandir($path), function($item)
	{
		return $item == '.' || $item == '..' || strpos($item, ".blade.php") === false ? false : true;
	});

	$list = array_map(function($item)
	{
		return str_replace(".blade.php", "", $item);
	}, $filtered);

	return array_combine($list, $list);
}
