<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * Remove links from admin toolbar.
 */
add_action('admin_bar_menu', function ($menu) {
    $items = get_theme_support('laravel-toolbar');

    foreach (reset($items) as $item) {
        $menu->remove_node($item);
    }
}, 999);
