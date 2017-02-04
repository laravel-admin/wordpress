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

$tabs = get_theme_support('laravel-tabs');

if (in_array('help', reset($tabs))) {
    /*
     * Remove help tab.
     */
    add_filter('contextual_help', function ($old_help, $screen_id, $screen) {
        $screen->remove_help_tabs();

        return $old_help;
    }, 999, 3);
}

if (in_array('screen-options', reset($tabs))) {
    /*
     * Remove screen tab.
     */
    add_filter('screen_options_show_screen', function () {
        return false;
    });
}
